<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lending System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="shortcut icon" href="dist/img/AdminLTELogo.png" type="image/x-icon">
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

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Report Scope</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-bell"></i>
            <span class="badge badge-danger navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>

        <!-- Date today -->
        <li class="nav-item dropdown">
          <a class="nav-link flex" data-toggle="dropdown" href="#">
            <i class="far fa-calendar"></i>
            8/5/2024
          </a>
        </li>

        <!-- User name -->
        <li class="nav-item dropdown">
          <a class="nav-link flex" data-toggle="dropdown" href="#">
            <i class="fas fa-user"></i>
            User
          </a>
        </li>

        <!-- User name -->
        <li class="nav-item dropdown">
          <a class="nav-link flex" data-toggle="dropdown" href="#">
            <i class="fas fa-power-off"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary bg-dark elevation-4">
      <!-- Brand Logo -->
      <a href="Index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-semibold text-uppercase text-yellow">Lending System</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- Dashboar-btn -->
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <!-- Customer -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Customer
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Customer-Create.php" target="contentFrame" class="nav-link">
                    <i class="fa fa-user nav-icon text-gray"></i>
                    <p>New Customer</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Customer-CustomerList.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-list nav-icon text-gray"></i>
                    <p>Customer List</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Teller -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cash-register"></i>
                <p>
                  Teller
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Teller-LoanPayment.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-hand-holding-usd nav-icon text-gray"></i>
                    <p>Loan Payment</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Teller-Validation.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-clipboard-check nav-icon text-gray"></i>
                    <p>Validation</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Teller-Collections.php" target="contentFrame" class="nav-link">
                    <i class="far fa-circle nav-icon text-yellow"></i>
                    <p>Collections</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Teller-Transaction.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-piggy-bank nav-icon text-gray"></i>
                    <p>Deposit</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Teller-BatchPaymentScope.php" target="contentFrame" class="nav-link">
                    <i class="far fa-circle nav-icon text-green"></i>
                    <p>Loan Branch Posting</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Teller-BatchPosting.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-book nav-icon text-gray"></i>
                    <p>Deposit Branch Posting</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Reports -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Reports
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Reports-LoanReports.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-hand-holding-usd nav-icon text-gray"></i>
                    <p>Loans</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Reports-DepositReports.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-piggy-bank nav-icon text-gray"></i>
                    <p>Deposits</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Reports-TellerReports.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-cash-register nav-icon text-gray"></i>
                    <p>Teller</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- General Ledger -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  General Ledger
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="GenLed-Journal.php" target="contentFrame" class="nav-link">
                    <i class="far fa-circle nav-icon text-green"></i>
                    <p>Journal</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="GenLed-JournalReports.php" target="contentFrame" class="nav-link">
                    <i class="far fa-circle nav-icon text-yellow"></i>
                    <p>Backoffice Reports</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="GenLed-COA.php" target="contentFrame" class="nav-link">
                    <i class="far fa-circle nav-icon text-blue"></i>
                    <p>Chart of Accounts</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- System Maintenance -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                  System Management
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Management-SystemUsers.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-users nav-icon text-gray"></i>
                    <p>Manage Users</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Management-SystemGroups.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-user-tag nav-icon text-gray"></i>
                    <p>Manage User Role</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Management-SystemDate.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-clock nav-icon text-gray"></i>
                    <p>System Date</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Management-SetupCalendar.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-calendar nav-icon text-gray"></i>
                    <p>Setup Calendar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Management-RemoveLoans.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-user-times nav-icon text-gray"></i>
                    <p>Remove Loan Account</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Management-LoanTaggingOfficer.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-user-tag nav-icon text-gray"></i>
                    <p>Loan Officers</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Management-LoanTaggingOffice.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-building nav-icon text-gray"></i>
                    <p>Offices</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Management-BranchMaintenance.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-landmark nav-icon text-gray"></i>
                    <p>Branch Maintenance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Management-LoanMaintenance.php" target="contentFrame" class="nav-link">
                    <i class="fas fa-hand-holding-usd nav-icon text-gray"></i>
                    <p>Loan Maintenance</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Border -->
            <li class="nav-header">
            </li>

            <!-- Company Profile -->
            <li class="nav-item">
              <a href="Main-Companies.php" target="contentFrame" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Company Profile
                </p>
              </a>
            </li>

            <!-- SMS Maintenance -->
            <li class="nav-item">
              <a href="Main-SMSManagement.php" target="contentFrame" class="nav-link">
                <i class="nav-icon fas fa-plane"></i>
                <p>
                  SMS Maintenance
                </p>
              </a>
            </li>

            <!-- Billing Invoices -->
            <li class="nav-item">
              <a href="Main-CompanyInvoice.php" target="contentFrame" class="nav-link">
                <i class="nav-icon fas fa-file-alt fa-columns"></i>
                <p>
                  Billing Invoices
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=" content-wrapper">

      <iframe src="Main-Dashboard.php" name="contentFrame" frameborder="0" style="width: 100%;
        height: calc(100vh - 50px);
        border: none;">
      </iframe>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- ./wrapper -->

  <footer class="main-footer d-print-none">
    <strong>Copyright &copy; 2024 andreispdev</a>.</strong> All rights reserved.
  </footer>


  <div>

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
  </div>
</body>

</html>