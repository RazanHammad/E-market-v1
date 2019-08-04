
@extends('dashboard.pages.tables')

@section('title')
Show Catagory

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
                    <th>Catagory Title</th>
                    <th>Catagory Image</th>
                    <th>Update</th>
                    
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Catagory Title</th>
                <th>Catagory Image</th>
                    <th>Update</th>
                  </tr>
                </tfoot>
                  @foreach($catagory as $ctg)
                <tbody>
                
                  <tr>
                    <td>{{$ctg->title}}</td>
                    <td>   <img class="img-responsive" src="/storage/img/{{$ctg->img}} " alt="{{$ctg->img}}" ></td>
                    <td>
                       
                     

                          {{ Form::open(['action' => ['catagoryController@destroy' ,$ctg->id], 'method' => 'post']) }}
                           

                          {{Form::hidden('_method','delete')}}
                          {{Form::submit('Delete',['class'=>'btn btn-link'])}}
                          <a href="/catagory/{{$ctg->id}}/edit" class="btn btn-link">Edit</a>
                           <a href="/catagory/create" class="btn btn-link">Create</a> 
                           <a href="/catagory/{{$ctg->id}}" class="btn btn-link">More</a> 
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