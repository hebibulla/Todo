
<!DOCTYPE html>
<html lang="en">

@include('include.header')

<body>

    <div id="wrapper">
<!-- Sidebar -->
@include('include.sitebar')
 <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
@yield('content')
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
