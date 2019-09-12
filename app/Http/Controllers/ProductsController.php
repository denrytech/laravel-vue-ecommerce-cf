<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\ProductsCollection;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Mostramos una coleeción de productos
        $products = Product::paginate(2);

        if( $request->wantsJson() )
        {
            return new ProductsCollection($products);
        }

        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mostramos un formulario para crear nuevos productos
        $product = new Product;

        return view('products.create', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Amacenamos en la base de datos un nuevo producto
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ];

        if( Product::create($data) )
        {
            return redirect('/productos');
        } else {
            return view('products.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Mostramos un sólo producto
        $product = Product::find($id);

        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Mostramos formulario para modificar producto
        $product = Product::find($id);

        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Actualizamos un producto en la base de datos
        $product = Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        if( $product->save() ) 
        {
            return redirect('/productos');
        } else {
            return view('products.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminamos un producto en la base de datos
        Product::destroy($id);

        return redirect('/productos');
    }
}
