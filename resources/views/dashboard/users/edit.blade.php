@extends('dashboard.pages.index')
@section('title')
Edit User

@endsection

@section('subtitle')

Create User

@endsection

@section('head')
Create User

@endsection
@section('content')

{{ Form::open(['action' =>['usersController@update',$appuser->id]  , 'method' => 'post','enctype'=>'multipart/form-data']) }}
   <div class="container">
 
  <div class="panel panel-default">
    
    <div class="panel-body">
  
      
        
        {{Form::label('username', 'User Name')}}
          <br>
        {{Form::text('username',$appuser->username,['placeholder'=>'User Name','class'=>'form-control'])}}
          <br>
          {{Form::label('email', 'Email')}}
          <br>
        {{Form::text('email',$appuser->email,['placeholder'=>'Email','class'=>'form-control'])}}
          <br>
          {{Form::label('password', 'Password')}}
          <br>
        {{Form::text('password',$appuser->password,['placeholder'=>'Password','class'=>'form-control'])}}
          <br>
                {{Form::label('location', 'Location')}}
          <br>
        {{Form::text('location',$appuser->location,['placeholder'=>'Location','class'=>'form-control'])}}
          <br>
                  {{Form::label('mobile', 'Mobile')}}
          <br>
        {{Form::text('mobile',$appuser->mobile,['placeholder'=>'Mobile','class'=>'form-control'])}}
          <br>
          
                          {{Form::label('type', 'Type')}}

 <br>
          <select class="form-control" name="type">
        <option>Select Type</option>
            
   
              <option value="admin" >Admin </option>
              <option value="user" >Super Admin </option>
              <option value="user" >User </option>
   

              
                          </select>

<br>
  {{Form::label('img', 'Image')}}
  <br>
     {{Form::file('img'),$appuser->img,['class'=>'btn']}}

     
             <br>
             <br>
        
        {{Form::hidden('_method','PUT')}}

     {{Form::submit('Update',['class'=>'btn btn-primary'])}}
    </div>
  </div>
</div>
  {{ Form::close() }}
@endsection