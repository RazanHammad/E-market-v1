
@extends('dashboard.pages.tables')

@section('title')
Show Catagory

@endsection

@section('head')
Show Catagory

@endsection

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
                    <th><a class="btn btn-success" href="/catagory/create" role="button">Create Catagory +</a></th>
                    
                  </tr>
                </thead>
                
                  @foreach($catagory as $ctg)
                <tbody>
                
                  <tr>
                    <td>{{$ctg->title}}</td>
                    <td>   <img class="img-responsive" style="max-height: 70px;" src="{{url('storage/img/'.$ctg->img)}}"/></td>
                    <td>
                    
                           <a class="btn btn-primary" href="/catagory/{{$ctg->id}}" role="button">Details</a> 
                         


                     </td>
                   
                  </tr>
               
                </tbody>
                 @endforeach
              </table>
            </div>
          </div>
          
        </div>
@endsection
