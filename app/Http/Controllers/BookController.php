<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(){
        $books = Book::with('category')->get();
        return view('registroProductos', compact('books'));
        /*
        $books = Book::all();
        return view('registroProductos', compact('books'));*/
    }

    public function show_create(){
        return view('books.create');
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
        
        $category = Category::find('genero'->$categoria);

        $book = $request->book()->create([
            'title' => $title,
            'author' => $autor,
            'precio' => $precio,
            'stock' => $stock,
            'categoria' => $category->id,
            'image' => 'img/' . $imageName,
        ]);

        $request->image->move(public_path('img'), $imageName);

        return redirect()->url('/admin/libros');
    }

    public function deleteBook($id)
    {
        $dpost = Book::find($id);
        $dpost->delete();
        //Post::where('_id','=', $id)->delete();
        return redirect()->view('registroProducto');
    }

    public function editUBook(Request $request, $id)
    {
        $user = User::find($id);
        if (($request->name && $request->email && $request->password) != null ) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password =  Hash::make($request->password);
            $user->save();

            return redirect()->route('allPosts')->with('success', 'Su cuenta se actualizó con éxito');
        } else {
        return redirect()->back()->with('warning', 'Ingrese todos los datos');
        }
    }
}
