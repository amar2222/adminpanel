@extends('loginlayouts.default') 

@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="ajaxForm" action="authenticate" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" value="amar.singh2222@gmail.com">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" value="12345">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <div class="col-12" style="text-align: center;">
          <span id="errorMessage" class="error" style="color:red">{{ @Session::get('errorMessage') }}</span>
          </div>
         
          <!-- /.col -->
        </div>
        <input type="hidden" name="web" id="web"  value="1"/>
      </form>
      <!-- /.social-auth-links -->
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="adminregister" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>

<script>
  
   $(document).ready(function() {
     $('#ajaxForm').submit(function(event) {
                     event.preventDefault(); // Prevent default form submission
                $.ajax({
                    url: '{{ route('login') }}',
                    method: 'POST',
                    data: $(this).serialize(), // Serialize form data
                    success: function(response) {
                        if (response.success) {
                          const token = response.token.token ;
                          const user = response.user ;
                          const csrf = "{{ csrf_token() }}";
                         console.log(response.user); 
                          var form = $('<form action="' + response.redirect + '" method="post">@csrf'
                           +'<input type="hidden" name="token" value="' + token + '"></input>'
                           +'<input type="hidden" name="email" value="' + user + '"></input>'
                           + '</form>');
                          $('body').append(form);
                          $(form).submit();
                        
                       }else{
                          console.log(response);
                          $('#errorMessage').html(response.message);
                        }
                      
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
  </script> -->

      
        @stop