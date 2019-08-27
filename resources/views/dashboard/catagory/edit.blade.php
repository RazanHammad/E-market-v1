
@extends('dashboard.pages.index')
@section('title')
Edit Catagory

@endsection

@section('subtitle')

Edit Catagory

@endsection 

@section('head')
Edit Catagory

@endsection
@section('content')

 {{ Form::open(['action' => ['catagoryController@update',$catagory->id ], 'method' => 'post','enctype' => 'multipart/form-data']) }}
   <div class="row container">
 
  <div class="panel panel-default">
    
    <div class="panel-body">
  
     
        {{Form::label('title', 'Catagory Title')}}
        <br>
        {{Form::text('title',$catagory->title,['placeholder'=>'Catagory Title','class'=>'form-control'])}}
    <br>
        {{Form::label('img', 'Catagory Image')}}
        <br>
         {{Form::file('img'),'$catagory->img',['class'=>'btn']}}


             <br>
             <br>
     
          {{Form::hidden('_method','PUT')}}
     {{Form::submit('Update',['class'=>'btn btn-primary'])}}
      <a class="btn btn-primary" href="/catagory" role="button">Back</a>
    </div>
  </div>
</div>

 {{ Form::close() }}
@endsection