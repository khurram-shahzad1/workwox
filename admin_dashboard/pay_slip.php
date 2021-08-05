<?php 
session_start();
if (!isset($_SESSION['admin_loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?><!-- Main Header Start -->
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
        <?php include '../components/admin_nav.php'; ?>
        <!-- Navbar End -->

        <!-- Main-Body Start -->
        <div class="content-page salon2-content">
            <div class="bg-nav-horizontal mt-0">
            </div>
            <div class="tab-content" id="myTabContent-2">
                <div class="tab-pane fade show active" id="layout1" role="tabpanel" aria-labelledby="layout1-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title">Pay Slip </h4>
                                        </div>
                                        <div class="col-auto float-right ml-auto">
                                            <div class="user-list-files d-flex">
                                                <a class="bg-success" href="javascript:void();">
                                                    Print
                                                </a>
                                                <a class="bg-success" href="javascript:void();">
                                                    Excel
                                                </a>
                                                <a class="bg-success" href="javascript:void();">
                                                    Pdf
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-lg-3 "></div>
                                            <div class="col-lg-6">
                                                <h3 class="text-center ">
                                                    Payslip for the Month of March 2021
                                                </h3>
                                            </div>
                                            <div class="col-lg-3"></div>
                                        </div>
                                        <hr>
                                        <div class="row ">
                                            <div class="col-lg-6  ">
                                            </div>
                                            <div class="col-lg-6 col-12 pt-4 pr-5 ">
                                                <ul class="list-unstyled mb-0 float-right">
                                                    <h4>Payslip #49029</h4>
                                                    <li class="pt-2">Salary Month: March, 2021.</li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="row pl-5">
                                            <div class="col-lg-6 col-12">
                                                <img src="http://localhost/workwox_dashboard/assets/images/logo.png"
                                                    width="200" height="200" alt="">
                                                <ul class="list-unstyled mb-0 ">
                                                    <li>
                                                        <h5>Ghulam Mutafa</h5>
                                                    </li>
                                                    <li class="pt-2">Web Designer</li>
                                                    <li class="pt-2">Employee ID: FT-0009</li>
                                                    <li class="pt-2">Joining Date: 1 Jan 2013</li>
                                                    <li class="mt-3">
                                                        <h5>Address:</h5>
                                                    </li>
                                                    <li class="pt-2">PakPattan Chowk, Sahiwal</li>
                                                    <li class="pt-2">Sahiwal, Pakistan</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row my-5 px-5">
                                            <div class="col-lg-6 col-md-6  col-sm-6   col-xs-6 col-6">
                                                <div>
                                                    <h4 class="mb-3"><strong>Earnings</strong></h4>
                                                </div>

                                                <table id="user-list-table" class="table  table-bordered mt-4" 
                                                    >
                                                    
                                                    <tbody>
                                                        <tr>             
                                                            <td><h6>Basic Salary </h6></td>
                                                            <td>$5000</td>   
                                                        </tr>
                                                        <tr>
                                                            <td><h6>Bonuses </h6></td>
                                                            <td>$800</td> 
                                                        </tr>
                                                        <tr>     
                                                            <td><h6>Basic Salary </h6></td>
                                                            <td>$5000</td>  
                                                        </tr>
                                                        <tr>                                                          
                                                            <td > <h6>Basic Salary </h6></td>
                                                            <td>$5000</td>                                                         
                                                        </tr>
                                                        <tr>        
                                                            <td><h6>Total Salary </h6></td>
                                                            <td>$5000</td>     
                                                        </tr>
                                                    </tbody>
                                                </table>

                                               
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6  col-xs-6 col-6 ">
                                                <div class="">
                                                    <h4 class="mb-3"><strong>Deductions</strong></h4>
                                                </div>

                                                <table id="user-list-table"
                                                    class="table table-striped table-bordered mt-4" role="grid"
                                                    aria-describedby="user-list-page-info">
                                                    
                                                    <tbody>
                                                        <tr>
                                                           
                                                            <td><h6>Basic Salary </h6></td>
                                                            <td>$5000</td>

                                                            
                                                        </tr>
                                                        <tr>
                                                           
                                                            <td><h6>Leaves </h6></td>
                                                            <td>-$20</td>

                                                            
                                                        </tr>
                                                        <tr>
                                                           
                                                            <td><h6>Basic Salary </h6></td>
                                                            <td>$5000</td>

                                                            
                                                        </tr>
                                                        <tr>
                                                           
                                                            <td > <h6>Basic Salary </h6></td>
                                                            <td>$5000</td>

                                                            
                                                        </tr>
                                                        <tr>
                                                           
                                                            <td><h6>Total Salary </h6></td>
                                                            <td>$5000</td>

                                                            
                                                        </tr>
                                                       
                                                    </tbody>
                                                </table>

                                              
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
</body>

</html>