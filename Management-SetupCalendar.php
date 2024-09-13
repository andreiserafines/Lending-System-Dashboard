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
                        <h1 class="m-0"> Setup System Calendar </h1>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Setup System Calendar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">System Calendar Information</h5>

                            </div>
                            <div class="card-body">
                                <form role="form" class="form-horizontal" action="/Management/CreateCalendar"
                                    method="post" id="formTransaction">

                                    <input id="op" name="op" type="hidden" value="" />
                                    <input id="calendarYear" name="calendarYear" type="hidden" value="" />
                                    <input id="calendarDate" name="calendarDate" type="hidden" value="" />
                                    <input id="calendarType" name="calendarType" type="hidden" value="" />
                                    <div class="form-group row">
                                        <label class="control-label col-md-2">Year</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" value="2024" id="CalendarYear" />
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-primary" data-loading-text="Wait..." type="submit"
                                                value="0">Display or Create Year Calendar</button>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-2">Date</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control date" id="CalendarDate" readonly />
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" id="CalendarType">
                                                <option value="W">Working</option>
                                                <option value="H">Holiday</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-primary" data-loading-text="Wait..." type="submit"
                                                value="1">Update Calendar Date</button>
                                        </div>
                                    </div>
                                    <input name="__RequestVerificationToken" type="hidden"
                                        value="CfDJ8HN0e4bg50RChBLW3U5KlY83LIz1id5zDTLdBYJ_y7lwGhCfm4nSnA5H55pB49snS8JRQ-S8unJRiQlTw_z-jOMeNxv08-yhn06TOl8yfF-xVE2WshVRZgeLYUADQflSCcT_HJqaYXOW-43Efl1tQPozsonGVWXeKSfVg1GwTc0pUQYnfNGPH4XhzN_lZPZomA" />
                                </form>

                                <table id="calendarList" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Type(W/H/S)</th>
                                            <th>Remarks</th>
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
        $(function () {
            $('#calendarList').dataTable({
                responsive: true,
                "pageLength": 10,
                lengthChange: false,
                "bFilter": false,
                "ordering": false,
                "oLanguage": {
                    "sEmptyTable": "No entries to show..."
                }
            });

            $('.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: true,
                autoclose: true,
                format: "mm/dd/yyyy"
            });

            var updateCalendar = function (e) {
                var op = $("button[type=submit][clicked=true]").val();
                var calendarYear = $("#CalendarYear").val();
                var calendarType = $("#CalendarType").val();
                var calendarDate = $("#CalendarDate").val();

                console.log("CalendarYear ".concat(calendarYear, " CalendarType ", calendarType, " CalendarDate ", calendarDate));

                $("#op").val(op);
                $("#calendarYear").val(calendarYear);
                $("#calendarDate").val(calendarDate);
                $("#calendarType").val(calendarType);

            }

            $('#formTransaction').on('submit', updateCalendar);

            $("form button[type=submit]").click(function (e) {
                $("button[type=submit]", $(this).parents("form")).removeAttr("clicked");
                $(this).attr("clicked", "true");
                e.preventDefault();
                $('#formTransaction').submit();
            });
        });
    </script>
</body>

</html>