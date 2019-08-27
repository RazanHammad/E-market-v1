@extends('dashboard.pages.tables')







@section('table')


   <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Show Catagory</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Catagory Title</th>
                    <th>Catagory Image</th>
                  	<th><a class="btn btn-primary" href="/catagory" role="button">Back</a> </th>
                    
                  </tr>
                </thead>
            
                <tbody>
                
                  <tr>
                    <td>{{$catagory->title}}</td>
                    <td><img src="{{url('storage/img/'.$catagory->img)}}" style="max-height: 70px;" alt="{{$catagory->img}}"></td>
                   
                    <td>
                       
                     

                          {{ Form::open(['action' => ['catagoryController@destroy' ,$catagory->id], 'method' => 'post']) }}
                           

                          {{Form::hidden('_method','delete')}}
                          {{Form::submit('Delete',['class'=>'btn btn-danger','role'=>'button'])}}
                        
                           <a class="btn btn-success" href="/catagory/{{$catagory->id}}/edit" role="button">Edit</a>
                            
                          {{ Form::close() }}


                     </td>
                
                  </tr>
                   
                </tbody>

              </table>
            </div>
          </div>
          
        </div>
@endsection