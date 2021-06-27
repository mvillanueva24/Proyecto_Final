<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $books = Book::all();
        return view('registroProductos', compact('books'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required:max:30',
            'author' => 'required:max:20',
            'precio' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'stock' => 'required|integer|digits_between:1,3',
            'categoria' => 'required:max:10',
        ]);

        $image = $request->file('image');
        $imageName = time().$image->getClientOriginalName();

        $title = $request->get('title');
        $autor = $request->get('autor');
        $precio = $request->get('precio');
        $stock = $request->get('stock');
        $categoria = $request->get('categoria');

        $book = $request->user()->books()->create([
            'title' => $title,
            'author' => $autor,
            'precio' => $precio,
            'stock' => $stock,
            'categoria' => $categoria,
            'image' => 'img/' . $imageName,
        ]);

        $request->image->move(public_path('img'), $imageName);

        return redirect()->route('post', ['id' => $book->id]);
    }
}
