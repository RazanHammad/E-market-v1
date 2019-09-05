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
   <div class="row container">
 
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
          
                  {{Form::label('catagory', 'Catagory')}}
          <br>
          <select class="form-control" name="catagory_id">
        <option>Select Catagory</option>
            @foreach ($catagory as $key => $value)
   
              <option value="{{ $key }}" >{{ $value }} </option>
   

              @endforeach
                          </select>
<br>


                  {{Form::label('img', 'Product Image')}}
          <br>
     {{Form::file('img'),['class'=>'btn']}}

                          <br>
        <br>

     {{Form::submit('Create',['class'=>'btn btn-primary btn-sm'])}}
      <a class="btn btn-primary btn-sm" href="/admin/product" role="button">Back</a>

    </div>
  </div>
</div>
  {{ Form::close() }}
@endsection