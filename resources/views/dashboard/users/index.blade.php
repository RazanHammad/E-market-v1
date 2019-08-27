
@extends('dashboard.pages.tables')

@section('title')
Show Users

@endsection

@section('head')
Show Users

@endsection

@section('table')


   <!-- DataTables Example -->
        <div class="card mb-3">
          
          <div class="card-header">
            <i class="fas fa-table"></i>
           Show Users</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>User Name</th>
                    <th>User Email </th>
                   
                    <th>User Image</th>
                      <th>User Mobile</th>
                       <th>User Lcation</th>
                      <th>User Type</th>
                          <th><a class="btn btn-success" href="/user/create" role="button">Create User +</a></th>
                  </tr>
                </thead>
               
                  @foreach($user as $usr)
                <tbody>
                
                  <tr>
                    <td>{{$usr->username}}</td>
                      <td>{{$usr->email}}</td>
                       
                         <td><img class="img-responsive" style="max-height: 70px;" src="{{url('storage/img/'.$usr->img)}}" alt="{{$usr->img}}" ></td>
                         <td>{{$usr->mobile}}</td>
                          <td>{{$usr->location}}</td>
                    <td>{{$usr->type}}</td>
                    <td> 

                      
                           <a class="btn btn-primary" href="/user/{{$usr->id}}" role="button">Details</a> 

                     </td>
                   
                  </tr>
               
                </tbody>
                 @endforeach
              </table>
            </div>
          </div>
          
        </div>
@endsection