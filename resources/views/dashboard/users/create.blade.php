@extends('dashboard.pages.index')
@section('title')
Create User

@endsection

@section('subtitle')

Create User

@endsection

@section('head')
Create User

@endsection
@section('content')

{{ Form::open(['action' => 'usersController@store' , 'method' => 'post','enctype'=>'multipart/form-data']) }}
   <div class="row container">
 
  <div class="panel panel-default">
    
    <div class="panel-body">
  
      
        
        {{Form::label('username', 'User Name')}}
          <br>
        {{Form::text('username','',['placeholder'=>'User Name','class'=>'form-control'])}}
          <br>
          {{Form::label('email', 'Email')}}
          <br>
        {{Form::text('email','',['placeholder'=>'Email','class'=>'form-control'])}}
          <br>

           {{Form::label('password', 'Password')}}
          <br>
        {{Form::text('password','',['placeholder'=>'Password','class'=>'form-control'])}}
          <br>
                {{Form::label('location', 'Location')}}
          <br>
        {{Form::text('location','',['placeholder'=>'Location','class'=>'form-control'])}}
          <br>
                  {{Form::label('mobile', 'Mobile')}}
          <br>
        {{Form::text('mobile','',['placeholder'=>'Mobile','class'=>'form-control'])}}
          <br>
          
                          {{Form::label('User Type', 'Type')}}

 <br>
          <select class="form-control" name="type">
        <option>Select Type</option>
            
   
              <option value="admin" >Admin </option>
              <option value="user" >Super Admin </option>
              <option value="user" >User </option>
   

              
                          </select>
<br>


{{Form::label('img', 'User Image')}}
  <br>

     {{Form::file('img'),['class'=>'btn']}}

     
             <br>
             <br>
        

     {{Form::submit('Create',['class'=>'btn btn-primary btn-sm'])}}
     <a class="btn btn-primary btn-sm" href="/user" role="button">Back</a>
    </div>
  </div>
</div>
  {{ Form::close() }}
@endsection