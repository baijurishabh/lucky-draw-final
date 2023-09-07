<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lucky Draw Referral</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <!-- <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.min.css"
    /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/register/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/register/fonts/iconic/css/material-design-iconic-font.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/register/vendor/css-hamburgers/hamburgers.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/register/vendor/animsition/css/animsition.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/register/vendor/select2/select2.min.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/register/vendor/daterangepicker/daterangepicker.css') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/register/css/util.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/register/css/main.css') }}" />
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100"
            style="
          background-image: url('{{ asset('assets/register/images/1288326.jpeg') }}');
        ">
            <div class="wrap-login100">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-12">
                        <span class="login100-form-title">
                            <img src="{{ asset('assets/register/images/ITZOURWORLDLOGOWHT.png') }}" class="logo_login">
                        </span>
                        <div class="flex-c-m d-none d-md-block d-md-flex">
                            <a href="#" class="login100-social-item bg1">
                                <!-- <i class="fa-brands fa-youtube" style="color: #cfd1d3;"></i> -->
                                <img class="" src="{{ asset('assets/register/images/icons/youtube.svg') }}"
                                    width="100%" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-12 p-l-55 p-r-55 p-t-65 p-b-54">
                        <form method="post">
                            @csrf
                            <div class="login100-form validate-form" style="text-align: -webkit-center;">
                                <div class="form-cont">
                                    <div class="wrap-input100 validate-input" data-validate="Username is reauired">
                                        <!-- <span class="label-input100">Name</span> -->
                                        <input class="input100" type="text" name="username1" placeholder="Username"
                                            required />
                                        @if ($errors->has('username1'))
                                            <p class="" style="color: red; font-size: .8rem;">
                                                {{ $errors->first('username1') }}
                                            </p>
                                        @endif
                                        <!-- <span class="focus-input100"></span> -->
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                                        <input class="input100" type="number" name="mob1" placeholder="Mobile No:"
                                            required />
                                        @if ($errors->has('mob1'))
                                            <p class="" style="color: red; font-size: .8rem;">
                                                {{ $errors->first('mob1') }}
                                            </p>
                                        @endif
                                        <!-- <span class="focus-input100"></span> -->
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                                        <input class="input100" type="email" name="email1" placeholder="Email ID:"
                                            required />
                                        @if ($errors->has('email1'))
                                            <p class="" style="color: red; font-size: .8rem;">
                                                {{ $errors->first('email1') }}
                                            </p>
                                        @endif
                                        <!-- <span class="focus-input100"></span> -->
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                                        <input class="input100" type="text" name="state" placeholder="State" />
                                        <!-- <span class="focus-input100"></span> -->
                                    </div>

                                    <!-- <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
         <div class="login100-form-bgbtn"></div>
         <button class="login100-form-btn">
          Submit
         </button>
        </div>
       </div> -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-12 pt-md-0 pt-5 pt-sm-5">
                                    <div class="login100-form validate-form" style="width: 100%">
                                        <div class="wrap-input100 validate-input"
                                            data-validate="Password is required">
                                            <input class="input100" type="text" name="username2"
                                                placeholder="1st Friend Name:" />
                                            @if ($errors->has('username2'))
                                                <p class="" style="color: red; font-size: .8rem;">
                                                    {{ $errors->first('username2') }}
                                                </p>
                                            @endif
                                            <!-- <span class="focus-input100"></span> -->
                                        </div>
                                        <div class="wrap-input100 validate-input"
                                            data-validate="Password is required">
                                            <input class="input100" type="number" name="mob2"
                                                placeholder="Mobile No:" />
                                            @if ($errors->has('mob2'))
                                                <p class="" style="color: red; font-size: .8rem;">
                                                    {{ $errors->first('mob2') }}
                                                </p>
                                            @endif
                                            <!-- <span class="focus-input100"></span> -->
                                        </div>
                                        <div class="wrap-input100 validate-input"
                                            data-validate="Password is required">
                                            <input class="input100" type="email" name="email2"
                                                placeholder="Email ID:" required />
                                            @if ($errors->has('email2'))
                                                <p class="" style="color: red; font-size: .8rem;">
                                                    {{ $errors->first('email2') }}
                                                </p>
                                            @endif
                                            <!-- <span class="focus-input100"></span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12 pt-md-0 pt-5 pt-sm-5">
                                    <div class="login100-form validate-form" style="width: 100%">
                                        <div class="wrap-input100 validate-input"
                                            data-validate="Password is required">
                                            <input class="input100" type="text" name="username3"
                                                placeholder="2nd Friend Name:" />
                                            @if ($errors->has('username3'))
                                                <p class="" style="color: red; font-size: .8rem;">
                                                    {{ $errors->first('username3') }}
                                                </p>
                                            @endif
                                            <!-- <span class="focus-input100"></span> -->
                                        </div>
                                        <div class="wrap-input100 validate-input"
                                            data-validate="Password is required">
                                            <input class="input100" type="number" name="mob3"
                                                placeholder="Mobile No:" />
                                            @if ($errors->has('mob3'))
                                                <p class="" style="color: red; font-size: .8rem;">
                                                    {{ $errors->first('mob3') }}
                                                </p>
                                            @endif
                                            <!-- <span class="focus-input100"></span> -->
                                        </div>
                                        <div class="wrap-input100 validate-input"
                                            data-validate="Password is required">
                                            <input class="input100" type="email" name="email3"
                                                placeholder="Email ID:" required />
                                            @if ($errors->has('email3'))
                                                <p class="" style="color: red; font-size: .8rem;">
                                                    {{ $errors->first('email3') }}
                                                </p>
                                            @endif
                                            <!-- <span class="focus-input100"></span> -->
                                        </div>
                                        <!-- <div class="text-right p-t-8 p-b-31">
          <a href="#">
           Forgot password?
          </a>
         </div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 pt-5">
                                    <div class="container-login100-form-btn">
                                        <div class="wrap-login100-form-btn">
                                            <div class="login100-form-bgbtn"></div>
                                            <button type="submit" class="login100-form-btn">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ asset('assets/register/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/register/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/register/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/register/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/register/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/register/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/register/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/register/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/register/js/main.js') }}"></script>
</body>

</html>
