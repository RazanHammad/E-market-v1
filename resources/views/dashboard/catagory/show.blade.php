@extends('dashboard.pages.index')

@section('content')

<div class="panel panel-danger container">
    <div class="panel-heading">{{$catagory->title}}</div>
 <div class="panel-body">
   <img class="img-responsive" src="/storage/img/{{$catagory->img}}" alt="{{$catagory->img}}" style="width:50%,height:50%"></div>

<a class="btn btn-link" href="/catagory">back</a>
</div>

@endsection