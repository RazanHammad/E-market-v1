@extends('dashboard.pages.tables')
@section('table')


   <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Show User</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>User Name</th>
                    <th>User Image</th>
                    <th>User Email</th>
                  	<th><a class="btn btn-primary" href="/user" role="button">Back</a> </th>
                    
                  </tr>
                </thead>
            
                <tbody>
                
                  <tr>
                    <td>{{$appuser->username}}</td>
                    <td>{{$appuser->email}}</td>
                    <td><img src="{{url('storage/img/'.$appuser->img)}}" style="max-height: 70px;" alt="{{$appuser->img}}"></td>
                   
                    <td>
                       
                     

                          {{ Form::open(['action' => ['usersController@destroy' ,$appuser->id], 'method' => 'post']) }}
                           

                          {{Form::hidden('_method','delete')}}
                          {{Form::submit('Delete',['class'=>'btn btn-danger','role'=>'button'])}}
                        
                           <a class="btn btn-success" href="/user/{{$appuser->id}}/edit" role="button">Edit</a>
                            
                          {{ Form::close() }}


                     </td>
                
                  </tr>
                   
                </tbody>

              </table>
            </div>
          </div>
          
        </div>
@endsection