<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main | System</title>

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

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> New Customer </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/Customers/Inquiry?searchFor=">Customer</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <form method="post" class="form-horizontal" role="form" id="formTransaction" action="/Customers/Create">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title m-0">Customer Information</h5>
                                <div class="card-tools">
                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i>
                                        Save</button>
                                    <a href="/Customers/Inquiry?searchFor=" class="btn btn-sm btn-danger"><i
                                            class=""></i> Cancel</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table width="100%" class="table-sm">
                                    <tr>
                                        <td style="vertical-align: middle;">Title</td>
                                        <td>
                                            <select style="width: 100%;" class="form-control select2" id="Title"
                                                name="Title">
                                                <option value="1">Mr.</option>
                                                <option value="2">Mrs.</option>
                                                <option value="3">Ms.</option>
                                                <option value="4">Atty.</option>
                                                <option value="5">Dr.</option>
                                                <option value="6">Prof.</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;">Customer Name <font color="#FF0000">*
                                            </font>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="col-form-label text-muted"><em>Lastname</em></label>
                                                <input class="form-control" placeholder="Dela Cruz Jr." type="text"
                                                    data-val="true"
                                                    data-val-length="The field LastName must be a string with a maximum length of 50."
                                                    data-val-length-max="50" id="LastName" maxlength="50"
                                                    name="LastName" value="" />
                                                <span class="text-danger field-validation-valid"
                                                    data-valmsg-for="LastName" data-valmsg-replace="true"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="col-form-label text-muted"><em>Firstname</em></label>
                                                <input class="form-control" placeholder="Juan" type="text"
                                                    data-val="true"
                                                    data-val-length="The field FirstName must be a string with a maximum length of 50."
                                                    data-val-length-max="50" id="FirstName" maxlength="50"
                                                    name="FirstName" value="" />
                                                <span class="text-danger field-validation-valid"
                                                    data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="col-form-label text-muted"><em>Middlename</em></label>
                                                <input class="form-control" placeholder="Protacio" type="text"
                                                    data-val="true"
                                                    data-val-length="The field MiddleName must be a string with a maximum length of 50."
                                                    data-val-length-max="50" id="MiddleName" maxlength="50"
                                                    name="MiddleName" value="" />
                                                <span class="text-danger field-validation-valid"
                                                    data-valmsg-for="MiddleName" data-valmsg-replace="true"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle">Contact No.</td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-phone-alt"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Landline No." type="text"
                                                    data-val="true"
                                                    data-val-length="The field TelephoneNo must be a string with a maximum length of 50."
                                                    data-val-length-max="50" id="TelephoneNo" maxlength="50"
                                                    name="TelephoneNo" value="" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fa fa-mobile-alt"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Mobile No." type="text"
                                                    data-val="true"
                                                    data-val-length="The field MobileNo must be a string with a maximum length of 50."
                                                    data-val-length-max="50" id="MobileNo" maxlength="50"
                                                    name="MobileNo" value="" />
                                            </div>
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle">Civil Status</td>
                                        <td>
                                            <select style="width: 100%;" class="form-control select2" id="CivilStatus"
                                                name="CivilStatus">
                                                <option value="1">Single</option>
                                                <option value="2">Married</option>
                                                <option value="3">Separated</option>
                                                <option value="4">Divorce</option>
                                                <option value="5">Annulled</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-envelope"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="youremail@gmail.com"
                                                    type="email" data-val="true"
                                                    data-val-email="The Email field is not a valid e-mail address."
                                                    id="Email" name="Email" value="" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle">Birth Date <font color="#FF0000">*</font>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input class="form-control date" data-mask="99/99/9999"
                                                        id="Birthday" name="Birthday" placeholder="MM/DD/YYYY"
                                                        required="required" type="text" value="" />
                                                </div>
                                                <span class="text-danger field-validation-valid"
                                                    data-valmsg-for="Birthday" data-valmsg-replace="true"></span>
                                            </div>

                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle">Present Address <font color="#FF0000">*
                                            </font>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Present Address" type="text"
                                                    data-val="true"
                                                    data-val-length="The field CurrentStreet must be a string with a maximum length of 50."
                                                    data-val-length-max="50" id="CurrentStreet" maxlength="50"
                                                    name="CurrentStreet" value="" />
                                                <span class="text-danger field-validation-valid"
                                                    data-valmsg-for="CurrentStreet" data-valmsg-replace="true"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Present Zip Code" type="text"
                                                    data-val="true"
                                                    data-val-length="The field CurrentZipCode must be a string with a maximum length of 50."
                                                    data-val-length-max="50" id="CurrentZipCode" maxlength="50"
                                                    name="CurrentZipCode" value="" />
                                                <span class="text-danger field-validation-valid"
                                                    data-valmsg-for="CurrentZipCode" data-valmsg-replace="true"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle">Permanent Address <font color="#FF0000">*
                                            </font>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Home/Permanent Address"
                                                    type="text" data-val="true"
                                                    data-val-length="The field PermanentStreet must be a string with a maximum length of 50."
                                                    data-val-length-max="50" id="PermanentStreet" maxlength="50"
                                                    name="PermanentStreet" value="" />
                                                <span class="text-danger field-validation-valid"
                                                    data-valmsg-for="PermanentStreet" data-valmsg-replace="true"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Permanent Zip Code" type="text"
                                                    data-val="true"
                                                    data-val-length="The field PermanentZipCode must be a string with a maximum length of 50."
                                                    data-val-length-max="50" id="PermanentZipCode" maxlength="50"
                                                    name="PermanentZipCode" value="" />
                                                <span class="text-danger field-validation-valid"
                                                    data-valmsg-for="PermanentZipCode"
                                                    data-valmsg-replace="true"></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle">Name of Spouse</td>
                                        <td>
                                            <input class="form-control" placeholder="Antonia C. Dela Cruz" type="text"
                                                id="NameOfSpouse" name="NameOfSpouse" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle">Residence</td>
                                        <td>
                                            <div class="icheck-primary icheck-inline">
                                                <input id="owned" name="HomeStatus" type="radio" value="0" />
                                                <label for="owned">Owned</label>
                                            </div>
                                            <div class="icheck-primary icheck-inline">
                                                <input id="rented" name="HomeStatus" type="radio" value="1" />
                                                <label for="rented">Rented</label>
                                            </div>
                                            <div class="icheck-primary icheck-inline">
                                                <input id="relatives" name="HomeStatus" type="radio" value="2" />
                                                <label for="relatives">Living w/ relatives</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle">ID Type</td>
                                        <td>
                                            <select style="width: 100%;" class="form-control select2" id="IdType"
                                                name="IdType"></select>
                                        </td>
                                    </tr>
                                    <tr id="idnumber-1-tr" style="display: none;">
                                        <td>ID Number</td>
                                        <td>
                                            <input class="form-control idnumber" placeholder="Enter ID Number" autofocus
                                                type="text" id="IdNumber" name="IdNumber" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle">ID Type 2</td>
                                        <td>
                                            <select style="width: 100%;" class="form-control select2" id="IdType2"
                                                name="IdType2"></select>
                                        </td>
                                    </tr>
                                    <tr id="idnumber-2-tr" style="display: none;">
                                        <td>ID Number</td>
                                        <td>
                                            <input class="form-control" placeholder="Enter ID Number" autofocus
                                                type="text" id="IdNumber2" name="IdNumber2" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"
                                            style="vertical-align: middle; font-weight: bold; color: #c93600;">
                                            OFFICE/BUSINESS INFORMATION</td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle">Office Name</td>
                                        <td>
                                            <input class="form-control" placeholder="Office/Business Name" type="text"
                                                id="EmployerName" name="EmployerName" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle">Office Address</td>
                                        <td>
                                            <input class="form-control" placeholder="Office/Business Address"
                                                type="text" id="EmployerAddress" name="EmployerAddress" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Contact No.</td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-phone-alt"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Office Contact No." type="text"
                                                    id="WorkContactNo" name="WorkContactNo" value="" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle">Status</td>
                                        <td>
                                            <div class="icheck-primary icheck-inline">
                                                <input id="regular" name="WorkStatus" type="radio" value="0" />
                                                <label for="regular">Permanent/Regular</label>
                                            </div>
                                            <div class="icheck-primary icheck-inline">
                                                <input id="contractual" name="WorkStatus" type="radio" value="1" />
                                                <label for="contractual">Contractual</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <input name="__RequestVerificationToken" type="hidden"
                    value="CfDJ8HN0e4bg50RChBLW3U5KlY9nGaa6kHgd7rfxwGIExErQxQAIkHCTVAJU0l46iP9z1a266s-MaVzumMmIL4_jCsCyVQQ8ONnk3sd44P5nafr4N37sWPCj0frtvpQFYKLR7t0bM5KQgCuwDcPNc_Xh69ylUoIcG9icDAIxLy8O9N-dkLSyQpK5eeXCzJHjXdnIUQ" />
            </form>
        </div>
    </section>



    </div>
    </div>

    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/plugins/ckeditor/ckeditor.js"></script>
    <script src="/adminlte/plugins/number/jquery.number.js"></script>
    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>
    <script src="/adminlte/plugins/moment/moment.min.js"></script>
    <script src="/adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>
    <script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="/adminlte/plugins/print/print.min.js"></script>
    <script src="/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="/adminlte/plugins/tablexls/jquery.table2excel.min.js"></script>
    <script src="/adminlte/plugins/toastr/toastr.min.js"></script>
    <script src="/adminlte/plugins/bootbox/bootbox.min.js"></script>
    <script src="/js/knockout-3.4.2.js"></script>
    <script src="/adminlte/plugins/smscounter/SMSCounter.js"></script>
    <script src="/adminlte/dist/js/adminlte.min.js"></script>
    <script src="/js/d3.min.js"></script>
    <script src="/js/site.js?v=b9crqfe1OmnxVJM8eq51wraWd5FFsc-UtVf7TVFnW64"></script>
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
            $('#Title').select2();
            $('#CivilStatus').select2();

            $('#IdType').select2({
                placeholder: "Select ID Type",
                theme: "bootstrap4",
                allowClear: true,
                ajax: {
                    url: "/Customers/Search",
                    contentType: "application/json; charset=utf-8",
                    data: function (params) {
                        var query =
                        {
                            term: params.term,
                        };
                        return query;
                    },
                    processResults: function (result) {
                        return {
                            results: $.map(result, function (item) {
                                return {
                                    id: item.id,
                                    text: item.idType
                                };
                            }),
                        };
                    }
                }
            });

            $('#IdType2').select2({
                placeholder: "Select ID Type",
                theme: "bootstrap4",
                allowClear: true,
                ajax: {
                    url: "/Customers/Search",
                    contentType: "application/json; charset=utf-8",
                    data: function (params) {
                        var query =
                        {
                            term: params.term,
                        };
                        return query;
                    },
                    processResults: function (result) {
                        return {
                            results: $.map(result, function (item) {
                                return {
                                    id: item.id,
                                    text: item.idType
                                };
                            }),
                        };
                    }
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

            $("#formTransaction").validate();

            $("#IdType").change(function () {
                $('#idnumber-1-tr').show();
                $('.idnumber').focus();
            });

            $("#IdType2").change(function () {
                $('#idnumber-2-tr').show();
                $('#IdNumber2').focus();
            });

        })
    </script>
</body>

</html>