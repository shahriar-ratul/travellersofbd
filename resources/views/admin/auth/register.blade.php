<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
<meta content="Coderthemes" name="author" />
<!-- App favicon -->
<!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

<!-- App css -->
<link href="{{ asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
<style media="screen">
.bg-primary {
    background-color: #f7f7f7!important;
    }
    .text-muted {
color: #313a46!important;
font-weight:800;
}
</style>
<!-- new -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />


</head>

<body class="authentication-bg">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <!-- Logo-->
                    <div class="card-header pt-4 pb-4 text-center bg-primary">
                      <a href="#">
                          <span><img src="{{ asset('/web/') }}/images/logo.png" alt="" height="100"></span>
                      </a>
                    </div>

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Free Sign Up</h4>
                            <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                        </div>

                        <form method="POST" action="{{route('admin.register.submit')}}">
                          @csrf
                          <div class="form-group">
                              <h6>First Name:</h6>
                              <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

                              @if ($errors->has('firstname'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('firstname') }}</strong>
                                  </span>
                              @endif

                          </div>
                          <div class="form-group">
                              <h6>Last Name:</h6>
                              <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                              @if ($errors->has('lastname'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('lastname') }}</strong>
                                  </span>
                              @endif

                          </div>
                          <div class="form-group">
                              <h6>Username:</h6>
                              <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                              @if ($errors->has('username'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('username') }}</strong>
                                  </span>
                              @endif

                          </div>
                          <div class="form-group">
                              <h6>Email:</h6>
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                              @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group">
                              <h6>Phone:</h6>
                              <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                              @if ($errors->has('phone'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('phone') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group">


                                <h6>Gender</h6>

                                <div class="input-group mb-3">
                             <div class="col-sm-9">
                               <select class="form-control" name="sex">
                                 <option>Select</option>
                                 <option>Male</option>
                                 <option>Female</option>
                               </select>
                             </div>
                           </div>
                         </div>

                        <div class="form-group">


                              <h6>Date of Birth: &nbsp</h6>

                            <div class="input-group mb-3">
                           <div class="col-sm-8">
                            <input id="datepicker" type="text" class="form-control-plaintext{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" autocomplete="off" required />


                            @if ($errors->has('dob'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div>


                          <div class="form-group">
                              <h6>Password:</h6>
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif

                          </div>
                          <div class="form-group">
                              <h6>Confirm Password:</h6>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                          </div>


                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary" type="submit"> Sign Up </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <h4 class="text-muted">Already have account? <a href="pages-login.html" class="text-dark ml-1"><button class="btn btn-primary" type="submit"> Login </button></a></h4>
                        </div> <!-- end col-->
                    </div>
                </div>
                <!-- end card -->


                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<footer class="footer footer-alt">
  @ratul
<script>
    // $('#datepicker').datepicker();
    $('#datepicker').datepicker({
        format: 'dd/mm/yyyy'

    });

</script>

<!-- App js -->
<script src="{{asset('/assets/js/app.min.js')}}"></script>
</body>
</html>
