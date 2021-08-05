<?php 
session_start();
if (!isset($_SESSION['user_loggedin'])) {
	header('Location: ../index.php');
	exit;
}

$conn = mysqli_connect("localhost", "root" , "", "workwox");
$user_id=$_SESSION['user_id'];
$sql = "SELECT * FROM assign_task WHERE user_id = '$user_id' ";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);
$task_id = $_GET['task_id'];
?>

<head>
<title> WorkWox | Task
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
                                            <h4 class="card-title">Today's Task </h4>
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
                                                <?php echo $data['task_name'];?>
                                                </h3>
                                            </div>
                                            <div class="col-lg-3"></div>
                                        </div>
                                        <hr>

                                        <div class="row pl-2">
                                            <div class="col-lg-2">
                                            </div>

                                            <div class="  col-lg-8 col-12">
                                                <img src="http://localhost/workwox_dashboard/assets/images/logo.png"
                                                    width="200" height="200" alt="">

                                                <h4>Task Description</h4>
                                                <div class="py-5  float-left">
                                                    <span><?php echo $data['task_description'];?></span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <a class="btn btn-success text-dark mr-4" href="../admin_dashboard/task_files/<?php echo $data['task_file'];?>"> Download Task</a>



                                                  
                                                    </div>

                                                </div>

                                            </div>


                                            <div class="col-lg-2"></div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-content" id="myTabContent-2">
                <div class="tab-pane fade show active" id="layout1" role="tabpanel" aria-labelledby="layout1-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title">Upload Task </h4>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-lg-2 "></div>
                                            <div class="col-lg-8">
                                            <form  action="code.php" enctype="multipart/form-data" method="post" >
                                                <div class="input-group mb-4">

                                                    <div class="input-group-prepend">

                                                    </div>
                                                    

                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="file"
                                                            id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                           
                                                    </div>
                                                    <input type="hidden" name="task_id" value="<?php echo $task_id;?>" >
                                                               <div class="col-md-12 col-12 pt-2">
                                                            <div class="form-group">
                                                                <textarea class="form-control"
                                                                    id="exampleFormControlTextarea1" name="task_uploaded_description" rows="3"
                                                                    placeholder="Write about what you have done."></textarea>
                                                            </div>
                                                        </div>
                                                        <input type="submit" name="submit"
                                                                class="btn btn-success text-dark ml-2"
                                                               value="Submit Task" >
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-lg-2"></div>
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