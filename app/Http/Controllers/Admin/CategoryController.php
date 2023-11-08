<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create() {
        return view('admin.category.create');
    }
    public function categoryView(){
        $category = category::all();
        return view('admin.category.view',compact('category'));
    }
    public function categoryStore(Request $request) {

        $this->validate($request,['name'=>'required|min:3','desc'=>'required']);

        $category = new category();
        $category->name= $request->name;
        $category->desc = $request->desc;
        $category->save();


        return redirect(route('category.View'))->with('success','category added successfully.....');
    }
    public function deleteCategory($id){
        $categorydelete = category::find($id);
        if($categorydelete){
            $categorydelete->delete();
            return redirect()->back()->with('success','delete successfully');
        }
    }
    public function editCategory($id){
        $categorie = category::find($id);
        return view('admin.category.edit',compact('categorie'));
    }
    public function updateCategory(Request $request, $id){
        $this->validate($request,['name'=>'required|min:3','desc'=>'required']);

        $category = category()->find($id);
        $category->name= $request->name;
        $category->desc = $request->desc;
        $category->update();
        return redirect(route('category.View',compact('category')));
    }
}
