<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except(['show_books', 'show_terror_books',
        'show_cuento_books', 'show_accion_books', 'show_novelas_books',
         'show_juvenil_books', 'show_literatura_books', 'show_drama_books', 'shopBook']);
    }
    
    public function show(){
        $books = Book::with('category')->get();
        return view('books.books', compact('books'));
        /*
        $books = Book::all();
        return view('registroProductos', compact('books'));*/
    }

    public function show_create(){
        return view('books.create');
    }

    public function shopBook($id){
        $book = Book::find($id);
        return view('cliente.single', ['book' => $book ]);
    }

    public function create()
    { 
        return view('books.create');
    }

    public function store(Request $request){
        $image = $request->file('image');
        $imageName = time().$image->getClientOriginalName();

        $title = $request->get('title');
        $autor = $request->get('author');
        $precio = $request->get('precio');
        $stock = $request->get('stock');
        $categoria = $request->get('categoria');
        
        $category = Category::where('genero', "=", $categoria)->first();
        Book::create([
            'title' => $title,
            'author' => $autor,
            'precio' => $precio,
            'stock' => $stock,
            'category_id' => $category->id,
            'image' => 'img/' . $imageName,
        ]);
        //User::create($request->all());
        return redirect()->route('showBbooks');
    }
    
    /*
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
    }*/

    public function deleteBook($id)
    {
        $dpost = Book::find($id);
        $dpost->delete();
        //Post::where('_id','=', $id)->delete();
        return  redirect()->route('showBooks');
    }

    public function show_books(){
        $books = Book::paginate(12);
        return view('cliente.shop', compact('books'));
    }

    public function show_terror_books(){
        $category = Category::where('genero', '=', 'Terror')->first();
        $id = $category->id;
        $books = Book::where('category_id', '=', $id)->get();
        return view('cliente.terror', compact('books'));
    }
    public function show_cuento_books(){
        $category = Category::where('genero', '=', 'Cuentos')->first();
        $id = $category->id;
        $books = Book::where('category_id', '=', $id)->get();
        return view('cliente.cuento', compact('books'));
    }
    public function show_accion_books(){
        $category = Category::where('genero', '=', 'Accion')->first();
        $id = $category->id;
        $books = Book::where('category_id', '=', $id)->get();
        return view('cliente.accion', compact('books'));
    }
    public function show_drama_books(){
        $category = Category::where('genero', '=', 'Drama')->first();
        $id = $category->id;
        $books = Book::where('category_id', '=', $id)->get();
        return view('cliente.drama', compact('books'));
    }
    public function show_juvenil_books(){
        $category = Category::where('genero', '=', 'Juvenil')->first();
        $id = $category->id;
        $books = Book::where('category_id', '=', $id)->get();
        return view('cliente.juvenil', compact('books'));
    }
    public function show_literatura_books(){
        $category = Category::where('genero', '=', 'Juvenil')->first();
        $id = $category->id;
        $books = Book::where('category_id', '=', $id)->get();
        return view('cliente.literatura', compact('books'));
    }

   

    /*
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
    }*/
}
