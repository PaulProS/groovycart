<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setFeatured(){
        $id = $_GET['id'];

        $newProduct = Product::findOrFail($id);
        $oldProduct = Product::where('featured', '1')->first();

        if ($newProduct){
            $newProduct->featured = 1;
            $newProduct->save();
        }

        if ($oldProduct){
            $oldProduct->featured = 0;
            $oldProduct->save();
        }

        return redirect('admin/products');

    }
    public function index()
    {

        $products = Product::all();
        $fProducts = Product::pluck('title', 'id');
        return view('admin.products.index', compact('products', 'fProducts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::pluck('name', 'id');
        $brands = Brand::pluck('name', 'id');
        return view('admin.products.create', compact('categories', 'brands'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();

        if($file = $request->file('photo')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['photo' => $name]);

            $input['photo_id'] = $photo->id;

        }
        Product::create($input);

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);
        $categories = Category::pluck('name', 'id')->all();
        $brands = Brand::pluck('name', 'id');

        return view('admin.products.edit', compact('product', 'categories', 'brands'));

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
        //
        $product = Product::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('photo')){

            if($product->photo_id){
                unlink(public_path() . $product->photo->photo);
            }

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['photo' => $name]);

            $input['photo_id'] = $photo->id;

        }

        $product->update($input);

        return redirect(route('products.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $product = Product::findOrFail($id);

        if($product->photo){
            unlink(public_path() . $product->photo->photo);
        }


        $product->delete();

        return redirect(route('products.index'));
    }
}
