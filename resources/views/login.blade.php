<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/login/bootstrap.css">
    <link rel="shortcut icon" href="/assets/images/ayslogo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/login/app.css">

</head>

<body>
<div id="auth">
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="assets/images/ayslogo.jpg" height="80" class='mb-4'>
                    </div>
                    <form action="/dashboard">
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" id="username">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                                <!-- <a href="#" class='float-end'>
                                    <small style="color:#fb9c1d; font-weight: 00;">Forgot password?</small>
                                </a> -->
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-2'>
                            
                            <!-- <div class="float-end">
                                <a href="register.html" style="color:#fb9c1d; font-weight: 700;">Don't have an account?</a>
                            </div> -->
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-default float-end" style="font-weight: 600;">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <script src="/assets/js/feather-icons/feather.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/loginmain.js"></script>

    <style>
        .btn-default
 
        {
        
        background-color: #f48c14;
        
        color:#FFF;
        
        border-color: #f48c14;
        
        }
    </style>
</body>

</html>