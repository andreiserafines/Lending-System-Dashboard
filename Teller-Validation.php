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
                        <h1 class="m-0"> Teller Transaction </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/Teller">Teller</a></li>
                            <li class="breadcrumb-item active">Validation</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form id="formTransaction" class="form-horizontal" method="post" action="/Teller/Validation"
                            role="form">
                            <input name="__RequestVerificationToken" type="hidden"
                                value="CfDJ8HN0e4bg50RChBLW3U5KlY_TPPo5NDve7w2MI2e6_G-bIOXwjy1jXmWrABL4cMOXglDunghdMwPmE3gq2WN1ywFXhVwkvDC4bnBJ-EnPe2VNNWBVfz1DDT9qeN_twurYxC45T0_ADuBV-cpWDTHLdEGyUJMoXk3i8Owuu9hg7Uo3kfluIgXlLsv005_ee_xZPg" />
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title">Teller Transaction</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3" for="TransactionId">Transaction</label>
                                        <div class="col-md-9">
                                            <select id="TransactionId" name="TransactionId" class="form-control select2"
                                                data-placeholder="- Select Transaction -" required>
                                                <option value="1" data-normal-entry="1"></option>
                                                <option value="2" data-normal-entry="1">HOSPITAL TRANSACTION PAYMENT
                                                </option>
                                                <option value="3" data-normal-entry="1">SCHOOL STUDENT TRANSACTION
                                                    PAYMENT</option>
                                                <option value="4" data-normal-entry="1">UNIFIED TRANSACTION PAYMENT
                                                </option>
                                                <option value="5" data-normal-entry="1">HOLD-OUT PAYMENT</option>
                                                <option value="6" data-normal-entry="1">BORROWED FUNDS</option>
                                                <option value="7" data-normal-entry="0">TELLER CASH ENDING</option>
                                                <option value="8" data-normal-entry="0">HOLDOUT REFUND (HOSPITAL PAYMENT
                                                    DEP)</option>
                                                <option value="9" data-normal-entry="0">BANK ECASH LOAD</option>
                                                <option value="10" data-normal-entry="0">CASH REFUND FOR PAYMENT
                                                </option>
                                                <option value="11" data-normal-entry="0">BORROWED FUNDS PAYMENT</option>
                                                <option value="12" data-normal-entry="0">WAIVER /REBATE OF INTEREST
                                                </option>
                                                <option value="13" data-normal-entry="0">WAIVER OF PENALTIES</option>
                                                <option value="14" data-normal-entry="0">WRONG POSTING OF LOAN PAYMENT
                                                </option>
                                                <option value="15" data-normal-entry="0">VOUCHER REIMBURSEMENT</option>
                                                <option value="16" data-normal-entry="0">VOUCHER REFUND</option>
                                                <option value="17" data-normal-entry="0">PETTY CASH REIMBURSEMENT
                                                </option>
                                                <option value="18" data-normal-entry="0">PETTY CASH REFUND</option>
                                                <option value="19" data-normal-entry="0">SSS/PHILHEALTH/PAG-IBIG
                                                </option>
                                                <option value="20" data-normal-entry="0">BILLS PAYMENT
                                                    (LIGHT/WATER/CABLE/TELEPHONE)</option>
                                                <option value="21" data-normal-entry="0">OFFICES SUPPLY</option>
                                                <option value="22" data-normal-entry="0">LOAN PAYMENT</option>
                                                <option value="23" data-normal-entry="0">COMPENSATION/FRINGE BENEFITS
                                                </option>
                                                <option value="24" data-normal-entry="0">FINANCE CHARGES</option>
                                                <option value="25" data-normal-entry="0">FUEL AND LUBRICANTS</option>
                                                <option value="26" data-normal-entry="0">TRAVELING EXPENSE</option>
                                                <option value="27" data-normal-entry="0">TAXES AND LICENSES</option>
                                                <option value="28" data-normal-entry="0">DEPRECIATION/AMORTIZATION
                                                </option>
                                                <option value="29" data-normal-entry="0">POSTAGE/TELEPHONE AND TELEGRAPH
                                                </option>
                                                <option value="30" data-normal-entry="0">INFORMATION TECHNOLOGY EXPENSE
                                                </option>
                                                <option value="31" data-normal-entry="0">REPAIR AND MAINTENANCE</option>
                                                <option value="32" data-normal-entry="0">FEES AND COMMISSION</option>
                                                <option value="33" data-normal-entry="0">STATIONERY AND SUPPLIES
                                                </option>
                                                <option value="34" data-normal-entry="0">RICE ALLOWANCE</option>
                                                <option value="35" data-normal-entry="0">REPRESENTATION ENTERTAINMENT
                                                </option>
                                                <option value="36" data-normal-entry="0">DONATION AND CHARITABLE
                                                    CONTRITUTION</option>
                                                <option value="37" data-normal-entry="0">FINES/PENALTIES AND OTHER
                                                    CHARGES</option>
                                                <option value="38" data-normal-entry="0">RENT EXPENSE</option>
                                                <option value="39" data-normal-entry="0">SEC. MESC. AND JANITORIAL
                                                    SERVICES</option>
                                                <option value="40" data-normal-entry="0">INSURANCE EXPENSE</option>
                                                <option value="41" data-normal-entry="0">MANAGEMENT AND OTHER
                                                    PROFESSIONAL FEES</option>
                                                <option value="42" data-normal-entry="0">DOCUMENTARY STAMPS - DEPOSITS
                                                </option>
                                                <option value="43" data-normal-entry="0">DOCUMENTARY STAMPS - BORROWINGS
                                                </option>
                                                <option value="44" data-normal-entry="0">PERIODICALS AND MAGAZINES
                                                </option>
                                                <option value="45" data-normal-entry="0">ADVERTISING EXPENSE</option>
                                                <option value="46" data-normal-entry="0">MEMBERSHIP FEES AND DUES
                                                </option>
                                                <option value="47" data-normal-entry="0">MISCELLANEOUS EXPENSE</option>
                                                <option value="48" data-normal-entry="0">LITIGATION/ASSETS ACQUIRED
                                                    EXPENSES</option>
                                                <option value="49" data-normal-entry="0">BAD DEBTS WRITTEN OFF</option>
                                                <option value="50" data-normal-entry="0">FUND TRANSFER FROM CASHIER
                                                </option>
                                                <option value="51" data-normal-entry="1">CASH TURNOVER TO CASHIER
                                                </option>
                                                <option value="52" data-normal-entry="0">
                                                    BOD(REP./MEALS/STOCKSHARES/OTHER.ALLOWANCES)</option>
                                                <option value="53" data-normal-entry="0">AGENCIES SHARE COLLECTION
                                                    ALLOWANCES</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3" for="Reference">Reference</label>
                                        <div class="col-md-9">
                                            <input autocomplete="off" class="form-control text-box single-line"
                                                id="Reference" name="Reference" required="required" type="text"
                                                value="" />
                                            <span class="text-danger field-validation-valid" data-valmsg-for="Reference"
                                                data-valmsg-replace="true"></span>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3" for="TransactionAmount">Amount</label>
                                        <div class="col-md-9">
                                            <input class="form-control number" data-val="true"
                                                data-val-number="The field Amount must be a number."
                                                data-val-required="The Amount field is required." id="TransactionAmount"
                                                name="TransactionAmount" required="required" type="text" value="" />
                                            <span class="text-danger field-validation-valid"
                                                data-valmsg-for="TransactionAmount" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-9 offset-md-3">
                                            <label class="radio-inline">
                                                <input data-val="true"
                                                    data-val-required="The TransactionType field is required."
                                                    id="TransactionType" name="TransactionType" type="radio"
                                                    value="0" /> Debit
                                            </label>
                                            &nbsp;
                                            <label class="radio-inline">
                                                <input id="TransactionType" name="TransactionType" type="radio"
                                                    value="1" /> Credit
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="col-md-9 offset-md-3">
                                        <button id="btnPost" class="btn btn-primary">Post</button>
                                        <a class="btn btn-danger" href="/Home/Index">Cancel</a>
                                    </div>
                                </div>
                            </div>
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

    <script src="/lib/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js"></script>
    <script src="/js/additional-methods.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#TransactionId').select2({ theme: "bootstrap4" });
            $("#TransactionAmount").val("0");
            $("#Reference").val("");
            $('.number').number(true, 2, '.', ',');
            var unmasked = function () {
                $('.number').number(true, 2, '.', '');
            };

            var getNormalEntry = function () {
                var NormalEntry = $('#TransactionId').find(':selected').data('normal-entry');
                $("input[name=TransactionType][value=" + NormalEntry + "]").prop('checked', true);
            }
            $('#TransactionId').on('change', getNormalEntry);

            $('#formTransaction').on('submit', unmasked);

            //$("#formTransaction").validate();


        })
    </script>

</body>

</html>