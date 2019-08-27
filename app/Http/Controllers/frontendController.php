<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\catagory;
use App\reviews;

class frontendController extends Controller
{
    public function index(){
    	$products = products::orderBy('created_at', 'desc')->take(6)->get();
    	$catagory1 = catagory::orderByRaw("RAND()")->take(4)->get();
    	$catagory2 = catagory::orderByRaw("RAND()")->take(4)->get();
    	 $data = array('products' => $products,
                      'catagory1' => $catagory1,
                      'catagory2' => $catagory2
                         ); 
    	return view ('frontend.index')->with($data);

    }

    public function products(){
          $catagories = catagory::get();
          $products= products::all();
            return view('frontend.products',compact('products','catagories'));
    }


     public function show($id)
    {   $reviews = reviews::orderBy('created_at', 'desc')->take(4)->get();
        $product = products::find($id);
        return view ('frontend.productsdetails', compact('reviews','product'));
    }

    public function reviewWhenLoggedIn($id){
      $product = products::find($id);
      return view ('frontend.reviewWhenLoggedIn',compact('product'));

    }

    public function reviewWhenNotLoggedIn($id){
      $product = products::find($id);
      return view ('frontend.reviewWhenNotLoggedIn',compact('product'));

    }

    public function login (){

      return view('auth.customusers.login');
    }

      public function store (Request $request,$id){
        $this->validate($request,[
                'text'=> 'required'
       ]


        );
        $product = products::find($id);

        $reviews = new reviews;
        $reviews->text= $request->input('text');
        $reviews->customusers_id=5;
        $reviews->products_id =$id ;
        $reviews->rating = $request->input('star');
        $reviews->save();
        return redirect('/index')->with('success' , 'Reviews Created Successfully');
    }
}
