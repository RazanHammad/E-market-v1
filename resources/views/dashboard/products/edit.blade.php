@extends('dashboard.pages.index')
@section('title')
Edit Product

@endsection

@section('subtitle')

Create Product

@endsection

@section('head')
Create Product

@endsection
@section('content')

{{ Form::open(['action' => ['productController@update' ,$products->id], 'method' => 'post','enctype'=>'multipart/form-data']) }}
   <div class="container">
 
  <div class="panel panel-default">
    
    <div class="panel-body">
  
      
        
        {{Form::label('title', 'Title')}}
          <br>
        {{Form::text('title',$products->title,['placeholder'=>'Title','class'=>'form-control'])}}
          <br>
          {{Form::label('details', 'Details')}}
          <br>
        {{Form::text('details',$products->details,['placeholder'=>'Details','class'=>'form-control'])}}
          <br>
                {{Form::label('quantity', 'Quantity')}}
          <br>
        {{Form::text('quantity',$products->quantity,['placeholder'=>'Quantity','class'=>'form-control'])}}
          <br>
                  {{Form::label('price', 'Price')}}
          <br>
        {{Form::text('price',$products->price,['placeholder'=>'Price','class'=>'form-control'])}}
          <br>
          
          <select class="form-control" name="catagory_id">
             
        <option>Select Catagory</option>
            @foreach ($catagory as $key => $value)
   
              <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }} >{{ $value }} </option>
   

              @endforeach
                          </select>
<br>
<br>
     {{Form::file('img'),$products->img,['class'=>'btn']}}

     {{Form::file('images'),$products->images,['class'=>'btn']}}
             <br>
             <br>
        
              {{Form::hidden('_method','PUT')}}
     {{Form::submit('Update',['class'=>'btn btn-primary'])}}
    </div>
  </div>
</div>
  {{ Form::close() }}
@endsection