<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=<?=base_url("/assets/plugins/fontawesome-free/css/all.min.css")?>>
    <!-- iCheck -->
    <link rel="stylesheet" href=<?=base_url("/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css")?>>
    <!-- Theme style -->
    <link rel="stylesheet" href=<?=base_url("/assets/dist/css/adminlte.min.css")?>>

    <link rel="stylesheet" href="<?=base_url().'assets/plugins/toastr/toastr.min.css'?>">

</head>
<body class="hold-transition login-page"
      style="background: url('https://i.ibb.co/HCJttD1/photo-2021-02-09-18-47-14.jpg'); background-size: cover">
<div class="login-box shadow-lg">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <img src="<?=base_url('/assets/dist/img/logo.png')?>" style="width: 20%"><br>
            <a class="text-red font-weight-bold h5  ">CV. BERSATU INDAH GEMILANG</a>
        </div>
        <div class="card-body">

            <form action="<?=base_url('/auth/login/check')?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user-alt"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fas fa-sign-in-alt"></i> Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=<?=base_url("/assets/plugins/jquery/jquery.min.js")?>></script>
<!-- Bootstrap 4 -->
<script src=<?=base_url("/assets/plugins/bootstrap/js/bootstrap.bundle.min.js")?>></script>
<!-- AdminLTE App -->
<script src=<?=base_url("/assets/dist/js/adminlte.js")?>></script>
<script src="<?=base_url().'assets/plugins/toastr/toastr.min.js'?>"></script>

<?php
if (!$isLogin){
?>
<script>
    toastr.error('Username/password is wrong!')
</script>
<?php } ?>
</body>
</html>
