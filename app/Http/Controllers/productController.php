<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\catagory ;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $products = products::all();
     $catagory = catagory::all();
     $data = array('products' =>  $products,
                      'catagory' => $catagory);
     return view ('dashboard.products.index')->with('products',$products); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $catagory = catagory::pluck('title', 'id');
        return view('dashboard.products.create', compact('catagory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'title'=> 'required',
                'details' => 'required',
                'quantity' =>'required' ,
                'price' => 'required' ,
                'img' => 'image|nullable|max:1024' ,
                'catagory_id' => 'required' , 
                'images' => 'image|nullable|max:1024'
       ]


        );
       if ($request->hasFile('img')){

            $fileNameWithExtention = $request->file('img')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtention,PATHINFO_BASENAME);
            $fileExtention = $request->file('img')->getClientOriginalExtension();
            $fileNameStore=  $fileName.'_'.time().'.'.  $fileExtention;
            $path = $request->file('img')->storeAs('public\img',$fileNameStore);
          }
          else{
            $fileNameStore = 'noimage.jpg';
          }

           if ($request->hasFile('images')){

            $fileNameWithExtention = $request->file('images')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtention,PATHINFO_BASENAME);
            $fileExtention = $request->file('images')->getClientOriginalExtension();
            $fileNameStore2=  $fileName.'_'.time().'.'.  $fileExtention;
            $path = $request->file('images')->storeAs('public\img',$fileNameStore);
          }
          else{
            $fileNameStore2 = 'noimage.jpg';
          }
          

       $products = new products;
       $products->title = $request->input('title');
       $products->catagory_id = $request->input('catagory_id');
        $products->price = $request->input('price');
       $products->img = $fileNameStore;
       $products->details = $request->input('details');
        $products->quantity = $request->input('quantity');
         $products->images=$fileNameStore2;
       $products->save();
       return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = products::find($id);
        return view ('dashboard.products.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = products::find($id);
         $catagory = catagory::pluck('title', 'id');
         $selectedID = 2;
        return view('dashboard.products.edit')->with('products',$products)->with('catagory' , $catagory)->with('selectedID',$selectedID);
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
        $this->validate($request,[
                'title'=> 'required',
                'details' => 'required',
                'quantity' =>'required' ,
                'price' => 'required' ,
                'img' => 'image|nullable|max:1024' ,
                'catagory_id' => 'required' , 
                'images' => 'image|nullable|max:1024'
       ]


        );
       if ($request->hasFile('img')){

            $fileNameWithExtention = $request->file('img')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtention,PATHINFO_BASENAME);
            $fileExtention = $request->file('img')->getClientOriginalExtension();
            $fileNameStore=  $fileName.'_'.time().'.'.  $fileExtention;
            $path = $request->file('img')->storeAs('public\img',$fileNameStore);
          }
         

           if ($request->hasFile('images')){

            $fileNameWithExtention = $request->file('images')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtention,PATHINFO_BASENAME);
            $fileExtention = $request->file('images')->getClientOriginalExtension();
            $fileNameStore2=  $fileName.'_'.time().'.'.  $fileExtention;
            $path = $request->file('images')->storeAs('public\img',$fileNameStore);
          }
         
          

       $products =  products::find($id);
       $products->title = $request->input('title');
       $products->catagory_id = $request->input('catagory_id');
        $products->price = $request->input('price');
        if($request->hasFile('img')){
            $products->img = $fileNameStore;
        }
       
       $products->details = $request->input('details');
        $products->quantity = $request->input('quantity');
        if($request->hasFile('images')){
             $products->images=$fileNameStore2;
        }
        
       $products->save();
       return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $products = products::find($id);
        $products->delete();
        return redirect ('/product');
    }
}
