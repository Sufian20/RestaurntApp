<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Types\Void_;

class CategoryController extends Controller
{
    //============== ADD cATEGORY ARE HERE ================

    public function AddCategory(){

        return view('backend.category.add_category');
    }

    public function PostCategory(Request $request){

        $request->validate([
            'category_name' => ['required', 'min:3', 'max:255'],
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Category Added Successfully');

    }

    //======================== ALL CATEGORY ROUTE ARE HERE ==================

    public function AllCategory(){

       $categoris = Category::orderBy('id', 'desc')->get();
        return view('backend.category.all_category', compact('categoris'));
    }

        //======================== Edit CATEGORY ROUTE ARE HERE ==================

    public function EditCategory($id){
        
        $categoris = Category::findOrfail($id);
        return view('backend.category.edit_category', compact('categoris'));
    }

    public function UpdateCategory(Request $request){

        Category::findOrFail($request->id)->update([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('AllCategory')->with('success', 'Category Updated Successfully');
    }

    //========================= DELTE CATEGORY ====================

    public function DeleteCategory($id){

        Category::findOrFail($id)->delete();

        return back()->with('success', 'Category Deleted Successfully');
    }

    public function TrashCategory(){
        $categoris = Category::onlyTrashed()->paginate();
        return view('backend.category.trash_category', compact('categoris'));
    }

    public function ParmentDeleteCategory($id){
        Category::withTrashed()->findOrFail($id)->forceDelete();

        return back()->with('success','Category Parment Deleted');
    }

    //============== Restore CATEGORY ARE HERE ===========================

    public function RestoreCategory($id){
        Category::withTrashed()->findOrFail($id)->restore();

        return Redirect()->route('AllCategory')->with('success','Category Restore Succsessfully');
    }
}
