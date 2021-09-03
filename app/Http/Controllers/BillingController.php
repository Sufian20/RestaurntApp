<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    //================ BILLING ARE HERE =================

    public function Billing(){

       
        $user_ip =  $_SERVER['REMOTE_ADDR'];

        $menus = Menu::with('category')->orderBy('item_name', 'asc')->get();
        $cart = Cart::with('menu')->where('user_ip', $user_ip)->get();
        $tables = Table::all();

        $sub_total = 0;
        $qty = 0;

        foreach($cart as $value){
            $qty += $value->item_quntity;
        }

        foreach($cart as $value){

            $sub_total += $value->menu->item_price * $value->item_quntity ;
        }

        return view('backend.bill.billing',[
            'menus' => $menus,
            'cart' => $cart,
            'sub_total' => $sub_total,
            'qty' => $qty,
            'tables' => $tables,
        ]);
    }

    //==================== SINGEL CART ARE HERE ===============

    public function SingelCart($id){

        $user_ip = $_SERVER['REMOTE_ADDR'];

        if (Cart::where('item_id', $id)->where('user_ip', $user_ip)->exists()) {
            Cart::where('item_id', $id)->where('user_ip', $user_ip)->increment('item_quntity');
        } else {
            Cart::insert([
                'item_id' => $id,
                'user_ip' => $user_ip,
                'created_at' => Carbon::now(),

            ]);
        }

        return back()->with('success', 'Card added successfully');

    }

    //=========================== DELETE CART================

   public function SingelCartDelete($id){

    $user_ip = $_SERVER['REMOTE_ADDR'];

    Cart::where('user_ip', $user_ip)->where('id', $id)->delete();

     return back()->with('success', 'Cart Deleted Successfully');
   }

    //======================== CART UPDATE ==============

    function CartUpdate(Request $request)
    {

       foreach($request->cat_id as $key => $item){
        Cart::findOrfail($item)->update([
            'item_quntity' => $request->item_quntity[$key],
            'updated_at' => Carbon::now(),
        ]);

       }

            return back()->with('success', 'Cart Updated Successfully');
        }

        //=================== CREATE INVOICE ARE HERE ==================
        
        public function CreateInvoice(Request $request){

            $request->validate(
                [
                    'tbl_id' => 'required',
    
                ],
    
               
            );

            $tbl_id = $request->id;

            $tables = Table::where('id', $tbl_id)->first();
            $menus = Menu::orderBy('id', 'asc')->first();

            return view('backend.bill.invoice', [
                'tables' => $tables,
                'menus' => $menus,
            ]);
            


        }

        
    } 

