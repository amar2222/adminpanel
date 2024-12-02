@extends('layouts.layout') 

@section('content')

<section class="content">
  
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
        <div class="col-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Employee List</h3>
                <a  href="{{url('createemployee')}}" style="float:right;width: 10rem;" class="btn btn-block btn-primary">Add Empoyee</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr.no</th>
                    <th>Full Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Phone</th>
                  <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                @foreach($data['employee'] as $key => $emp)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$emp->first_name . $emp->last_name }}</td>
                    <td>{{@$emp->company['name']}}</td>
                    <td>{{$emp->email}}</td>
                    <td>{{$emp->phone}}</td> 
                    <td><a href="{{route('editemployee',$emp->id) }}"> Edit </a>  /  <a href="{{route('deleteemployee',$emp->id) }}">Delete</a></td>
                  </tr>
                @endforeach
                  </tbody>
                
                </table>
                <div>
              {{ $data['employee']->links('pagination::bootstrap-5') }}
</div>
              </div>
             
             
              <!-- /.card-body -->
            </div>
        </div>
        <!-- /.row -->

       
       
      </div><!--/. container-fluid -->
      </div><!--/. container-fluid -->
    </section>
    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,"info": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "bPaginate": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
</script>
    @stop