@extends('dashboard.pages.index')
@section('title')
Edit User

@endsection

@section('subtitle')
Edit User

@endsection

@section('head')
Edit User

@endsection
@section('content')

{{ Form::open(['action' =>['usersController@update',$appuser->id]  , 'method' => 'post','enctype'=>'multipart/form-data']) }}
   <div class="row container">
 
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
          
                          {{Form::label('type', 'User Type')}}

 <br>
          <select class="form-control" name="type">
        <option>Select Type</option>
            
   
              <option value="admin" @if('admin' === $appuser->type) 
                    selected
                  @endif
                >Admin </option>
              <option value="superadmin" @if('superadmin' === $appuser->type) 
                    selected
                  @endif>Super Admin </option>
              <option value="user" @if('user' === $appuser->type) 
                    selected
                  @endif>User </option>
   

              
                          </select>

<br>
  {{Form::label('img', 'User Image')}}
  <br>
     {{Form::file('img'),$appuser->img,['class'=>'btn']}}

     
             <br>
             <br>
        
        {{Form::hidden('_method','PUT')}}

     {{Form::submit('Update',['class'=>'btn btn-primary btn-sm'])}}
      <a class="btn btn-primary btn-sm" href="/user" role="button">Back</a>
    </div>
  </div>
</div>
  {{ Form::close() }}
@endsection