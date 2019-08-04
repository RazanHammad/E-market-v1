
@extends('dashboard.pages.tables')

@section('title')
Show Products

@endsection

@section('head')
Show Products

@endsection

@section('table')


   <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Product Title</th>
                    <th>Product Details </th>
                    <th>Quantity</th>
                    <th>Price</th>
                      <th>IMG</th>
                       <th>Catagory</th>
                      <th>IMAGES</th>
                          <th>Update</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                     <th>Product Title</th>
                    <th>Product Details </th>
                    <th>Quantity</th>
                    <th>Price</th>
                      <th>IMG</th>
                       <th>Catagory</th>
                      <th>IMAGES</th>
                    <th>Update</th>
                  </tr>
                </tfoot>
                  @foreach($products as $pr)
                <tbody>
                
                  <tr>
                    <td>{{$pr->title}}</td>
                      <td>{{$pr->details}}</td>
                        <td>{{$pr->quantity}}</td>
                         <td>{{$pr->price}}</td>
                         <td><img class="img-responsive" src="/storage/img/{{$pr->images}} " alt="{{$pr->images}}" ></td>
                          <td>{{$pr->catagory->title}}</td>
                    <td><img class="img-responsive" src="/storage/img/{{$pr->img}}" alt="{{$pr->img}}" ></td>
                    <td>
                          {{ Form::open(['action' => ['productController@destroy' ,$pr->id], 'method' => 'post']) }}
                           

                          {{Form::hidden('_method','delete')}}
                          {{Form::submit('Delete',['class'=>'btn btn-link'])}}
                          
                            <a href="/product/{{$pr->id}}/edit">Edit</a> 
                                <a href="/product/create" class="btn btn-link">Create</a> 
                                 <a href="/product/{{$pr->id}}" class="btn btn-link">More</a> 
                          {{ Form::close() }}


                     </td>
                   
                  </tr>
               
                </tbody>
                 @endforeach
              </table>
            </div>
          </div>
          
        </div>
@endsection