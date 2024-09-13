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
                        <h1 class="m-0"> Deposit Transaction </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Deposit Transaction</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form id="formTransaction" class="form-horizontal" method="post">

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3">Search Client</label>
                                        <span class="col-sm-9">
                                            <select id="Depositor" name="Depositor" width="100%"
                                                class="form-control select2" autofocus="autofocus"></select>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3" for="AccountNo">Account No</label>
                                        <div class="col-sm-9">
                                            <input autofocus="" class="form-control text-box single-line" id="AccountNo"
                                                name="AccountNo" readonly="readonly" required="required" type="text"
                                                value="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3">Transaction Type</label>
                                        <div class="col-sm-9">
                                            <select id="TransactionId" name="TransactionId" class="form-control select2"
                                                required="required">
                                                <option value="1" cm="C">Cash Deposit</option>
                                                <option value="2" cm="C">Cash Withdrawal</option>
                                                <option value="3" cm="M">Memo Deposit</option>
                                                <option value="5" cm="Q">Check Deposit</option>
                                                <option value="8" cm="M">Loan Personal Savings</option>
                                                <option value="9" cm="M">Balance Forwared</option>
                                                <option value="4" cm="M">Memo Withdrawal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <fieldset id="chequeFields" disabled="">
                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3" for="ChequeCode">Cheque Type</label>
                                            <div class="col-sm-9">
                                                <label class="radio-inline">
                                                    <input name="ChequeCode" type="radio" value="1" />&nbsp; On-us
                                                </label>&nbsp;
                                                <label class="radio-inline">
                                                    <input name="ChequeCode" type="radio" value="2" />&nbsp; Local
                                                </label>&nbsp;
                                                <label class="radio-inline">
                                                    <input name="ChequeCode" type="radio" value="3" />&nbsp; Regional
                                                </label>&nbsp;
                                                <label class="radio-inline">
                                                    <input name="ChequeCode" type="radio" value="4" />&nbsp; Metro
                                                    Manila
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3" for="Bank">Bank</label>
                                            <div class="col-sm-9">
                                                <input class="form-control cheque text-box single-line" id="Bank"
                                                    name="Bank" required="" type="text" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3" for="ChequeNo">Cheque No.</label>
                                            <div class="col-sm-9">
                                                <input class="form-control cheque text-box single-line" id="ChequeNo"
                                                    name="ChequeNo" required="" type="text" value="" />
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3" for="TransactionAmount">Amount</label>
                                        <div class="col-sm-9">
                                            <input class="form-control number transactionAmount" data-val="true"
                                                data-val-number="The field Amount must be a number."
                                                data-val-required="The Amount field is required." id="TransactionAmount"
                                                name="TransactionAmount" required="required" type="text" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="col-sm-9 offset-sm-3">
                                        <button id="btnPost" type="button" class="btn btn-success">Post Deposit</button>
                                        <button class="btn btn-danger btnCancel" type="button">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <input name="__RequestVerificationToken" type="hidden"
                                value="CfDJ8HN0e4bg50RChBLW3U5KlY_YtHH3Tb3y4b2OGITBzvAfHkcAFMaW9nvx6a3aUalPPxXvZJlNo4yU9UvpWmSSulDWNir3n1gwo-yecQG_D_WuXPYy7Nrq3x9JRoK1-kL1bO8DS15Ze7POYHYscE2WMSNsqCe8cxWFzoHzr0NUVQzbb9Ypwu2vtZ06EbtLRHmnrg" />
                        </form>

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
        $("#TransactionAmount").val("0");
        $("#AccountNo").val("");

        $(function () {
            var options = {
                theme: "bootstrap4",
                minimumInputLength: 2,
                ajax: {
                    url: '/Teller/jCustomerDeposits',
                    dataType: 'json',
                    delay: 250,
                    quietMillis: 100,
                    data: function (params) {
                        return {
                            lastName: params.term
                        }
                    },
                    processResults: function (data) {
                        console.log(data);
                        var myResults = [];
                        $.each(data, function (index, item) {
                            myResults.push({
                                'id': item.accountNo,
                                'text': item.customerName
                            });
                        });
                        return {
                            results: myResults
                        };
                    }
                },
            };


            $('#Depositor').select2(options);

            var getSelectedAccount = function () {
                var AccountNo = $('#Depositor').val();
                $('#AccountNo').val(AccountNo);
                $('.transactionAmount').focus();
                console.log(AccountNo);
            };

            //$('#Depositor').on('change', getSelectedAccount);

            //$('#Depositor').on('change', function (e) {
            //    var AccountNo = $('#Depositor').val();
            //    $('#TransactionAmount').focus();
            //    $('#AccountNo').val(AccountNo);
            //    console.log(AccountNo);
            //});

            $('#TransactionId').select2({ theme: "bootstrap4" });
            $('#ChequeCode').select2({ theme: "bootstrap4" });
            $('.number').number(true, 2, '.', ',');

            var unmasked = function () {
                $('.number').number(true, 2, '.', '');
            };

            $('#formTransaction').on('submit', unmasked);

            var getTransactionType = function () {
                var cm = $('option:selected', this).attr('CM');
                if (cm == "Q") {
                    $('#chequeFields').removeAttr("disabled")
                    $('.cheque').prop("required", "required");
                } else {
                    $('#chequeFields').attr("disabled", "");
                    $('.cheque').prop("required", "");
                }
            }
            $('#TransactionId').on('change', getTransactionType);

        });

        $('#Depositor').on('change', function (e) {
            var AccountNo = $('#Depositor').val();
            $('#TransactionAmount').focus();
            $('#AccountNo').val(AccountNo);
            console.log(AccountNo);
        });

        $('.btnCancel').on('click', function (e) {
            e.preventDefault();
            document.location.href = '/Home';
        });

        $('#btnPost').on('click', function (e) {
            e.preventDefault();
            var unmasked = function () {
                $('.number').number(true, 2, '.', '');
            };
            Swal.fire({
                title: 'Do you want to post deposit',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Post it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    unmasked;
                    $('#formTransaction').attr('action', '/Teller/Transaction');
                    $('#formTransaction').submit();
                }
            })
        });
    </script>
</body>

</html>