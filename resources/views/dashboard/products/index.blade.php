
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
                          <th><a class="btn btn-success" href="/product/create" role="button">Create Product +</a></th>
                  </tr>
                </thead>
             
                  @foreach($products as $pr)
                <tbody>
                
                  <tr>
                    <td>{{$pr->title}}</td>
                      <td>{{$pr->details}}</td>
                        <td>{{$pr->quantity}}</td>
                         <td>{{$pr->price}}</td>
                       
                          
                    <td><img class="img-responsive" style="max-height: 70px;" src="{{url('storage/img/'.$pr->img)}}" alt="{{$pr->img}}" ></td>
                    <td>{{$pr->catagory->title}}</td>
                    <td>
                    
                     
                         <a class="btn btn-primary" href="/product/{{$pr->id}}" role="button">Details</a> 
                         


                     </td>
                   
                  </tr>
               
                </tbody>
                 @endforeach
              </table>
            </div>
          </div>
          
        </div>
@endsection