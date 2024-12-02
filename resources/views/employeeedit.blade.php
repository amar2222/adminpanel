@extends('layouts.layout') 

@section('content')

<section class="content">
  
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
        <div class="col-md-6">

        <div class="card">
           @if($data['function'] == 'create')
              <div class="card-header">
                <h3 class="card-title">Employee Create</h3>
               </div>
           <div class="card-body">
             <form action="{{route('storeemployee')}}" method="post"  enctype="multipart/form-data">
           @elseif($data['function'] == 'edit')
           <div class="card-header">
                <h3 class="card-title">Employee edit</h3>
               </div>
              <!-- /.card-header -->
              <div class="card-body">
             <form action="{{route('updateemployee')}}" method="post"  enctype="multipart/form-data">
             @method('PUT')
             @endif
              @csrf  
             
           <div class="card-body">

             <div class="form-group">
              <label for="employeename">First Name</label>
               <input type="text" class="form-control" id="first_name" name="first_name" value="{{isset( $data['employee']->first_name) ? @ $data['employee']->first_name : '' }}" autocomplete='off'  placeholder="First Name">
                  @error('first_name')
                      <span class="invalid-feedback" style="display:block" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
             </div>

             <div class="form-group">
               <label for="employeeemail">Last Name</label>
               <input type="text" class="form-control" id="last_name" name="last_name" value="{{isset( $data['employee']->email) ? @ $data['employee']->email : '' }}" autocomplete='off'  placeholder="Last Name">
             
                  @error('last_name')
                      <span class="invalid-feedback" style="display:block" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                  @enderror
              </div>
           
           
               <div class="form-group">
                  <label>Select Company (options)</label>
                  <select class="select2 form-control"  name="company_id" id="company_id" style="height: calc(2.25rem + 2px) !important;    border: 1px solid #ced4da !important;">
                   <option ></option>  
                    @foreach($data['company'] as $com)
                    <option value="{{$com->id}}" {{ $com->id == @$data['employee']->company_id ? 'selected' : ''}}  >{{$com->name}}</option>
                    @endforeach
                  </select>
                   @error('company_id')
                          <span class="invalid-feedback" style="display:block" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                    @enderror
             </div>
          
             <div class="form-group">
               <label for="employeeemail">Email</label>
               <input type="text" class="form-control" name="email" value="{{isset( $data['employee']->email) ? @ $data['employee']->email : '' }}" autocomplete='off'  placeholder="Email">
             
               @error('email')
                                <span class="invalid-feedback" style="display:block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
              </div>

              <div class="form-group">
               <label for="employeephone">Phone</label>
               <input type="number" class="form-control" name="phone" value="{{isset( $data['employee']->phone) ? @ $data['employee']->phone : '' }}" autocomplete='off'  placeholder="Phone">
             
               @error('email')
                                <span class="invalid-feedback" style="display:block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
              </div>

           </div>
           <!-- /.card-body -->

           <div class="card-footer divspan">
            <input type="hidden" value="{{@$data['employee']->id}}" name="id" />
             <button type="submit" class="btn btn-primary">Submit</button>
         
              
           </div>
         </form>
              </div>
             
             
              <!-- /.card-body -->
            </div>
        </div>
        <!-- /.row -->

       
       
      </div><!--/. container-fluid -->
      </div><!--/. container-fluid -->
    </section>
    
<script>
    $(document).ready(function () {
      $(".select2").select2({
        containerCssClass: function(e) { 
          return $(e).attr('required') ? 'required' : '';
        }
      });
        })
  </script>
    @stop