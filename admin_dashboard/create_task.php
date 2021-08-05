<?php 
session_start();
if (!isset($_SESSION['admin_loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?>
<head>
<title> WorkWox | Create Task
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
        <?php include '../components/admin_nav.php'; ?>
        <!-- Navbar End -->

        <!-- Main-Body Start -->
        <div class="content-page salon2-content  " style="border-radius:20px;">
            <div class="bg-nav-horizontal mt-0">
            <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">  
        </div>
    </div>
            </div>
            <div class="tab-content" id="myTabContent-2">
                <div class="tab-pane fade show active" id="layout1" role="tabpanel" aria-labelledby="layout1-tab">
                    <div class="container-fluid">
                        <div class="row  ">
                            <div class="col-sm-12 col-lg-6 w-100 m-auto rounded-full " >
                                <div class="iq-card shadow-lg py-5 mb-5  border border-2" style="border-radius:20px;">
                                    <div class="iq-card-header d-flex justify-content-center">
                                        <div class="iq-header-title">
                                            <h2 class="card-title  ">Create Task</h2>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <form id="form-wizard1" action="code.php" enctype="multipart/form-data" method="post" class="text-center mt-4">

                                            <!-- fieldsets -->
                                            <fieldset>
                                                <div class="row">

                                                    <div class="col-lg-1 col-0">

                                                    </div>
                                                    <div class="col-lg-10 col-12 text-left">


                                                        <div class="col-md-12 col-12">
                                                            <div class="form-group">
                                                                <label>Task Name </label>
                                                                <input type="text" class="form-control" name="task_name"
                                                                    placeholder="Task Name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12 pt- ">

                                                            <div class="form-group">
                                                                <label>Assigned to </label>
                                                                
                                                                <select class="custom-select" name="user_id" id="inputGroupSelect04">
                                                                <?php
                                                                $conn = mysqli_connect("localhost", "root" , "", "workwox");
                                                                $sql = "SELECT * FROM user WHERE user_type = 'Team'";
                                                                $query = mysqli_query($conn, $sql);
                                                                while ($data = mysqli_fetch_array($query)) {
                                                                ?>
  
                                                                <option value="<?php echo $data['user_id'];?>"><?php echo $data['name'];?></option>
   
                                                                <?php } ?>
                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="col-md-12 col-12 pt-">


                                                            <div class="form-group">
                                                                <label for="exampleInputdatetime">Deadline
                                                                </label>
                                                                <input type="date" class="form-control"
                                                                    id="exampleInputdatetime"
                                                                    name="task_deadlinedate">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-12 pt-2">

                                                            <div class="input-group pt-2">

                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Upload</span>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input"
                                                                        id="inputGroupFile01" name="file">
                                                                    <label class="custom-file-label"
                                                                        for="inputGroupFile01">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="col-md-12 col-12 pt-2">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlTextarea1"> Task
                                                                    Description</label>
                                                                <textarea class="form-control"
                                                                    id="exampleFormControlTextarea1" name="task_description" rows="3"
                                                                    placeholder="Write description what do you want."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <input type="submit" name="submit"
                                                                class="btn btn-success  w-25 mt-2 mb-5"
                                                               value="Submit" >
                                                            
                                                        </div>



                                                    </div>
                                                    <div class="col-lg-1 col-12 ">

                                                    </div>
                                                </div>






                                        

                                    </div>

                                    </fieldset>



                                    </form>
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