<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duplicate System</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed content-wrapper">
    <div class="wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-6">
                        <h1 class="m-0"> Manage Users </h1>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Manage Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-md-offset-1">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title col-form-label"> List of Users</h5>
                                <div class="card-tools">
                                    <a class="btn btn-primary btn-md" href="/Account/Register"><i
                                            class="fa fa-plus-circle"></i> Register User</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="userList" class="table table-hover" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align: middle">User Name</th>
                                            <th style="vertical-align: middle">Name</th>
                                            <th style="vertical-align: middle">Group</th>
                                            <th style="vertical-align: middle">Location</th>
                                            <th style="vertical-align: middle">Created</th>
                                            <th style="vertical-align: middle">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script>
        var msg = undefined;

        //console.log(msg)

        if (msg) {
            if (msg.provider == "sweetAlert") {
                swal.fire({
                    title: msg.title,
                    text: msg.message,
                    icon: msg.icon
                });
            } else {
                toastr[msg.type](msg.message, msg.title);
            }
        }
    </script>
    <script type="text/javascript">
        //$(document).ready(function () {
        //    $('#userList').dataTable({
        //        responsive: true,
        //        "pageLength": 10,
        //        lengthChange: false,
        //        "bFilter": true,
        //        "ordering": false,
        //        "oLanguage": {
        //            "sEmptyTable": "No entries to show..."
        //        }
        //    });
        //    $("#customerList_filter input").attr('placeholder', 'Search User');
        //});

        $('.editUser').on('click', function (e) {
            e.preventDefault();
            var userId = $(this).attr('UserID');
            document.location.href = '/Account/UpdateUser?id=' + userId;
        });

        $('.delUser').on('click', function (e) {
            e.preventDefault();
            var userId = $(this).attr('UserID');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this! ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = '/Account/RemoveUser?id=' + userId;
                    //Swal.fire(
                    //    'Deleted!',
                    //    'User has been deleted.',
                    //    'success'
                    //)
                }
            })
        })

    </script>
</body>

</html>