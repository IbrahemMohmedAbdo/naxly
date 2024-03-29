<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.head')
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="{{ route('register') }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <x-forms.form-input type="text" id="exampleFirstName" placeholder="First Name" name="first_name" />
                                    </div>
                                    <div class="col-sm-6">
                                        <x-forms.form-input type="text" id="exampleLastName" placeholder="Last Name" name="last_name" />
                                    </div>
                                </div>

                                <x-forms.form-input type="email" id="exampleInputEmail" placeholder="Email Address" name="email" />

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <x-forms.form-input type="password" id="exampleInputPassword" placeholder="Password" name="password" />
                                    </div>
                                    <div class="col-sm-6">
                                        <x-forms.form-input type="password" id="exampleRepeatPassword" placeholder="Repeat Password" name="password_confirmation" />
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>

                                <hr>

                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>

                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('forget_password') }}">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   @include('dashboard.layouts.script')

</body>

</html>
