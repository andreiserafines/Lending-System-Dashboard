<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Duplicate System</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed content-wrapper">
    <div class="wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Customer List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item">
                                <a href="/Customers/Inquiry?searchFor=">Customer</a>
                            </li>
                            <li class="breadcrumb-item active">Customer List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Customer List</h5>
                                <div class="card-tools">
                                    <a id="download" data-toggle="tooltip" title="Download Customer List"
                                        class="btn btn-sm btn-primary" href="/Customers/ExportCustomerList"><i
                                            class="fas fa-file-download"></i></a>
                                    <a href="/Customers/Create" class="btn btn-sm btn-success"><i
                                            class="fa fa-user"></i> New Customer</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="form-inline" method="get" action="/Customers/Inquiry">
                                    <input autofocus type="search" style="width: 20%" class="form-control mb-2"
                                        placeholder="Search for Customer Name" name="searchFor" aria-label="Search" />
                                </form>

                                <table id="customerList" class="table table-hover table-bordered" width="100%">
                                    <thead style="display: table-header-group">
                                        <tr>
                                            <th width="5%" style="vertical-align: middle; text-align: center"></th>
                                            <th width="3%" style="vertical-align: middle; text-align: center">
                                                #
                                            </th>
                                            <th width="27%" style="vertical-align: middle; text-align: center">
                                                Customer Name
                                            </th>
                                            <th width="10%" style="vertical-align: middle; text-align: center">
                                                Birth Date
                                            </th>
                                            <th width="40%" style="vertical-align: middle; text-align: center">
                                                Address
                                            </th>
                                            <th width="152%" style="vertical-align: middle; text-align: center">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
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
        $.widget.bridge("uibutton", $.ui.button);
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
</body>

<script>
    var msg = undefined;

    //console.log(msg)

    if (msg) {
        if (msg.provider == "sweetAlert") {
            swal.fire({
                title: msg.title,
                text: msg.message,
                icon: msg.icon,
            });
        } else {
            toastr[msg.type](msg.message, msg.title);
        }
    }
</script>

<script>
    $(document).ready(function () {
        $("#customerList").dataTable({
            responsive: true,
            pageLength: 10,
            bFilter: false,
            ordering: false,
            oLanguage: {
                sEmptyTable: "No entries to show...",
            },
            lengthChange: false,
        });
        //$("#customerList_filter input").attr('placeholder', 'Search Customer');
    });
</script>

</html>