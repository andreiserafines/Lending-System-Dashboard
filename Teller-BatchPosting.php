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
                        <h1 class="m-0"> Deposit Batch Posting</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/Deposits/BatchPosting">Deposits</a></li>
                            <li class="breadcrumb-item active">Batch Posting</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content container-fluid">
            <div class="container-fluid">
                <form action="/Deposits/PostBatchTransaction" method="post"><input id="transactionId"
                        name="transactionId" type="hidden" value="6" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title">Deposit batch posting</h5>
                                </div>
                                <div class="card-body">
                                    <h3>Step 1.<small>Select batch file(.csv)</small></h3>
                                    <p>
                                        <label class="btn btn-primary btn-file">
                                            <i class="fa fa-folder-open"></i><input type="file" style="display:none;"
                                                accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                                        </label>
                                        <label id="filename"></label>
                                        <br />
                                    </p>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr class='alert alert-info'>
                                                <th>Account Number</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody id="fileContent"></tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Total</td>
                                                <td id="totalAmount"></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button id='postBatch' class="btn btn-primary">post</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <input name="__RequestVerificationToken" type="hidden"
                        value="CfDJ8HN0e4bg50RChBLW3U5KlY-GwUVammFZRNoAPq2sjaFqdizirXQF7E_p5O0X1SbSPB81XU-KnLadvwCR1uHqY3FUoXfxbAF83FRsihjdMpDfMVX9hg1YbxEWxVaV6ONKawBSPdzQrLSoGgsa_bcI0kBa4slL-o5g7QOHw9tczfjcOXIVqtf8qPx1hm77OwdYyA" />
                </form>
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

            $('#postBatch').prop("disabled", true);

            $(document).on('change', ':file', function () {
                var input = $(this);
                numFiles = input.get(0).files ? input.get(0).files.length : 1;

                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');

                $('#filename').text(label);

                input.trigger('fileselect', [numFiles, label]);
            });

            $(':file').on('fileselect', function (event, numFiles, label) {
                readTextFile(event);
            });


            function readTextFile(event) {
                var f = event.target.files[0];
                if (f) {
                    var r = new FileReader();
                    r.onload = function (e) {
                        var totalAmount;
                        var contents = e.target.result;
                        var fileRowContent = new Array();
                        var fileColumnContent = new Array();
                        var BatchViewModel = ["AccountNo", "Amount"];
                        var total;
                        var rowContent;
                        $("#fileContent").html("");
                        $("#batchPaymentTrigger").html("");
                        fileRowContent = contents.split('\r');
                        var fileLength = fileRowContent.length - 1;
                        for (r in fileRowContent) {
                            if (r < fileLength) {
                                fileColumnContent = fileRowContent[r].split('|');
                                rowContent = "<tr>";
                                for (c in fileColumnContent) {
                                    rowContent += "<input name=[" + r + "]." + BatchViewModel[c] + " type='hidden' value='" + fileColumnContent[c] + "' />";
                                };

                                for (c in fileColumnContent) {
                                    rowContent += "<td>" + fileColumnContent[c] + "</td>";
                                };
                                rowContent += "</tr>";
                                $("#fileContent").append(rowContent);
                            }
                        }

                        $('#totalAmount').html(totalAmount);
                        $('#postBatch').prop("disabled", false);

                    }
                    r.readAsText(f);
                } else {
                    alert('failed to read file');
                }
            };

            var postBatch = function (e) {
                $(':file').prop('disabled', true);
                $(this).prop('disabled', true);
                e.preventDefault();
                var $btn = $(this).button('loading');
                $('form').submit();

            }

            $('#postBatch').on('click', postBatch);

        })

    </script>
</body>

</html>