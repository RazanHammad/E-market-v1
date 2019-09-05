


@extends('dashboard.pages.tables')

@section('table')


   <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Show Product</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Product Title</th>
                    <th>Catagory Name</th>
                  	<th> <a class="btn btn-primary" href="/admin/product" role="button">Back</a></th>
                    
                  </tr>
                </thead>
            
                <tbody>
                
                  <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->catagory->title}}</td>
                   
                    <td>
                       <script>

                          function ConfirmDelete()
                          {
                          var x = confirm("Are you sure you want to delete?");
                          if (x)
                            return true;
                          else
                            return false;
                          }

                        </script>
                                             

                          {{ Form::open(['action' => ['productController@destroy' ,$product->id],'onsubmit' => 'return ConfirmDelete()', 'method' => 'post']) }}
                           

                          {{Form::hidden('_method','delete')}}
                          {{Form::submit('Delete',['class'=>'btn btn-danger' ,'role'=>'button'])}}
                        
                           <a class="btn btn-success" href="/admin/product/{{$product->id}}/edit" role="button">Edit</a>
                            
                          {{ Form::close() }}


           </td>
                
                  </tr>
                   
                </tbody>

              </table>
            </div>
          </div>
          
        </div>
@endsection