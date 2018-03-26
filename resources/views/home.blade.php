<!DOCTYPE html>
<html lang="en">

@include('layouts.dash.head')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  @include('layouts.dash.nav')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      @include('layouts.dash.breadcrump')
      <div class="row">
        <div class="col-12">
          <h1>Blank</h1>
          <p>This is an example of a blank page that you can</p>
        </div>
      </div>
    </div>
    
    @include('layouts.dash.footer')
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    @include('layouts.dash.logout-modal')
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
