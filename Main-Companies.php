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
            <h1 class="m-0">Company Profile / Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Company Profile</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content container-fluid">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title"><i class="far fa-clone pr-1"></i> Company Information</h5>
                <div class="card-tools">
                  <a data-toggle="tooltip" title=""
                    onclick="showInPopup('https://208.73.204.233:8772/Companies/UpdateCompany/99999','Update Company')"
                    class="btn btn-tool" data-original-title="Edit Information"><i class="fas fa-edit"></i></a>
                </div>
              </div>
              <div class="card-body">
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td width="25%">Company Name : </td>
                      <td><b></b></td>
                    </tr>
                    <tr>
                      <td width="25%">Contact Person : </td>
                      <td><b></b></td>
                    </tr>
                    <tr>
                      <td>TIN No. : </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Address : </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Telephone No. : </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Mobile No. : </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Website : </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Email : </td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Date Activated : </td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form id="updateForm" method="post" novalidate="novalidate">

              <input type="hidden" data-val="true"
                data-val-length="The field CompanyCode must be a string with a maximum length of 5."
                data-val-length-max="5" id="CompanyCode" name="CompanyCode" value="99999">
              <input type="hidden" data-val="true" data-val-required="The EnabledSMS field is required." id="EnabledSMS"
                name="EnabledSMS" value="0">
              <input type="hidden" data-val="true" data-val-required="The NotifyCustomerLoanRelease field is required."
                id="NotifyCustomerLoanRelease" name="NotifyCustomerLoanRelease" value="1">
              <input type="hidden" data-val="true"
                data-val-required="The NotifyCustomerPaymentPosted field is required." id="NotifyCustomerPaymentPosted"
                name="NotifyCustomerPaymentPosted" value="1">
              <input type="hidden" data-val="true" data-val-required="The NotifyCustomerPastdue field is required."
                id="NotifyCustomerPastdue" name="NotifyCustomerPastdue" value="1">

              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between">
                    <h5 class="">Company Settings</h5>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-form-label col-md-4" for="LimitPerComaker"> Co-maker Limit <i
                        data-toggle="tooltip" title="" class="fas fa-info-circle text-cyan"
                        data-original-title="Limit client to become a co-maker in loan transaction."></i></label>
                    <div class="col-md-2">
                      <input autocomplete="off" class="form-control" data-val="true"
                        data-val-required="The LimitPerComaker field is required." id="LimitPerComaker"
                        name="LimitPerComaker" required="required" type="text" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-form-label col-md-4" for="PasswordExpireDays"> Expire Account in days <i
                        data-toggle="tooltip" title="" class="fas fa-info-circle text-cyan"
                        data-original-title="User Account will expired in given days."></i></label>
                    <div class="col-md-2">
                      <input autocomplete="off" class="form-control" data-val="true"
                        data-val-required="The PasswordExpireDays field is required." id="PasswordExpireDays"
                        name="PasswordExpireDays" required="required" type="text" value="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-10">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" data-val="true"
                          data-val-required="The Auto download Snapshot. field is required." id="AutoDownloadSnapShot"
                          name="AutoDownloadSnapShot" type="checkbox" value="true">
                        <label class="custom-control-label" for="AutoDownloadSnapShot">Auto download Snapshot.</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-10">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" data-val="true"
                          data-val-required="The Enable General Ledger (GL) field is required." id="EnableGl"
                          name="EnableGl" type="checkbox" value="true">
                        <label class="custom-control-label" for="EnableGl">Enable General Ledger (GL)</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-10">
                      <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input enabled-sms" id="customEnabledSMS">
                        <label class="custom-control-label" for="customEnabledSMS">Enable SMS</label>
                      </div>
                    </div>
                  </div>

                  <div class="dSendSMS" style="display: none;">
                    <div class="form-group row">
                      <div class="col-md-10 offset-md-2">
                        <div class="custom-control custom-checkbox mr-sm-2">
                          <input type="checkbox" class="custom-control-input notify-loan" id="notifyCustomerViewSMS">
                          <label class="custom-control-label" for="notifyCustomerViewSMS">Notify Customer if Loan
                            Approved/Release/Disapproved </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-10 offset-md-2">
                        <div class="custom-control custom-checkbox mr-sm-2">
                          <input type="checkbox" class="custom-control-input notify-payment" id="notifyCustomerPayment">
                          <label class="custom-control-label" for="notifyCustomerPayment">Notify Customer if Loan
                            Payment Posted </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-10 offset-md-2">
                        <div class="custom-control custom-checkbox mr-sm-2">
                          <input type="checkbox" class="custom-control-input notify-unpaid"
                            id="customControlUnpaidAmortization">
                          <label class="custom-control-label" for="customControlUnpaidAmortization">Notify Customer for
                            Unpaid Amortization</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row monthDay" style="display: none;">
                      <label class="col-form-label col-md-3" for="DayOfNotification">Every Nth of the month</label>
                      <div class="col-md-8">
                        <input autocomplete="off" class="form-control" data-val="true"
                          data-val-required="The DayOfNotification field is required." id="DayOfNotification"
                          name="DayOfNotification" placeholder="eg. 5 " required="required" type="text" value="5">
                        <span class="text-danger field-validation-valid" data-valmsg-for="DayOfNotification"
                          data-valmsg-replace="true"></span>
                      </div>
                    </div>

                  </div>

                </div>
                <div class="card-footer">
                  <a id="download" class="btn btn-primary" href="/Home/MyExportAction">Manually Download Transaction
                    Snapshot</a>
                  <div class="float-right">
                    <button type="button" id="btnPost" class="btn btn-success">Update Setting</button>
                    <a class="btn btn-danger" href="/Home/Index">Cancel</a>
                  </div>
                </div>
              </div>
              <input name="__RequestVerificationToken" type="hidden"
                value="CfDJ8HN0e4bg50RChBLW3U5KlY85iMyv-wrcgXpzy-xdDAxxdqUS1exIDCIvJLI4gqaOMLBmjQUVo1BepIjeEUfCM1FHhoybjdcL2JOW5I-EZuB5ecy1MG47W4VrE825ioxfbKHY5dPLKEhn7-vTPbZUlquzdjncHC-NSQXxTfkcmNm7TkX2ZFhfBgB3X2iQ-DcDig"><input
                name="AutoDownloadSnapShot" type="hidden" value="false"><input name="EnableGl" type="hidden"
                value="false">
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
</body>

</html>