<?php 
session_start();
if (!isset($_SESSION['user_loggedin'])) {
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
        <?php include '../components/user_nav.php'; ?>
        <!-- Navbar End -->

        <!-- Main-Body Start -->
        <div class="content-page salon2-content" style="border-radius:20px;">
            <div class="bg-nav-horizontal mt-0">
            </div>
            <div class="tab-content" id="myTabContent-2">
                <div class="tab-pane fade show active" id="layout1" role="tabpanel" aria-labelledby="layout1-tab">
                    <div class="container-fluid">
                        <div class="col-xl-12 col-lg-6 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Task Summary</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <button class="btn btn-sm btn-success">View All</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table data-table mb-0 table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Task Name</th>
                                                    <th scope="col">Assigned Date</th>
                                                    <th scope="col">DeadLine Date</th>
                                                    <th scope="col">Member</th>
                                                    <th scope="col">Actions</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                    $conn = mysqli_connect("localhost", "root" , "", "workwox");
                                                        $user_id=$_SESSION['user_id'];
                                                        $sql = "SELECT * FROM assign_task WHERE user_id = '$user_id' ";
                                                        $query = mysqli_query($conn, $sql);
                                                        while ($data = mysqli_fetch_array($query)) {
                                                            $status = $data['status'];
                                                        $sql_query_user = "SELECT * FROM user WHERE user_id='$user_id'";
                                                        $query_user = mysqli_query($conn, $sql_query_user);
                                                        while ($data_user = mysqli_fetch_array($query_user)) {?>
                                                        <tr>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <a href="javascript:void(0);"><img
                                                                    src="../assets/images/user/01.jpg"
                                                                    class="img-fluid avatar-40 rounded-normal"
                                                                    alt="image"></a>
                                                            <div class="media-body ml-3">
                                                                <span><?php echo $data_user['name'];?></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span><?php echo $data['task_name'];?></span>
                                                    </td>
                                                    <td>
                                                        <span><?php echo $data['task_assigndate'];?></span>
                                                    </td>
                                                    <td>
                                                        <span><?php echo $data['task_deadlinedate'];?></span>
                                                    </td>
                                                    <td>
                                                        <span><?php echo $data_user['user_type'];?></span>
                                                    </td>
                                                    <td>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Task" href="view_task.php?task_id=<?php echo $data['task_id']; ?>"><i class="ri-eye-line bg-success"></i></a>
 
                                                    </td>
                                                    <td> <?php if($status == 1){ ?>
                                                        <span class="badge bg-info">Submited</span>
                                                        <?php
                                                        } else if($status == 0){ ?>
                                                        <span class="badge bg-warning">pending</span>
                                                        <?php
                                                        } else if($status == 2){ ?>
                                                        <span class="badge bg-danger">Rejected</span>
                                                        <?php
                                                        }
                                                        else{ ?>
                                                        <span class="badge bg-success">Completed</span>
                                                        <?php
                                                        } ?>
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                            }
                                            ?>

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
    <!-- Main-Body End -->

    </div>
    <!-- Wrapper End-->

    <!-- Footer Start -->
    <?php include '../components/user_footer.php'; ?>
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