<?php

namespace App\Http\Controllers;

use App\Models\Book;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{

    public function addProducts() {
        $categories = Book::All()->pluck('categorie','categorie');

        return view('admin.addProduct')->with('categories',$categories);
    }

    public function products(){

        $products = Book::All();
        return view('admin.book')->with('products',$products);
    }

    public function savebook(Request $request){
        // $this->validate($request, ['titre' => 'required']);
    //                                 'product_description' =>'required',
    //                                'product_price'=> 'required',
    //                                'product_category'=>'required',
    //                                'product_image'=> 'image|nullable|max:1999']);

    //    if($request->hasFile('product_image')) {
    //    // Get just name with exte
    //    $fileNameWithExt=$request->file('product_image')->getClientOriginalName();
    //    // Get just File name
    //    $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
    //    //Get just file extension
    //    $extension=$request->file('product_image')->getClientOriginalExtension();
    //    //file name to store
    //    $fileNameToStore=$fileName.'_'.time().'.'.$extension;

    //    //Upload image
    //    $path=$request->file('product_image')->storeAs('public/product_images',$fileNameToStore);
    //    }
    //    else{
    //     $fileNameToStore='noimage.jpg';
       
    //    }  
       
    //    $product=new Book();
    //    $product->titre=$request->input('titre');
    //     $product->description=$request->input('description');
    //    $product->product_price=$request->input('product_price');
    //    $product->product_category=$request->input('product_category');
    //    $product->product_image=$fileNameToStore;
    //    $product->status = 1;

   
    $product=Http::get('https://www.googleapis.com/books/v1/volumes?q='.$request->input('titre'))->json();


    
    dd($product);

    
    
    
       

       return back()->with('status','Le produit a été enregistré avec succès !!');
    }
       
}
