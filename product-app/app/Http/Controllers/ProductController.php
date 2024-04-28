<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { // this mentioned Product is from the model "all the product"

        $products = Product::latest()->paginate(5); 
        return view('products.index', compact('products'))
        ->with('i', (request()->input('page',1)-1)*5); 


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // we use dd function to show up the submitted data
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'image' => 'required|image|mimes:jpeg,png|max:2000'
        ]);

        // here we store all our data in the input variabl

        $input = $request->all(); 
                
        // in here we edit the path the of image to not the same link

            if ($image = $request->file('image')) {
                $destinationPath='images/'; 
                
                $profileImage= date('YmdHis').".".$image->getClientOriginalExtension();

                $image->move($destinationPath, $profileImage); 
                $input['image']= "$profileImage"; 
            }

            //here we send all the data the model

            Product::create($input); 

            // with this "with('success')" the message will appeare to the user
            return  redirect()->route('products.index')
            ->with('success', 'successfully added'); 


        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
         // we use the compact to specify the specific product
        return view('products.show', compact('product') ); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
    
        return view('products.edit', compact('product') ); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        $input = $request->all(); 

            if ($image = $request->file('image')) {

                $destinationPath='images/'; 
                
                $profileImage= date('YmdHis').".".$image->getClientOriginalExtension();

                $image->move($destinationPath, $profileImage); 
                $input['image']= "$profileImage"; 
            } else {
                unset($input['image']); 
            }

            //here we send all the data the model

            $product->update($input); 

            // with this "with('success')" the message will appeare to the user
            return  redirect()->route('products.index')
            ->with('success', 'successfully updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete(); 
        return  redirect()->route('products.index')
            ->with('success', 'successfully deleted'); 
    }
}
