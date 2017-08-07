<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoriesController extends Controller
{
    public function store(Request $request){
        $category = new Category();

        $category->name = $request->name;
        $category->save();

        return redirect()->route('allCategories');
    }

    public function create(){
        return view('categories.create');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('categories.update')->withCategory($category);
    }

    public function update(Request $request, $id){
        $category = Category::find($id);

        $category->name = $request->name;
        $category->save();


        return redirect()->route('allCategories');
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('allCategories');
    }

    public function index(){
        $categories = Category::all();

        return view('categories.index', ['categories'=>$categories]);
    }
}
