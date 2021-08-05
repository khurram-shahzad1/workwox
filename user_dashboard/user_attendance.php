<?php 
session_start();
if (!isset($_SESSION['user_loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?><head>
<title> WorkWox | Attendance
    </title>

</head>
<!-- Main Header Start -->
<?php include '../components/main_header.php' ?>
<!-- Main Header End -->

<body class="salon-2-saidbar-main  ">

    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <!-- Wrapper Start -->
    <div class="wrapper l-horizontal">

        <!-- Navbar Start -->
        <?php include '../components/user_nav.php'; ?>
        <!-- Navbar End -->

        <!-- Main-Body Start -->
        <div class="content-page salon2-content" style="border-radius:20px;">
            <div class="bg-nav-horizontal mt-0">
            </div>
            <div class="tab-content" id="myTabContent-2">
                <div class="tab-pane fade show active" id="layout1" role="tabpanel" aria-labelledby="layout1-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title">Attendance </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title"></h4>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-lg-1 col-sm-6 col-md-6">
                                        </div>
                                        <div class="col-lg-10 col-sm-6 col-md-6 ">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Timesheet</h4> <span><?php date_default_timezone_set("Asia/Karachi");
                                                    $currentdate=date('d/m/Y');
                                                    echo $currentdate;?></span>
                                                    <p class="card-text"></p>
                                                    <form action="code.php" method="post">
                                                    <input type="submit" name="punch_in" class="btn btn-success rounded-pill px-5 py-2" value="Puch In">
                                                        </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-1 col-sm-6 col-md-6">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title"></h4>
                                        </div>

                                    </div>
                                    <div class="row text-center">
                                        <div class="col-lg-1 col-sm-6 col-md-6">
                                        </div>

                                        <div class="col-lg-10 col-sm-6 col-md-6 ">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Timesheet</h4> <span><?php date_default_timezone_set("Asia/Karachi");
                                                    $currentdate=date('d/m/Y');
                                                    echo $currentdate;?></span>
                                                    <p class="card-text"></p>
                                                    <form action="code.php" method="post">
                                                    <input type="submit" name="punch_out" class="btn btn-success rounded-pill px-5 py-2" value="Puch Out">
                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-sm-6 col-md-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Main-Body End -->

    </div>
    <!-- Wrapper End-->

    <!-- Footer Start -->
    <?php include '../components/admin_footer.php'; ?>
    <!-- Footer End -->



    <!-- Backend Bundle JavaScript -->
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="../assets/js/backend-bundle.min.js"></script>

    <!-- Flextree Javascript-->
    <script src="../assets/js/flex-tree.min.js"></script>
    <script src="../assets/js/tree.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>

    <!-- Masonary Gallery Javascript -->
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- Mapbox Javascript -->
    <script src="../assets/js/mapbox-gl.js"></script>
    <script src="../assets/js/mapbox.js"></script>

    <!-- Fullcalender Javascript -->
    <script src='../assets/vendor/fullcalendar/core/main.js'></script>
    <script src='../assets/vendor/fullcalendar/daygrid/main.js'></script>
    <script src='../assets/vendor/fullcalendar/timegrid/main.js'></script>
    <script src='../assets/vendor/fullcalendar/list/main.js'></script>

    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="../assets/js/vector-map-custom.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/chart-custom.js"></script>

    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>

    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/sweetalert.min.js"></script>
    <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] !=''){

    ?>
    <script>swal({
  title: "<?php echo $_SESSION['status'];?>",
//   text: "You clicked the button!",
  icon: "<?php echo $_SESSION['status_code'];?>",
  button: "Ok!",
});
</script>
<?php
unset($_SESSION['status']);
}?>
</body>

</html>