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
                <h3 class="card-title">Company Create</h3>
               </div>
           <div class="card-body">
             <form action="{{route('storecompany')}}" method="post"  enctype="multipart/form-data">
           @elseif($data['function'] == 'edit')
           <div class="card-header">
                <h3 class="card-title">Company edit</h3>
               </div>
              <!-- /.card-header -->
              <div class="card-body">
             <form action="{{route('updatecompany')}}" method="post"  enctype="multipart/form-data">
             @method('PUT')
             @endif
              @csrf  
             
           <div class="card-body">
             <div class="form-group">
              <label for="companyname">Name</label>
               <input type="text" class="form-control" id="name" name="name" value="{{isset( $data['company']->name) ? @ $data['company']->name : '' }}" autocomplete='off'  placeholder="Name">
     
               @error('name')
                                    <span class="invalid-feedback" style="display:block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
             </div>
             <div class="form-group">
               <label for="companyemail">Email</label>
               <input type="text" class="form-control" name="email" value="{{isset( $data['company']->email) ? @ $data['company']->email : '' }}" autocomplete='off'  placeholder="Email">
             
               @error('email')
                                <span class="invalid-feedback" style="display:block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
              </div>
           
             <div class="form-group">
               <label for="logo">Company logo</label>
               <div class="input-group">
                 <div class="custom-file">
                   <input type="file" class="custom-file-input" name="logo" id="logo">
                   <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                 </div>
                 <!-- <div class="input-group-append">
                   <span class="input-group-text">Upload</span>
                 </div> -->
               </div>
               @error('logo')
                                <span class="invalid-feedback" style="display:block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
             </div>
          
             <div class="form-group">
              <label for="Companywebsite">Website</label>
               <input type="text" class="form-control" name="website" value="{{isset( $data['company']->website) ? @ $data['company']->website : '' }}" id="companywebsite" autocomplete='off'  placeholder="Website">
             </div>

           </div>
           <!-- /.card-body -->

           <div class="card-footer divspan">
            <input type="hidden" value="{{@$data['company']->id}}" name="id" />
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
            bsCustomFileInput.init()
        })
  </script>
    @stop