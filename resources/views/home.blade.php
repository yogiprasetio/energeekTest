<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ENERGEEK</title>
        @include('partials.css')
        {{-- @include('sweetalert::alert') --}}
    </head>
    <body>
        @include('partials.navbar')
        <div class="row h-100 align-items-end">
            <div class="col-4 ">
               <div class="container d-flex justify-content-start">
                <div class="fixed-bottom">
                    <img src="{{asset('images/delivery.png')}}" alt="">
                </div>
               </div>
            </div>
            <div class="col-4 justify-content-md-center overflow-hidden">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title text-center">Apply Lamaran</h4>
                            <form method="POST" class="my-login-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" placeholder="Cth: energeekmail@gmail.com" type="email" class="form-control" name="email" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                                        <label for="remember" class="custom-control-label">Remember Me</label>
                                    </div>
                                </div>
                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </div>
                                <div class="mt-4 text-center">
                                    Don't have an account? <a href="register.html">Create One</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 ">
                <div class="container d-flex justify-content-end">
                 <div class="fixed-bottom right">
                     <img src="{{asset('images/response.png')}}" alt="">
                 </div>
                </div>
             </div>
        </div>
        @include('partials.js')
    </body>
</html>