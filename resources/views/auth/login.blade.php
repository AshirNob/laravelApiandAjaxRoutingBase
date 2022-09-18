<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>
           Login
        </title>
        <meta name="description" content="Login">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" media="screen, print" href="{{URL::asset('css/vendors.bundle.css')}}">
        <link rel="stylesheet" media="screen, print" href="{{URL::asset('css/app.bundle.css')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="stylesheet" media="screen, print" href="{{URL::asset('css/fa-brands.css')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <script src="{{asset('js/app.js')}}" defer></script>
        <link rel="stylesheet" href="{{URL::asset('css/captcha.css')}}">
    </head>
    <body>
        <div class="page-wrapper">
            <div class="page-inner bg-brand-gradient">
                <div class="page-content-wrapper bg-transparent m-0">
                
                    <div class="flex-1" style="background: url({{URL::asset('img/svg/pattern-1.svg')}}) no-repeat center bottom fixed; background-size: cover;">
                        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0 ">
                            <div class="row">
                                <div class="col col-md-6 col-lg-7 hidden-sm-down">
                                    <h2 class="fs-xxl fw-500 mt-4 text-white">
                                     Project Name
                                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                                         Project Description
                                        </small>
                                    </h2>
                                    {{-- <a href="#" class="fs-lg fw-500 text-white opacity-70"> <ins> Contact Support</ins></a> --}}
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                                    <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                                        Secure login
                                    </h1>
                                    <div class="card p-4 rounded-plus bg-faded">
                                        <form id="frmLgn"  action="{{route('login')}}" method="post" >
                                            @csrf
                                            <div class="form-group">
                                                <label class="form-label" for="email">Username</label>
                                                <input   id="email" type="email" class="form-control form-control-lg @error ('email') is-invalid @enderror" name="email" placeholder="Your email" value="ashir@gmail.com" required>
                                                @error ('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="password">Password</label>
                                                <input  name="password"  type="password" id="password" class="form-control form-control-lg @error ('password') is-invalid @enderror" placeholder="password" value="123123123" required>
                                                @error ('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                          <div class="form-group ">
                                            <div id="captcha"></div>
                                            <input type="text" name="captcha" placeholder="Verify Robot"  onkeyup="validateCaptcha(this.value)" class="form-control form-control-lg" id="cpatchaTextBox"/>
                                            <span class="invalid-feedback" role="alert" id="captcha_err"></span>
                                          </div>
                                            <div class="row no-gutters">
                                                <div class="col-lg-12 pl-lg-1 my-2">
                                                    <button type="submit" class="btn btn-primary w-100" id="lgnSbmt" >{{ __('Login') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{URL::asset('js/vendors.bundle.js')}}"></script>
        <script src="{{URL::asset('js/app.bundle.js')}}"></script>
        <script src="{{URL::asset('js/captcha.js')}}"></script>
    </body>
</html>
