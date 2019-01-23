<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico')}}"> -->

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

</head>

<body class="authentication-bg">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header pt-4 pb-4 text-center bg-primary">
                            <a href="#">
                                <span><img src="{{ asset('/web/') }}/images/logo.png" alt="" height="100"></span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h2 class="text-dark-50 text-center mt-0 font-weight-bold">Sign In</h2>
                                <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                            </div>

                            <form method="POST" action="{{route('admin.login.submit') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"
                                        id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email"
                                        required="required" autofocus="autofocus">

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">

                                    <label for="password">Password</label>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                        id="password" name="password" placeholder="Enter your password" required="required">

                                 @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                 @endif

                                </div>


                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 text-center">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-outline-primary btn-rounded" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif

                                    <button class="btn btn-primary" type="submit">
                                         {{ __('Login') }}
                                    </button>
                                </div>

                            </form>

                        </div>
                        <!-- end card-body -->
                       <div class="row mt-3">
                            <div class="col-12 text-center">
                                <h4 class="text-muted">Don't have an account?
                                    <a href="{{url('admin/register')}}" class="text-dark ml-1">
                                      <button class="btn btn-primary" type="submit">
                                           {{ __('Register') }}
                                      </button>
                                    </a>
                                </h4>
                            </div>
                            <!-- end col -->
                        </div>

                    </div>
                    <!-- end card -->


                    <!-- end row -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        @Ratul
    </footer>

    <!-- App js -->
    <script src="{{ asset('/')}}/assets/js/app.min.js"></script>
</body>

</html>
