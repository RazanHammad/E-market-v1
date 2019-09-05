@extends('frontend.layout.app2')
@section('title1')
Write Review
@endsection
@section('title2')
Write Review
@endsection

@section('content')
<section class="desk-com">
      <div class="container">
       
          <div class="col-sm-9">

{{ Form::open(['action' => ['frontendController@login',$product->id] , 'method' => 'post','enctype'=>'multipart/form-data']) }}
   <div class="row container">
 
  <div class="panel panel-default">
    
    <div class="panel-body">
  
      
        
        {{Form::label('text', 'Text')}}
          <br>
        {{Form::text('text','',['placeholder'=>'Text','class'=>'form-control'])}}
          
           <br>
          <div class="stars pull-left">
    <input type="radio" value="1" name="star" class="star-1" id="star-1" />
    <label class="star-1" for="star-1">1</label>
    <input type="radio" value="2" name="star" class="star-2" id="star-2" />
    <label class="star-2" for="star-2">2</label>
    <input type="radio"  value="3" name="star" class="star-3" id="star-3" />
    <label class="star-3" for="star-3">3</label>
    <input type="radio" value="4" name="star" class="star-4" id="star-4" />
    <label class="star-4" for="star-4">4</label>
    <input type="radio" value="5" name="star" class="star-5" id="star-5" />
    <label class="star-5" for="star-5">5</label>
    <span></span>
  </div>
  <br>
  <br>

     <button onclick="location.href='/login/">
     Please Log In Before</button>
    <!-- <a class="btn btn-primary btn-sm" href="/user" role="button">Back</a>-->
    </div>
  </div>
</div>
  {{ Form::close() }}

   </div>
      </div>
   
    </section>
    @endsection