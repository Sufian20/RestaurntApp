<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TableController extends Controller
{
    //================ ADD TABLE ROUTE ARE HERE ================

    public function AddTable(){

        return view('backend.table.add_table');
    }

    public function PostTable(Request $request){

        $request->validate([
            'table_no' => ['required',  'min:3', 'max:255'],
        ]);
           
            Table::insert([

                'table_no' => $request->table_no,
                'created_at' => Carbon::now(),

            ]);
        return back()->with('success', 'Table No Added Successfully');
    }

    public function AllTable(){

        $tables = Table::orderBy('table_no', 'asc')->get();

        return view('backend.table.all_table', compact('tables'));
    }

    public function DeleteTable($id){
        
        Table::findOrFail($id)->delete();

        return back()->with('success', 'Table Deleted Successfully');
    }
}
