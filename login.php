<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>


</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a>LOGIN</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Iniciar sesión</p>

                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" 
                            class="form-control" 
                            placeholder="usuario"
                            id="usuario">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" 
                            class="form-control" 
                            placeholder="Password"
                            id="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">

                        </div>
                        <!-- /.col -->
                        <div class="col-6">
                            <button type="button" class="btn btn-primary btn-block" id="btnLogin">Iniciar sesión</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->



    <script src="js/login.js"></script>

</body>

</html>