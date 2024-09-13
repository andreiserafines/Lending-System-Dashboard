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
                        <h1 class="m-0"> Remove Loans </h1>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Remove Loans</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title"> Remove Loans</h5>
                            </div>
                            <div class="card-body">
                                <form action="/Management/RemoveLoans" class="form-horizontal" method="post"
                                    role="form">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control" id="LoanNo" name="LoanNo"
                                                    required="required" type="text" value="" />
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary remove" type="submit">Go!</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <input name="__RequestVerificationToken" type="hidden"
                                        value="CfDJ8HN0e4bg50RChBLW3U5KlY9Gh2O9LMJnRKgg8vw5NfnYW--nINhXlDlseHyKP3cqKwu43eZ3faP8i4wdHEEuEKF1mBexrnNq8ujGoeuLUyycLj-dbL6hrgBq27hiksJ0jdc_Rd2nBkUW6Hcj6CGQ9bH-zqnUhg3H7ZByi6TPJy8UCKldS52naULjICaRJ-HhIw" />
                                </form>
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
        $(function () {
            $('form').validate();
            $('.remove').click(function (ev) {
                var options = {
                    message: 'Are you sure you want to remove this loan account?',
                    title: 'Remove Loan',
                    buttons: {
                        confirm: {
                            label: 'Yes',
                            className: 'btn-primary'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-warning'
                        }
                    },
                    callback: function (result) {

                        console.log(result);

                        if (result == true) {
                            $('form').submit();
                        }
                    }
                };

                bootbox.confirm(options);
                ev.preventDefault();
            });
        });
    </script>

</body>

</html>