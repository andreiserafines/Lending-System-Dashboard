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
                        <h1 class="m-0">My Invoices</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">Invoices</li>
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
                            <div class="card-body">
                                <div id="invoiceList_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6"></div>
                                        <div class="col-sm-12 col-md-6"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="invoiceList"
                                                class="table table-bordered table-hover dataTable no-footer"
                                                style="border-color: #ddd;" role="grid"
                                                aria-describedby="invoiceList_info">
                                                <thead style="background: #f7f7f8;">
                                                    <tr role="row">
                                                        <th style="vertical-align: middle; text-align: center; width: 136.75px;"
                                                            class="sorting_disabled" rowspan="1" colspan="1">Billing
                                                            Period</th>
                                                        <th style="vertical-align: middle; text-align: center; width: 93px;"
                                                            class="sorting_disabled" rowspan="1" colspan="1">Invoice #
                                                        </th>
                                                        <th style="vertical-align: middle; text-align: center; width: 125.938px;"
                                                            class="sorting_disabled" rowspan="1" colspan="1">Amount Due
                                                        </th>
                                                        <th style="vertical-align: middle; text-align: center; width: 156.391px;"
                                                            class="sorting_disabled" rowspan="1" colspan="1">Statement
                                                            Date</th>
                                                        <th style="vertical-align: middle; text-align: center; width: 93.9531px;"
                                                            class="sorting_disabled" rowspan="1" colspan="1">Due Date
                                                        </th>
                                                        <th style="vertical-align: middle; text-align: center; width: 130.609px;"
                                                            class="sorting_disabled" rowspan="1" colspan="1">Amount Paid
                                                        </th>
                                                        <th style="vertical-align: middle; text-align: center; width: 69.0625px;"
                                                            class="sorting_disabled" rowspan="1" colspan="1">Status</th>
                                                        <th style="vertical-align: middle; text-align: center; width: 174.109px;"
                                                            class="sorting_disabled" rowspan="1" colspan="1">Proof of
                                                            Payment
                                                        </th>
                                                        <th style="vertical-align: middle; text-align: center; width: 69.5938px;"
                                                            class="sorting_disabled" rowspan="1" colspan="1">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <td valign="top" colspan="9" class="dataTables_empty">No entries
                                                            to show
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="invoiceList_info" role="status"
                                                aria-live="polite">
                                                Showing 0 to 0 of 0 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="invoiceList_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="invoiceList_previous"><a href="#"
                                                            aria-controls="invoiceList" data-dt-idx="0" tabindex="0"
                                                            class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item next disabled"
                                                        id="invoiceList_next"><a href="#" aria-controls="invoiceList"
                                                            data-dt-idx="1" tabindex="0" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
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

    <script>
        $(document).ready(function () {
            $('#invoiceList').dataTable({
                responsive: true,
                "pageLength": 12,
                lengthChange: false,
                info: true,
                "bFilter": false,
                "ordering": false,
                "oLanguage": {
                    "sEmptyTable": "No entries to show"
                }
            });
            //$("#customerList_filter input").attr('placeholder', 'Search Customer');
        });

        $('.btnPaymentSubmit').on('click', function (e) {
            $('form').submit();
        });

        $('.marked-invoice').on('click', function (e) {
            e.preventDefault();
            var invoiceID = $(this).attr('InvoiceId');
            var invoiceStatus = $(this).attr('InvoiceStatus');
            var msg = $(this).text();

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this! ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, ' + msg
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = '/Companies/UpdateInvoiceStatus?id=' + invoiceID + '&invoicestatus=' + invoiceStatus;

                }
            })
        })
    </script>
</body>

</html>