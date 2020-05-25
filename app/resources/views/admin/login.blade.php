<html>

    <head>
        <title>Login Admin</title>
        <link rel="stylesheet" href="<?=asset('vendor/bootstrap/css/bootstrap.min.css');?>">
        <script src="<?=asset('vendor/jquery/jquery-3.5.1.min.js');?>"></script>
    </head>

    <body>
        <div class="container">
            <div class="card mt-3">
                <div class="card-body">

                        <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="username-form" aria-describedby="emailHelp" placeholder="Username">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password-form" placeholder="Password">
                        </div>
                        <button class="btn btn-primary" id="login-button">Login</button>

                </div>
            </div>
        </div>

        <script src="<?=asset('asset/js/admin/env.js');?>"></script>
        <script src="<?=asset('asset/js/admin/login.js');?>"></script>
    </body>
</html>
