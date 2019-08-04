@extends('dashboard.pages.index')

@section('content')

<div class="panel panel-danger container">
    <div class="panel-heading">{{$product->title}}</div>
 <div class="panel-body">
 	{{$product->catagory->name}}
   <img class="img-responsive" src="/storage/img/{{$product->img}}" alt="{{$product->img}}" style="width:50%,height:50%"></div>

<a class="btn btn-link" href="/product">back</a>
</div>

@endsection