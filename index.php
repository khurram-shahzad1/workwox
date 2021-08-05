<?php 
session_start();
if (isset($_SESSION['user_loggedin'])) {
	header('Location: user_dashboard/index.php');
	exit;
}else if (isset($_SESSION['admin_loggedin'])){
    
        header('Location: admin_dashboard/index.php');
        exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="http://iqonic.design/themes/prox/html/assets/images/favicon.ico" />

    <link rel="stylesheet" href="assets/css/backend.min.css">
    <link rel="stylesheet" href="assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="assets/vendor/%40icon/dripicons/dripicons.css">

    <link rel='stylesheet' href='assets/vendor/fullcalendar/core/main.css' />
    <link rel='stylesheet' href='assets/vendor/fullcalendar/daygrid/main.css' />
    <link rel='stylesheet' href='assets/vendor/fullcalendar/timegrid/main.css' />
    <link rel='stylesheet' href='assets/vendor/fullcalendar/list/main.css' />
    <link rel="stylesheet" href="assets/vendor/mapbox/mapbox-gl.css">
    <script src="assets/js/jquery.min.js"></script>
</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <img src="assets/images/login/02.png" class="lb-img" alt="">
            <img src="assets/images/login/03.png" class="rb-img" alt="">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-lg-0 mb-4 mt-lg-0 mt-4">
                                <img src="assets/images/login/01.png" class="img-fluid w-80" alt="">
                            </div>
                            <div class="col-lg-6">
                                <h2 class="mb-2">Sign In</h2>

                                <form id="signInForm" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="email" name="email">
                                                <label>Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="password"
                                                name="password">
                                                <label>Password</label>
                                            </div>
                                        </div>
                                        <input type="hidden" name="signInForm" value="1">
                                        <div class="col-lg-6">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="auth-recoverpw.html" class="text-primary float-right">Forgot
                                                Password?</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign In</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>

$(function () {
    $('#signInForm').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'code.php',
            data: $('#signInForm').serialize(),
            success: function (val) {
                console.log(val);
                if (val == "0" || val == "") {
                    alert("Error");
                } else {
                    if (val == "Admin") {
                        setTimeout(function () {
                            location.replace('admin_dashboard/index.php');
                        }, 500);
                    } else {
                        setTimeout(function () {
                            location.replace('user_dashboard/index.php');
                        }, 500);
                    }



                }
            }
        });

    });
})
</script>
    <!-- Backend Bundle JavaScript -->
    <script src="assets/js/backend-bundle.min.js"></script>

    <!-- Flextree Javascript-->
    <script src="assets/js/flex-tree.min.js"></script>
    <script src="assets/js/tree.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="assets/js/table-treeview.js"></script>

    <!-- Masonary Gallery Javascript -->
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- Mapbox Javascript -->
    <script src="assets/js/mapbox-gl.js"></script>
    <script src="assets/js/mapbox.js"></script>

    <!-- Fullcalender Javascript -->
    <script src='assets/vendor/fullcalendar/core/main.js'></script>
    <script src='assets/vendor/fullcalendar/daygrid/main.js'></script>
    <script src='assets/vendor/fullcalendar/timegrid/main.js'></script>
    <script src='assets/vendor/fullcalendar/list/main.js'></script>

    <!-- SweetAlert JavaScript -->
    <script src="assets/js/sweetalert.js"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="assets/js/vector-map-custom.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="assets/js/chart-custom.js"></script>

    <!-- slider JavaScript -->
    <script src="assets/js/slider.js"></script>

    <!-- app JavaScript -->
    <script src="assets/js/app.js"></script>
</body>

</html>

