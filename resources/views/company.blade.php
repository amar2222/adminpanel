@extends('layouts.layout') 

@section('content')

<section class="content">
  
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
        <div class="col-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Company List</h3>
                <a  href="{{url('createcompany')}}" style="float:right;width: 10rem;" class="btn btn-block btn-primary">Add Company</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr.no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th>Website</th>
                  <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                @foreach($data['company'] as $key => $com)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$com->name}}</td>
                    <td>{{$com->email}}</td>
                    <td style="text-align: center;"> @if (isset($com->logo) && $com->logo != '')
                    <img src="{{url('storage/uploads/'.$com->logo)}}" style="max-width: 101px;" alt="Uploaded Image" />
                    @endif</td>
                    <td>  {{$com->website}}  </td> 
                    <td><a href="{{route('editcompany',$com->id) }}"> Edit </a>  /  <a href="{{route('deletecompany',$com->id) }}">Delete</a></td>
                  </tr>
                @endforeach
                  </tbody>
                
                </table>
                <div>
              {{ $data['company']->links('pagination::bootstrap-5') }}
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