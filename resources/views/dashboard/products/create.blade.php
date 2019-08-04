@extends('dashboard.pages.index')
@section('title')
Create Product

@endsection

@section('subtitle')

Create Product

@endsection

@section('head')
Create Product

@endsection
@section('content')

{{ Form::open(['action' => 'productController@store' , 'method' => 'post','enctype'=>'multipart/form-data']) }}
   <div class="container">
 
  <div class="panel panel-default">
    
    <div class="panel-body">
  
      
        
        {{Form::label('title', 'Title')}}
          <br>
        {{Form::text('title','',['placeholder'=>'Title','class'=>'form-control'])}}
          <br>
          {{Form::label('details', 'Details')}}
          <br>
        {{Form::text('details','',['placeholder'=>'Details','class'=>'form-control'])}}
          <br>
                {{Form::label('quantity', 'Quantity')}}
          <br>
        {{Form::text('quantity','',['placeholder'=>'Quantity','class'=>'form-control'])}}
          <br>
                  {{Form::label('price', 'Price')}}
          <br>
        {{Form::text('price','',['placeholder'=>'Price','class'=>'form-control'])}}
          <br>
          
          <select class="form-control" name="catagory_id">
        <option>Select Catagory</option>
            @foreach ($catagory as $key => $value)
   
              <option value="{{ $key }}" >{{ $value }} </option>
   

              @endforeach
                          </select>
<br>
<br>
     {{Form::file('img'),['class'=>'btn']}}

     {{Form::file('images'),['class'=>'btn']}}
             <br>
             <br>
        

     {{Form::submit('Create',['class'=>'btn btn-primary'])}}
    </div>
  </div>
</div>
  {{ Form::close() }}
@endsection