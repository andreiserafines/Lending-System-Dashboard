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
                        <h1 class="m-0"> Loan Maintenance </h1>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Loan Maintenance</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title col-form-label"> List of Loan Products</h5>
                                <div class="card-tools">
                                    <a onclick="showInPopupProduct('https://208.73.204.233:8772/Management/AddEditLoanProduct','New Loan Product')"
                                        class="btn btn-info text-white"><i class="fa fa-plus-circle"></i> New Loan
                                        Product</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="loanList" class="table table-hover table-striped table-small" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align: middle">Loan Product</th>
                                            <th style="vertical-align: middle">Interest Rate (%)</th>
                                            <th style="vertical-align: middle">Vat</th>
                                            <th style="vertical-align: middle">Days In Year</th>
                                            <th style="vertical-align: middle; text-align: center;">Status</th>
                                            <th style="vertical-align: middle; text-align: center;">Action</th>
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

        <div class="modal fade" id="form-modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Loan Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <div class="pull-right">
                            <button id="SubmitButton" type="button" class="btn btn-primary btnSubmit"><i
                                    class="fa fa-save"></i> Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    <script src="/lib/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js"></script>
    <script src="/js/additional-methods.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#loanList').dataTable({
                responsive: true,
                "pageLength": 8,
                lengthChange: false,
                "bFilter": true,
                "ordering": false,
                "oLanguage": {
                    "sEmptyTable": "No entries to show..."
                }
            });
            $("#loanList_filter input").attr('placeholder', 'Search Loan Product');
        });

        $('.btnSubmit').on('click', function (e) {
            $('#formProduct').submit();
        });

        $('.btnCancel').on('click', function (e) {
            e.preventDefault();
            $('#form-modal').modal('hide');
        });

        showInPopupProduct = (url, title) => {
            $.ajax({
                type: 'GET',
                url: url,
                success: function (res) {
                    $('#form-modal .modal-body').html(res);
                    $('#form-modal .modal-title').html(title);
                    $('#form-modal').modal('show');

                    $('#ComputeType').select2();
                    if ($('#IsEnabled').val() == 1) {
                        $('#customControlProductStatus').prop("checked", true);
                    }
                    if ($('#ComputeNotarialFee').val() == 1) {
                        $('#customControlComputeNotarialFee').prop("checked", true);
                        $('.dNotarialFee').show();
                    }
                    if ($('#ComputeServiceFee').val() == 1) {
                        $('#customControlComputeServiceFee').prop("checked", true);
                        $('.dServiceFee').show();
                    }
                    if ($('#ComputeInsurance').val() == 1) {
                        $('#customControlComputeInsurance').prop("checked", true);
                        $('.dInsurance').show();
                    }
                    if ($('#ComputeCbu').val() == 1) {
                        $('#customControlComputeCBU').prop("checked", true);
                        $('.dCBU').show();
                    }
                    if ($('#ComputeDst').val() == 1) {
                        $('#customControlComputeDST').prop("checked", true);
                        $('.dDST').show();
                    }
                    if ($('#ComputeFillingFee').val() == 1) {
                        $('#customControlComputeFillingFee').prop("checked", true);
                        $('.dFillingFee').show();
                    }

                }
            })
        }

        $('#form-modal').on('shown.bs.modal', function () {
            $('#ProductName').focus();

            $(".notarial-fee").click(function () {
                if ($(this).is(":checked")) {
                    $('.dNotarialFee').show();
                    $('#NotarialFee').focus();
                } else {
                    $(".dNotarialFee").hide();
                }
                $('#ComputeNotarialFee').val($(this).is(':checked') ? 1 : 0);
            });

            $(".dst").click(function () {
                if ($(this).is(":checked")) {
                    $('.dDST').show();
                } else {
                    $(".dDST").hide();
                }
                $('#ComputeDst').val($(this).is(':checked') ? 1 : 0);
            });

            $(".cbu").click(function () {
                if ($(this).is(":checked")) {
                    $('.dCBU').show();
                } else {
                    $(".dCBU").hide();
                }
                $('#ComputeCbu').val($(this).is(':checked') ? 1 : 0);
            });

            $(".filling-fee").click(function () {
                if ($(this).is(":checked")) {
                    $('.dFillingFee').show();
                } else {
                    $(".dFillingFee").hide();
                }
                $('#ComputeFillingFee').val($(this).is(':checked') ? 1 : 0);
            });

            $(".service-fee").click(function () {
                if ($(this).is(":checked")) {
                    $('.dServiceFee').show();
                } else {
                    $(".dServiceFee").hide();
                }
                $('#ComputeServiceFee').val($(this).is(':checked') ? 1 : 0);
            });

            $(".insurance").click(function () {
                if ($(this).is(":checked")) {
                    $('.dInsurance').show();
                } else {
                    $(".dInsurance").hide();
                }
                $('#ComputeInsurance').val($(this).is(':checked') ? 1 : 0);
            });

            $(".product-status").click(function () {
                $('#IsEnabled').val($(this).is(':checked') ? 1 : 0);
            });

        })

        $('.delProduct').on('click', function (e) {
            e.preventDefault();
            var ProductId = $(this).attr('LoanId');
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
                    document.location.href = '/Management/DeleteProduct?id=' + ProductId;

                }
            })
        })
    </script>
</body>

</html>