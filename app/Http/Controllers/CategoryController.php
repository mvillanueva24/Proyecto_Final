<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(){
        $categories = Category::all();
        return view('category.index', compact('categories'));

    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request){

        $category = new Category;
        $category->genero = $request->categoria;
        $category->save();
        return redirect()->route('showCategory');
    }

    public function edit($id){
        $categories = Category::find($id);
	    return view('category.edit', compact('categories'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->genero = $request->categoria;
        $category->save();
        return redirect()->route('showCategory');
    }

    public function deleteCategory($id)
    {
        $dpost = Category::find($id);
        $dpost->delete();
        //Post::where('_id','=', $id)->delete();
        return  redirect()->route('showCategory');
    }
}
