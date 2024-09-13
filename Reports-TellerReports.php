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
                    <div class="col-sm-6">
                        <h1 class="m-0"> Teller Reports </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/Account/ReportScope">Report Scope</a></li>
                            <li class="breadcrumb-item active">Teller Reports</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/TellerReports/DetailedValidation">
                                                <h1>
                                                    <i class="fa fa-paste"></i>
                                                </h1>
                                                <p style="font-size:small">Validations</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/TellerReports/DetailedValidationR2">
                                                <h1>
                                                    <i class="fa fa-calendar-alt"></i>
                                                </h1>
                                                <p style="font-size:small">Validation Period</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/TellerReports/DetailedValidationR3">
                                                <h1><i class="fa fa-list"></i></h1>
                                                <p style="font-size:small">Overall Validation Period</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/TellerReports/TellerOverideLoanTransaction">
                                                <h1><i class="fa fa-list-ul"></i></h1>
                                                <p style="font-size:small">For Override Loan Transaction</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/TellerReports/TellerOverideDepositTransaction">
                                                <h1><i class="fa fa-list-alt"></i></h1>
                                                <p style="font-size:small">For Override Deposits Transaction</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Summary</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/TellerReports/SummaryValidation">
                                                <h1><i class="fa fa-paste"></i></h1>
                                                <p style="font-size:small">Validations</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/TellerReports/SummaryValidationR2">
                                                <h1>
                                                    <i class="fa fa-calendar-alt"></i>
                                                </h1>
                                                <p style="font-size:small">Validation Period</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/TellerReports/SummaryValidationR3">
                                                <h1><i class="fa fa-list"></i></h1>
                                                <p style="font-size:small">Overall Validation Period</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/TellerReports/TellerOverAllTransaction">
                                                <h1>
                                                    <i class="fa fa-list-ul"></i>

                                                </h1>
                                                <p style="font-size:small">Overall Transaction Period</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
</body>

</html>