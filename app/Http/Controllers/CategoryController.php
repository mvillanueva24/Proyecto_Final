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
        return view('category.edit', ['category' => new Category()]);
    }

    public function deleteCategory($id)
    {
        $dpost = Category::find($id);
        $dpost->delete();
        //Post::where('_id','=', $id)->delete();
        return  redirect()->route('showCategory');
    }
}
