<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title_tab?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=<?=base_url("/assets/plugins/fontawesome-free/css/all.min.css")?>>
    <!-- Ionicons -->
    <link rel="stylesheet" href=<?=base_url("/assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")?>>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href=<?=base_url("/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")?>>
    <!-- iCheck -->
    <link rel="stylesheet" href=<?=base_url("/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css")?>>
    <!-- JQVMap -->
    <link rel="stylesheet" href=<?=base_url("/assets/plugins/jqvmap/jqvmap.min.css")?>>
    <!-- Theme style -->
    <link rel="stylesheet" href=<?=base_url("/assets/dist/css/adminlte.min.css")?>>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href=<?=base_url("/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")?>>
    <!-- Daterange picker -->
    <link rel="stylesheet" href=<?=base_url("/assets/plugins/daterangepicker/daterangepicker.css")?>>
    <!-- summernote -->
    <link rel="stylesheet" href=<?=base_url("/assets/plugins/summernote/summernote-bs4.min.css")?>>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?=base_url().'assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?=base_url().'assets/plugins/toastr/toastr.min.css'?>">

    <link rel="stylesheet" href="<?=base_url().'assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'?>">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?=base_url().'assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?=base_url().'asssets/plugins/select2/css/select2.min.css'?>">
    <link rel="stylesheet" href="<?=base_url().'assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'?>">
    <?php
    for ($i = 0; $i < count($css); $i++)
    {
        echo '<link rel="stylesheet" href="'.$css[$i].'">';
    }
    ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <?php $this->load->view($navbar)?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php $this->load->view($sidebar)?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?=$title_budge?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <?php $this->load->view($content) ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view($footer) ?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=<?=base_url("/assets/plugins/jquery/jquery.min.js")?>></script>
<!-- jQuery UI 1.11.4 -->
<script src=<?=base_url("/assets/plugins/jquery-ui/jquery-ui.min.js")?>></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=<?=base_url("/assets/plugins/bootstrap/js/bootstrap.bundle.min.js")?>></script>
<!-- ChartJS -->
<script src=<?=base_url("/assets/plugins/chart.js/Chart.min.js")?>></script>
<!-- Sparkline -->
<script src=<?=base_url("/assets/plugins/sparklines/sparkline.js")?>></script>
<!-- JQVMap -->
<script src=<?=base_url("/assets/plugins/jqvmap/jquery.vmap.min.js")?>></script>
<script src=<?=base_url("/assets/plugins/jqvmap/maps/jquery.vmap.usa.js")?>></script>
<!-- jQuery Knob Chart -->
<script src=<?=base_url("/assets/plugins/jquery-knob/jquery.knob.min.js")?>></script>
<!-- daterangepicker -->
<script src=<?=base_url("/assets/plugins/moment/moment.min.js")?>></script>
<script src=<?=base_url("/assets/plugins/daterangepicker/daterangepicker.js")?>></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=<?=base_url("/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")?>></script>
<!-- Summernote -->
<script src=<?=base_url("/assets/plugins/summernote/summernote-bs4.min.js")?>></script>
<!-- overlayScrollbars -->
<script src=<?=base_url("/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")?>></script>
<!-- AdminLTE App -->
<script src=<?=base_url("/assets/dist/js/adminlte.js")?>></script>
<!-- AdminLTE for demo purposes -->
<script src=<?=base_url("/assets/dist/js/demo.js")?>></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=<?=base_url("/assets/dist/js/pages/dashboard.js")?>></script>

<!-- SweetAlert2 -->
<script src="<?=base_url().'assets/plugins/sweetalert2/sweetalert2.min.js'?>"></script>
<!-- Toastr -->
<script src="<?=base_url().'assets/plugins/toastr/toastr.min.js'?>"></script>

<script src="<?=base_url().'assets/plugins/select2/js/select2.full.min.js'?>"></script>
<script src="<?=base_url().'assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'?>"></script>
<?php
for ($i = 0; $i < count($javascript); $i++)
{
    echo '<script src="'.$javascript[$i].'"></script>';
}
?>
<script>
    $('.button-delete').click(function () {
        let id = $('.button-delete').attr('data-id')
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    })
</script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()

    })
</script>
</body>
</html>
