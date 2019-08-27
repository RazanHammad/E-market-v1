@extends('dashboard.pages.index')
@section('title')
Edit Product

@endsection

@section('subtitle')

Edit Product

@endsection

@section('head')
Edit Product

@endsection
@section('content')

{{ Form::open(['action' => ['productController@update' ,$products->id], 'method' => 'post','enctype'=>'multipart/form-data']) }}
   <div class="row container">
 
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
           {{Form::label('catagory', 'Catagory')}}
          <select class="form-control" name="catagory_id">
             
        <option>Select Catagory</option>
             @foreach ($catagory as $key => $value)
   
              <option value="{{ $key }}" @if($key === $products->catagory_id)
                    selected
                    @endif

                >{{ $value }} </option>
   

              @endforeach

                          </select>
<br>
      {{Form::label('img', 'Product Image')}}
          <br>
     {{Form::file('img'),url('storage/img/'.$products->img),['class'=>'btn']}}

        <br>
        <br>
              {{Form::hidden('_method','PUT')}}
     {{Form::submit('Update',['class'=>'btn btn-primary btn-sm'])}}
      <a class="btn btn-primary btn-sm" href="/product" role="button">Back</a>
    </div>
    

  </div>
</div>
  {{ Form::close() }}
@endsection