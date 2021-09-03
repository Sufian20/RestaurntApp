<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MenuController extends Controller
{
    //============ MENU ROUTE ARE HRE======================

    public function AddMenu(){
        $categoris = Category::orderBy('category_name', 'desc')->get();
        return view('backend.menu.add_menu', compact('categoris'));
    }

    public function PostMenu(Request $request){

      
           
        $request->validate([
            'category_id' => ['required'],
            'item_name' => ['required', 'min:3', 'max:255'],
            'item_des' => ['required', 'min:3', 'max:500'],
            'item_price' => ['required'],
           'item_image' => ['required', 'image'],
        ]);

        if($request->hasFile('item_image')){
            $image = $request->file('item_image');

        
          $ext = $request->item_name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
          Image::make($image)->resize(500, 364)->save(public_path('MenuImage/' . $ext));

          Menu::insert([
            'category_id' => $request->category_id,
            'item_name' => $request->item_name,
            'item_des' => $request->item_des,
            'item_price' => $request->item_price,
            'item_image' => $ext,
            'created_at' => Carbon::now(),
        ]);

        }
        return back()->with('success', 'Food Menu Added Successfully');
    }

    //===================== VIEW FOOD MENU ARE HERE ========================

    public function AllMenu(){

        $menus = Menu::with('category')->orderBy('id', 'desc')->get();

        return view('backend.menu.all_menu', compact('menus'));
    }

    //===================== EDIT MANU ROUTE ARE HERE ================

    public function EditMenu($id){

          $menus = Menu::with('category')->findOrFail($id);
          $categoris = Category::orderBy('id', 'asc')->get();

        return view('backend.menu.edit_menu', compact('menus', 'categoris'));
    }

    public function UpdateMenu(Request $request){

        $id = $request->id;

        if($request->hasFile('item_image')){

            $image = $request->file('item_image');

            $old_img = Menu::findOrFaild($request->id)->item_image;

            if (file_exists(public_path('MenuImage/' . $old_img))) {
                unlink(public_path('MenuImage/' . $old_img));
            }

          $ext = $request->item_name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
          Image::make($image)->resize(500, 364)->save(public_path('MenuImage/' . $ext));

          Menu::findOrFail($request->id)->update([
            'category_id' => $request->category_id,
            'item_name' => $request->item_name,
            'item_des' => $request->item_des,
            'item_price' => $request->item_price,
            'item_image' => $ext,
            'updated_at' => Carbon::now(),
          ]);

        }

        else{
            Menu::findOrFail($request->id)->update([
                'category_id' => $request->category_id,
                'item_name' => $request->item_name,
                'item_des' => $request->item_des,
                'item_price' => $request->item_price,
                'updated_at' => Carbon::now(),
            ]);
        }

        return back()->with('success', 'Menu Updated Successfuly');

    }

    //====================== VIEW ROUTE ARE HERE ==================

    public function ViewMenu($id){
        $menus = Menu::with('category')->findOrFail($id)->first();
        return view('backend.menu.view_menu', compact('menus'));
    }

    //======================= DELTE MENU ARE HERE ====================

    public function DeleteMenu($id){

        Menu::findOrFail($id)->delete();

        return back()->with('success', 'Menu Deleted Successfully');
    }

    //------------------- TRASH MENU --------------------

    public function TrashMenu(){

        $menus = Menu::onlyTrashed()->paginate();
      return view('backend.menu.trash_menu', compact('menus'));
    }

    public function PermantDeleteMenu($id){

        Menu::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('success', 'Menu Parment Delete Successfully');
    }
    //-------------- RESOTORE MENU ---------------------

    public function ReStorehMenu($id){

        Menu::withTrashed()->findOrFail($id)->restore();
        return Redirect()->route('AllMenu')->with('success', 'Menu Re-Store Successfully');
    }
}
