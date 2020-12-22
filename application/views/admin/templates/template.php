<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">



                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-light">Cipta Sari Pusakajaya</span>
            </a>

            <!-- Sidebar -->
            <?php

            include('sidebar.php');
            ?>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $title ?></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="container">
                <?php
                if ($_SESSION['id'] == '') {
                    redirect('admin/login', 'refresh');
                }
                $this->load->view($konten);
                ?>
            </div>

        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; <?php echo date('Y') ?> Cipta Sari Pusakajaya</a>.</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>assets/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>assets/admin/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ?>assets/admin/dist/js/pages/dashboard.js"></script>



    <!-- DataTables  & Plugins -->
    <script src="<?= base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $('#summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        })
    </script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>