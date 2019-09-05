<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\catagory;
use App\reviews;
use App\User;
use Auth;

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

    public function products(Request $request){
        if (request()->ajax()){
            $id= $request->catagory_id;
            if ($request->catagory_id !== null){
                $data=products::all()->load(['catagory'])->when($request->catagory_id,function ($q) use ($request){
                    return $q->where('catagory_id',$request->catagory_id);
                });
            }else{
                $data=products::all()->load(['catagory']);
            }
            return $data;
        }
          $catagories = catagory::all();
          $products= products::all();
            return view('frontend.products',compact('products','catagories'));
    }


     public function show($id)
    {   $reviews = reviews::orderBy('created_at', 'desc')->take(4)->get();
        $product = products::find($id);
       // $user = User::all()->where('user_id','=',Auth::user()->id);

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

    /*public function login (){

      return view('auth.customusers.login');
    }*/

      public function store (Request $request,$id){
        $this->validate($request,[
                'text'=> 'required'
       ]


        );
    

        //$user = User::get()->where('id' ,'=' ,Auth::user()->id); 
      //  $product = products::find($id);
      
      
         
       
        //$product = products::find($id);
  
  $review = reviews::get()
    ->where('users_id', '=', Auth::user()->id)
    ->where('products_id', '=', $id)
    ->first();

if (is_null($review)) {
    $reviews = new reviews;
        $reviews->text= $request->input('text');
        $reviews->users_id=Auth::user()->id;
        $reviews->products_id =$id ;
        $reviews->rating = $request->input('star');
        $reviews->save();
       
       echo "<script>";
       echo "alert('success');";
       echo "</script>";
       return redirect()->back();
} else {
 
}
  echo "<script>";
echo "alert('you review before');";
echo "</script>";
       
       
      
       // return redirect('/index')->with('success' , 'Reviews Created Successfully');
    }
}
