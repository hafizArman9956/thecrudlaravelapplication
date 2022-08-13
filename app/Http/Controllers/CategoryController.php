<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function index(){

        $categories = category::get();

        return view('categories.list',['categories' => $categories]);
    }

    public function create(){
        return view('categories.new');
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required|unique:categories|max:200'
        ]);

        $category = new category;
        $category->title = $request->title;
        $category->save();
        return redirect('/');
    }

    public function edit($id){
        $category = Category::where('id',$id)->first();

        return view('categories.edit',compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::where('id',$id)->first();

        $category->title = $request->title;

        $category->save();

        return redirect('/');
    }

    public function destroy($id){
        $category = Category::whereId($id)->first();

        $category->delete();

        return redirect('/');
    }
}
