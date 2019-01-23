

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TravellersofBD</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('/register_file')}}/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/register_file')}}/css/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- new -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <style media="screen">
    body {
      font-size: 14px;
      line-height: 1.8;
      color: #222;
      font-weight: 400;
      font-family: 'Montserrat';
      background-image: url("{{asset('register_file/images/signup-bg.jpg')}}");
      background-repeat: no-repeat;
      background-size: cover;
      -moz-background-size: cover;
      -webkit-background-size: cover;
      -o-background-size: cover;
      -ms-background-size: cover;
      background-position: center center;
      padding: 115px 0;
     }
     .form-submit {
     background-image: linear-gradient(to left, #008068, #0030df);
    }
    </style>




</head>
<body>




    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                  <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="d-flex justify-content-center">
                        <img  src="{{ asset('/template/') }}/img/logo.png" alt="Travelersofbd" >
                      </div>


                        <h4 class="d-flex justify-content-center">User Registation</h4>
                        <div class="form-group">
                            <h6>First Name:</h6>
                            <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" >

                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <h6>Last Name:</h6>
                            <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}">

                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <h6>Username:</h6>
                            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}">

                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <h6>Email:</h6>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <h6>Phone:</h6>
                            <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}">

                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                         <h6>Gender</h6>
                         <select class="form-control" name="sex">
                           <option>Select</option>
                           <option>Male</option>
                           <option>Female</option>
                         </select>
                       </div>

                      <div class="form-group">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <h6>Date of Birth: &nbsp</h6>
                          </div>
                         <div class="col-sm-4">
                          <input id="datepicker" type="text" class="form-control-plaintext{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" autocomplete="off" />


                          @if ($errors->has('dob'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('dob') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <h6>Profile Image</h6>
                        <div class="col-sm-9">

                            <input type="file" name="image"  class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" accept="image/*">


                  @if ($errors->has('image'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('image') }}</strong>
                      </span>
                  @endif
                        </div>
                    </div>


                        <div class="form-group">
                            <h6>Password:</h6>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  >

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <h6>Confirm Password:</h6>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="register"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="{{url('/login')}}" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
    <footer class="page-footer font-lg " style="color:#fff;font-size:20px">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright
         Travellerofbd
        </div>
        <!-- Copyright -->

      </footer>
      <!-- Footer -->
    <script>
        // $('#datepicker').datepicker();
        $('#datepicker').datepicker({
            format: 'dd/mm/yyyy'

        });

    </script>

    <!-- JS -->
    <!-- <script src="{{asset('/register_file')}}/vendor/jquery/jquery.min.js"></script> -->
    <!-- <script src="{{asset('/register_file')}}/js/main.js"></script> -->



</body>
</html>
