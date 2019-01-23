<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TravelersofBD</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('/register_file')}}/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/register_file')}}/css/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                  <form method="POST" action="{{ route('login') }}">
                      @csrf
                      <div class="d-flex justify-content-center">
                        <img  src="{{ asset('/template/') }}/img/logo.png" alt="Travelersofbd" >
                      </div>

                        <h4 class="d-flex justify-content-center">User Login</h4>

                        <div class="form-group">
                            <h6>Email:</h6>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <h6>Password:</h6>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign in" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Don't have already an account ? <a href="{{url('/register')}}" class="loginhere-link">Register here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
    <div class="container">


    </div>
    <!-- Footer -->
    <!-- Footer -->
    <footer class="page-footer font-lg " style="color:#fff;font-size:20px">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright
         Travellerofbd
        </div>
        <!-- Copyright -->
        <br>
        <br>
        <br>
    

      </footer>
      <!-- Footer -->


    <!-- JS -->
    <script src="{{asset('/register_file')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('/register_file')}}/js/main.js"></script>
</body>

</html>
