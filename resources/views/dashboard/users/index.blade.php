
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
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>User Name</th>
                    <th>User Email </th>
                    <th>User Password</th>
                    <th>User Image</th>
                      <th>User Mobile</th>
                       <th>User Lcation</th>
                      <th>User Type</th>
                          <th>Update</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                     <th>User Name</th>
                    <th>User Email </th>
                    <th>User Password</th>
                    <th>User Image</th>
                      <th>User Mobile</th>
                       <th>User Lcation</th>
                      <th>User Type</th>
                          <th>Update</th>
                  </tr>
                </tfoot>
                  @foreach($user as $usr)
                <tbody>
                
                  <tr>
                    <td>{{$usr->username}}</td>
                      <td>{{$usr->email}}</td>
                        <td>{{$usr->password}}</td>
                         <td><img class="img-responsive" src="/storage/img/{{$usr->img}}" alt="{{$usr->img}}" ></td>
                         <td>{{$usr->mobile}}</td>
                          <td>{{$usr->location}}</td>
                    <td>{{$usr->type}}</td>
                    <td> 

                          {{ Form::open(['action' => ['usersController@destroy' ,$usr->id], 'method' => 'post']) }}
                           

                          {{Form::hidden('_method','delete')}}
                          {{Form::submit('Delete',['class'=>'btn btn-link'])}}
                          <a href="/user/{{$usr->id}}/edit">Edit</a> 
                            <a href="/user/create" class="btn btn-link">Create</a> 
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