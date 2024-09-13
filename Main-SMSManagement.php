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
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css?v=<?php echo time(); ?>">
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
                        <h1 class="m-0">SMS Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">SMS Management</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div onclick="location.href='/SMSManagement/SMSBuyCredit';" class="info-box"
                            style="cursor: pointer; pointer-events: ;">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-database"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">SMS Credits</span>
                                <span class="info-box-number">
                                    0
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix hidden-md-up"></div>

                </div>

                <div class="row">
                    <div class="col-lg-6" style="display: none;">
                        <form id="updateForm" method="post">

                            <input type="hidden" data-val="true" data-val-required="The EnabledSMS field is required."
                                id="EnabledSMS" name="EnabledSMS" value="0" />
                            <input type="hidden" data-val="true"
                                data-val-required="The NotifyCustomerLoanRelease field is required."
                                id="NotifyCustomerLoanRelease" name="NotifyCustomerLoanRelease" value="1" />
                            <input type="hidden" data-val="true"
                                data-val-required="The NotifyCustomerPaymentPosted field is required."
                                id="NotifyCustomerPaymentPosted" name="NotifyCustomerPaymentPosted" value="1" />
                            <input type="hidden" data-val="true"
                                data-val-required="The NotifyCustomerPastdue field is required."
                                id="NotifyCustomerPastdue" name="NotifyCustomerPastdue" value="1" />

                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="">SMS Setting</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input enabled-sms"
                                                    id="customEnabledSMS">
                                                <label class="custom-control-label" for="customEnabledSMS">Enable
                                                    SMS</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dSendSMS" style="display: none;">
                                        <div class="form-group row">
                                            <div class="col-md-8 offset-md-3">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input notify-loan"
                                                        id="notifyCustomerViewSMS">
                                                    <label class="custom-control-label"
                                                        for="notifyCustomerViewSMS">Notify Customer if Loan
                                                        Approved/Release/Disapproved </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-8 offset-md-3">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input notify-payment"
                                                        id="notifyCustomerPayment">
                                                    <label class="custom-control-label"
                                                        for="notifyCustomerPayment">Notify Customer if Loan Payment
                                                        Posted </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-8 offset-md-3">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input notify-unpaid"
                                                        id="customControlUnpaidAmortization">
                                                    <label class="custom-control-label"
                                                        for="customControlUnpaidAmortization">Notify Customer for Unpaid
                                                        Amortization</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row monthDay" style="display: none;">
                                            <label class="col-form-label col-md-3" for="DayOfNotification">Every Nth of
                                                the month</label>
                                            <div class="col-md-8">
                                                <input autocomplete="off" class="form-control" data-val="true"
                                                    data-val-required="The DayOfNotification field is required."
                                                    id="DayOfNotification" name="DayOfNotification" placeholder="eg. 5 "
                                                    required="required" type="text" value="5" />
                                                <span class="text-danger field-validation-valid"
                                                    data-valmsg-for="DayOfNotification"
                                                    data-valmsg-replace="true"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="float-right">
                                        <button type="button" id="btnPost" class="btn btn-success">Update
                                            Setting</button>
                                        <a class="btn btn-danger" href="/Home/Index">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <input name="__RequestVerificationToken" type="hidden"
                                value="CfDJ8HN0e4bg50RChBLW3U5KlY9-VQdo_jcm5W-5jmKIGxoVk9CBv_vMTob2KEeRoDwxI0CH39k_fPRBtlMLxYltieLHDAa5e02ABrtHr-vI_ELEjBOTsO7-nUK0cqqSoEgY-2Cg0tmLPEInGgslL2uL2UXhfGDbgw6Q5SSe0MPPt5skocYS77CIycHMeGk1953zLA" />
                        </form>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="">SMS Credit Purchase History</h3>
                                    <div class="card-tools">
                                        <a href="/SMSManagement/SMSBuyCredit" class="btn btn-primary"
                                            data-toggle="tooltip" title="Buy SMS Credit"><i
                                                class="fa fa-list-alt"></i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <table id="tblPurchase" class="table table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align: middle;">DETAIL</th>
                                            <th style="vertical-align: middle;">AMOUNT</th>
                                            <th style="vertical-align: middle;">VAT</th>
                                            <th style="vertical-align: middle;">TOTAL</th>
                                            <th style="vertical-align: middle;">CREDITS</th>
                                            <th style="vertical-align: middle;">DATE</th>
                                            <th style="vertical-align: middle;">STATUS</th>

                                        </tr>
                                    </thead>
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
        $(document).ready(function () {
            $('#tblPurchase').dataTable({
                responsive: true,
                "pageLength": 8,
                lengthChange: false,
                "bFilter": false,
                "ordering": false,
                "bInfo": true,
                "paging": true,
                "oLanguage": {
                    "sEmptyTable": "No entries to show..."
                }
            });
            $("#tblPurchase_filter input").attr('placeholder', 'Search Purchase');
        });

        if ($('#EnabledSMS').val() == 1) {
            $('#customEnabledSMS').prop("checked", true);
            if ($('#customEnabledSMS').is(":checked")) {
                $('.dSendSMS').show();
            }
        }

        if ($('#NotifyCustomerLoanRelease').val() == 1) {
            $('#notifyCustomerViewSMS').prop("checked", true);
        }

        if ($('#NotifyCustomerPaymentPosted').val() == 1) {
            $('#notifyCustomerPayment').prop("checked", true);
        }

        if ($('#NotifyCustomerPastdue').val() == 1) {
            $('#customControlUnpaidAmortization').prop("checked", true);
            if ($('#customControlUnpaidAmortization').is(":checked")) {
                $('.monthDay').show();
            }
        }

        $(".enabled-sms").click(function () {
            if ($(this).is(":checked")) {
                $('.dSendSMS').show();
                //$('#btnPost').removeClass('disabled');
                //$('#ApiCode').focus();
                //$('#ApiCode').select();
            } else {
                $(".dSendSMS").hide();
                //$('#btnPost').addClass('disabled');
            }
            $('#EnabledSMS').val($(this).is(':checked') ? 1 : 0);
        });

        $(".notify-loan").click(function () {
            $('#NotifyCustomerLoanRelease').val($(this).is(':checked') ? 1 : 0);
        });

        $(".notify-payment").click(function () {
            $('#NotifyCustomerPaymentPosted').val($(this).is(':checked') ? 1 : 0);
        });

        $(".notify-unpaid").click(function () {
            if ($(this).is(":checked")) {
                $('.monthDay').show();
            } else {
                $('.monthDay').hide();
            }
            $('#NotifyCustomerPastdue').val($(this).is(':checked') ? 1 : 0);
        });


        $('#btnPost').on('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are all entries correct',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Update!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#updateForm').attr('action', '/SMSManagement/UpdateSMSSetting');
                    $('#updateForm').submit();
                }
            })
        });

        $('.btnApproved').on('click', function (e) {
            e.preventDefault();
            var purchaseID = $(this).attr('purchaseID');
            var creditValue = $(this).attr('creditValue');
            //var msg = $(this).text();

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this! ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = '/SMSManagement/ApprovedCreditPurchase?id=' + purchaseID + '&creditvalue=' + creditValue;

                }
            })
        });

        $('.btnCancelled').on('click', function (e) {
            e.preventDefault();
            var purchaseID = $(this).attr('purchaseID');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this! ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = '/SMSManagement/CancelledCreditPurchase?id=' + purchaseID;

                }
            })
        })

        $(function () {
            //GetRecentMessage();
        });

        function GetRecentMessage() {
            $.ajax({
                url: "/SMSManagement/GetRecentMessages",
                type: "Get",
                //data: "{customerName:'" + customerName + "'}",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (purchases) {
                    console.log(purchases)
                    var i = 0;

                    var table = $("#tblMessage");
                    table.find("tr:not(:first)").remove();
                    $.each(JSON.parse(purchases), function (i, purchase) {
                        var table = $("#tblMessage");
                        var row = table[0].insertRow(-1);
                        $(row).append("<td />");
                        $(row).find("td").eq(0).html(purchase.sender_name);
                        $(row).append("<td />");
                        $(row).find("td").eq(1).html(purchase.recipient);
                        $(row).append("<td />");
                        $(row).find("td").eq(2).html('<span class="msg-more">' + purchase.message + '</span>');
                        //$(row).append("<td />");
                        //$(row).find("td").eq(3).html(purchase.Country);
                    });
                }
            });
        }
    </script>
</body>

</html>