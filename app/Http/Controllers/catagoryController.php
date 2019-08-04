<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagory;

class catagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagory = catagory::all();
        return view('dashboard.catagory.index')->with('catagory',$catagory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.catagory.create');
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
        'title' => 'required',
        'img'=>'image|nullable|max:1024'


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

       $catagory = new catagory;
       $catagory->title = $request->input('title');
       $catagory->img = $fileNameStore;
       $catagory->save();
       return redirect('/catagory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
$catagory= catagory::find($id);

      return view('dashboard.catagory.show')->with('catagory',$catagory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $catagory = catagory::find($id);
        return view('dashboard.catagory.edit')->with('catagory', $catagory);
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
        'title' => 'required',
        'img'=>'image|nullable|max:1024'


       ]


        );
       if ($request->hasFile('img')){

            $fileNameWithExtention = $request->file('img')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtention,PATHINFO_BASENAME);
            $fileExtention = $request->file('img')->getClientOriginalExtension();
            $fileNameStore=  $fileName.'_'.time().'.'.  $fileExtention;
            $path = $request->file('img')->storeAs('public\img',$fileNameStore);
          }

        $catagory =  catagory::find($id) ;
       $catagory->title = $request->input('title');
       if($request->hasFile('img')){       

        $catagory->img = $fileNameStore;
}
       $catagory->save();
       return redirect('/catagory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catagory = catagory::find($id);
        $catagory->delete();
        return redirect ('/catagory');
    }
}
