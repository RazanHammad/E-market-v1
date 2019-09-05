@extends('dashboard.pages.index')
@section('title')
Create Catagory

@endsection

@section('subtitle')

Create Catagory

@endsection

@section('head')
Create Catagory

@endsection
@section('content')

{{ Form::open(['action' => 'catagoryController@store' , 'method' => 'post','enctype'=>'multipart/form-data']) }}
   <div class="row container">
 
  <div class="panel panel-default">
    
    <div class="panel-body">
  
      
        
        {{Form::label('title', 'Title')}}
          <br>
        {{Form::text('title','',['placeholder'=>'Title','class'=>'form-control'])}}
          <br>
         {{Form::label('img', 'Catagory Image')}}
         <br>
     {{Form::file('img'),['class'=>'btn']}}


             <br>
             <br>
        

     {{Form::submit('Create',['class'=>'btn btn-primary'])}}
     <a class="btn btn-primary" href="/admin/catagory" role="button">Back</a>
    </div>
  
  </div>
</div>
  {{ Form::close() }}
@endsection