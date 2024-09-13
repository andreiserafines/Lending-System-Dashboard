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
                        <h1 class="m-0"> Loan Reports </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/Account/ReportScope">Report Scope</a></li>
                            <li class="breadcrumb-item active">Loans</li>
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
                                            <a href="/LoanReports/LoanGranted">
                                                <h1>
                                                    <i class="fas fa-hand-holding-usd"></i>
                                                </h1>
                                                <p style="font-size:small">Loan Release</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/LoanReports/LoanBalances">
                                                <h1><i class="fa fa-chart-bar"></i></h1>
                                                <p style="font-size:small">Balances</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/LoanReports/LoanTransactions">
                                                <h1><i class="fa fa-ruble-sign"></i></h1>
                                                <p style="font-size:small">Transactions</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <ul class="dropdown-menu dropdown-user border-0 shadow">
                                                <li><a class="dropdown-item" href="/LoanReports/LoanCollectionDue"> <i
                                                            class="fa fa-calendar-alt"></i> Collection Due</a></li>
                                                <li><a class="dropdown-item" href="/LoanReports/LoanCollectionDueF2"> <i
                                                            class="fa fa-calendar-alt"></i> Collection Due(2)</a></li>
                                            </ul>

                                            <a href="#" class="dropdown-toggle" aria-expanded="false"
                                                data-toggle="dropdown">
                                                <h1><i class="fa fa-calendar-alt"></i></h1>
                                                <p style="font-size:small">Collection Due</p>
                                            </a>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/LoanReports/LoanDelinquent">
                                                <h1><i class="fa fa-chart-pie"></i></h1>
                                                <p style="font-size:small">Delinquent</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/LoanReports/LoanPastDue">
                                                <h1><i class="fa fa-chart-line"></i></h1>
                                                <p style="font-size:small">Past-due Loans</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <ul class="dropdown-menu dropdown-user border-0 shadow">
                                                <li><a class="dropdown-item" href="/LoanReports/LoanPAR"> <i
                                                            class="fa fa-print"></i> PAR Office/Officer</a></li>
                                                <li><a class="dropdown-item" href="/LoanReports/LoanPAROfficerOffice">
                                                        <i class="fa fa-print"></i> PAR Officer/Office</a></li>
                                            </ul>

                                            <a href="#" class="dropdown-toggle" aria-expanded="false"
                                                data-toggle="dropdown">
                                                <h1><i class="fa fa-chart-pie"></i></h1>
                                                <p style="font-size:small">Porfolio at Risk</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/LoanReports/LoanBalancesWrittenOff">
                                                <h1><i class="fa fa-chart-pie"></i></h1>
                                                <p style="font-size:small">Write-off Loans</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/LoanReports/LoanInsurance">
                                                <h1>
                                                    <i class="far fa-handshake"></i>
                                                </h1>
                                                <p style="font-size:small">Loan Insurance</p>
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
                                            <a href="/LoanReports/LoanSumGranted">
                                                <h1><i class="fa fa-money-bill-alt"></i></h1>
                                                <p style="font-size:small">Loan Release</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <ul class="dropdown-menu dropdown-user border-0 shadow">
                                                <li><a class="dropdown-item" href="/LoanReports/LoanSumBalances"><i
                                                            class="fas fa-print"></i> Balance Per Product</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumBalancesOfficer"><i
                                                            class="fa fa-print"></i> Balance Per Officer</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumBalancesOffice"><i
                                                            class="fa fa-print"></i> Balance Per Office</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumBalancesOfficeOfficer"><i
                                                            class="fa fa-print"></i> Balance Per Office/Officer</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumBalancesOfficerOffice"><i
                                                            class="fa fa-print"></i> Balance Per Officer/Office</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumBalancesWrittenOff"><i
                                                            class="fa fa-print"></i> Written Off Accounts - Balance Per
                                                        Product</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumBalancesOfficerWrittenOff"><i
                                                            class="fa fa-print"></i> Written Off Accounts - Balance Per
                                                        Officer</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumBalancesOfficeWrittenOff"><i
                                                            class="fa fa-print"></i> Written Off Accounts - Balance Per
                                                        Office</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumBalancesOfficeOfficerWrittenOff"><i
                                                            class="fa fa-print"></i> Written Off Accounts - Balance Per
                                                        Office/Officer</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumBalancesOfficerOfficeWrittenOff"><i
                                                            class="fa fa-print"></i> Written Off Accounts - Balance Per
                                                        Officer/Office</a></li>
                                            </ul>

                                            <a href="#" class="dropdown-toggle" aria-expanded="false"
                                                data-toggle="dropdown">
                                                <h1><i class="fa fa-chart-bar"></i></h1>
                                                <p style="font-size:small">Balances</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <ul class="dropdown-menu dropdown-user border-0 shadow">
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumProductPastdue"><i
                                                            class="fa fa-print"></i> Pastdue Aging Per Product</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumOfficerPastdue"><i
                                                            class="fa fa-print"></i> Pastdue Aging Per Officer</a></li>
                                                <li><a class="dropdown-item" href="/LoanReports/LoanSumOfficePastdue"><i
                                                            class="fa fa-print"></i> Pastdue Aging Per Office</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumLocationPastdue"><i
                                                            class="fa fa-print"></i> Pastdue Aging Per Location</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumOfficeOfficerPastdue"><i
                                                            class="fa fa-print"></i> Pastdue Aging Office/Officer</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumOfficerOfficePastdue"><i
                                                            class="fa fa-print"></i> Pastdue Aging Officer/Office</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumOverAllPastdue"><i
                                                            class="fa fa-print"></i> Pastdue Aging Over All</a></li>
                                            </ul>
                                            <a href="#" class="dropdown-toggle" aria-expanded="false"
                                                data-toggle="dropdown">
                                                <h1><i class="fa fa-chart-line"></i></h1>
                                                <p style="font-size:small">Past-due Loans</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <a href="/LoanReports/LoanSumTransactions">
                                                <h1><i class="fa fa-ruble-sign"></i></h1>
                                                <p style="font-size:small">Transactions</p>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <ul class="dropdown-menu dropdown-user border-0 shadow">
                                                <li><a class="dropdown-item" href="/LoanReports/LoanSumProductPAR"><i
                                                            class="fa fa-print"></i> PAR Per Product</a></li>
                                                <li><a class="dropdown-item" href="/LoanReports/LoanSumOfficerPAR"><i
                                                            class="fa fa-print"></i> PAR Per Officer</a></li>
                                                <li><a class="dropdown-item" href="/LoanReports/LoanSumOfficePAR"><i
                                                            class="fa fa-print"></i> PAR Per Office</a></li>
                                                <li><a class="dropdown-item" href="/LoanReports/LoanSumLocationPAR"><i
                                                            class="fa fa-print"></i> PAR Per Location</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumOfficeOfficerPAR"><i
                                                            class="fa fa-print"></i> PAR Office/Officer</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumOfficerOfficePAR"><i
                                                            class="fa fa-print"></i> PAR Officer/Office</a></li>
                                                <li><a class="dropdown-item" href="/LoanReports/LoanSumOverAllPAR"><i
                                                            class="fa fa-print"></i> PAR Over All</a></li>
                                            </ul>

                                            <a href="#" class="dropdown-toggle" aria-expanded="false"
                                                data-toggle="dropdown">
                                                <h1><i class="fa fa-chart-pie"></i></h1>
                                                <p style="font-size:small">Porfolio at Risk</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <ul class="dropdown-menu dropdown-user border-0 shadow">
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumProductWrittenOffPAR"><i
                                                            class="fa fa-print"></i> Written Off - PAR Per Product</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumOfficerWrittenOffPAR"><i
                                                            class="fa fa-print"></i> Written Off - PAR Per Officer</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumOfficeWrittenOffPAR"><i
                                                            class="fa fa-print"></i> Written Off - PAR Per Office</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumLocationWrittenOffPAR"><i
                                                            class="fa fa-print"></i> Written Off - PAR Per Location</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumOfficeOfficerWrittenOffPAR"><i
                                                            class="fa fa-print"></i> Written Off - PAR
                                                        Office/Officer</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumOfficerOfficeWrittenOffPAR"><i
                                                            class="fa fa-print"></i> Written Off - PAR
                                                        Officer/Office</a></li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanSumOverAllWrittenOffPAR"><i
                                                            class="fa fa-print"></i> Written Off - PAR Over All</a></li>
                                            </ul>

                                            <a href="#" class="dropdown-toggle" aria-expanded="false"
                                                data-toggle="dropdown">
                                                <h1><i class="fa fa-chart-pie"></i></h1>
                                                <p style="font-size:small">PAR(Write-Off)</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="menu-block">
                                            <ul class="dropdown-menu dropdown-user border-0 shadow">
                                                <li><a class="dropdown-item" href="/LoanReports/LoanMISRiskVSRelease"><i
                                                            class="fa fa-print"></i> Risk Vs. Release Per Officer</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanMISOfficerMonthlyBalances"><i
                                                            class="fa fa-print"></i> Annual Performance Per
                                                        Officer/Category</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanMISCategoryMonthlyBalances"><i
                                                            class="fa fa-print"></i> Annual Performance Per
                                                        Category/Officer</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanMISSumCategoryMonthlyBalances"><i
                                                            class="fa fa-print"></i> Summary Annual Performance Per
                                                        Category</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="/LoanReports/LoanMISSumCategoryChartMonthlyBalances"><i
                                                            class="fa fa-print"></i> Annual Performance Report</a></li>
                                            </ul>

                                            <a href="#" class="dropdown-toggle" aria-expanded="false"
                                                data-toggle="dropdown">
                                                <h1><i class="fa fa-chart-pie"></i></h1>
                                                <p style="font-size:small">MIS Report</p>
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