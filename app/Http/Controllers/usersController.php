<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ appUser ;
use Illuminate\Support\Facades\Hash;


class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = appUser::all();
        return view ('dashboard.users.index')->with('user',$user);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
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
                'username'=> 'required',
                'email' => 'required',
                'password' =>'required' ,
                'mobile' => 'required' ,
                'img' => 'image|nullable|max:1024' ,
                'location' => 'required' , 
                'type' => 'required'
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

         
          

       $userapp = new appUser;
       $userapp->username = $request->input('username');
       $userapp->email = $request->input('email');
        $userapp->password = Hash::make($request->input('password'));
       $userapp->img = $fileNameStore;
       $userapp->mobile = $request->input('mobile');
        $userapp->location = $request->input('location');
         $userapp->type = $request->input('type');
         
       $userapp->save();
       return redirect('/user');
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
        $appuser = appUser::find($id);
        return view('dashboard.users.edit')->with('appuser', $appuser);
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
                'username'=> 'required',
                'email' => 'required',
                'password' =>'required' ,
                'mobile' => 'required' ,
                'img' => 'image|nullable|max:1024' ,
                'location' => 'required' , 
                'type' => 'required'
       ]


        );
       if ($request->hasFile('img')){

            $fileNameWithExtention = $request->file('img')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtention,PATHINFO_BASENAME);
            $fileExtention = $request->file('img')->getClientOriginalExtension();
            $fileNameStore=  $fileName.'_'.time().'.'.  $fileExtention;
            $path = $request->file('img')->storeAs('public\img',$fileNameStore);
          }
         

         
          

       $userapp = appUser::find($id);
       $userapp->username = $request->input('username');
       $userapp->email = $request->input('email');
        $userapp->password = $request->input('password');
        if($request->hasFile('img')){
            $userapp->img = $fileNameStore;

        }
              $userapp->mobile = $request->input('mobile');
        $userapp->location = $request->input('location');
         $userapp->type = $request->input('type');
         
       $userapp->save();
       return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $userapp = appUser::find($id);
        $userapp->delete();
        return redirect ('/user');
    }
}
