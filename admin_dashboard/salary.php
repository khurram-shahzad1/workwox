<?php 
session_start();
if (!isset($_SESSION['admin_loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?>
<head>
<title> WorkWox | Salary
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
        <div class="content-page salon2-content" style="border-radius:20px;">
            <div class="bg-nav-horizontal mt-0">
            </div>
            <div class="tab-content" id="myTabContent-2">
                <div class="tab-pane fade show active" id="layout1" role="tabpanel" aria-labelledby="layout1-tab">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title">Employee Atendance </h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="row justify-content-between">
                                                <div class="col-sm-6 col-md-3 col-12 py-2">
                                                    <div id="user_list_datatable_info" class="dataTables_filter">
                                                        <form class="mr-3 position-relative">
                                                            <div class="form-group mb-0">
                                                                <input type="search" class="form-control"
                                                                    id="exampleInputSearch"
                                                                    placeholder="Search Employee Name"
                                                                    aria-controls="user-list-table">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>


                                                <div class="col-sm-6 col-md-3 col-12 py-2">
                                                    <div id="user_list_datatable_info" class="dataTables_filter">
                                                        <form class="mr-3 position-relative">
                                                            <div class="form-group mb-0">
                                                                <button type="button" name="next"
                                                                    class="btn btn-success next action-button  w-100  py-2"
                                                                    value="Next">Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <table id="user-list-table"
                                                    class="table table-striped table-bordered mt-4" role="grid"
                                                    aria-describedby="user-list-page-info">
                                                    <thead>
                                                        <tr>
                                                            <th>Profile</th>
                                                            <th>Name</th>
                                                            <th>Employee Id</th>
                                                            <th>Email</th>
                                                            <th>Join Date</th>
                                                            <th>Designation</th>
                                                            <th>Payslip</th>
                                                            <th>Salary</th>
                                                            <th style="min-width: 100px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center"><img
                                                                    class="rounded img-fluid avatar-40"
                                                                    src="../assets/images/user/01.jpg" alt="profile">
                                                            </td>
                                                            <td>Asad Ullah</td>
                                                            <td>asad4395</td>

                                                            <td><a href="/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="2d4c43434c5e5945485e444c6d4a404c4441034e4240">asad@workwox.com</a>
                                                            </td>
                                                            <td>2020/11/05</td>

                                                            <td><span class="badge iq-bg-primary">Web Designer</span>
                                                            </td>
                                                            <td>
                                                                <a href="pay_slip.php"
                                                                    class="btn btn-warning text-white  w-75  "
                                                                    value="generate_slip">Generate Slip
                                                                </a>

                                                            </td>
                                                            <td>$3000</td>

                                                            <td>
                                                                <div class="flex align-items-center list-user-action">
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="View"
                                                                        href="user_profile.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Edit" href="#"><i
                                                                            class="ri-pencil-line"></i></a>
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Delete" href="#"><i
                                                                            class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><img
                                                                    class="rounded img-fluid avatar-40"
                                                                    src="../assets/images/user/10.jpg" alt="profile">
                                                            </td>
                                                            <td>Usman </td>
                                                            <td>usman5556</td>

                                                            <td><a href="/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="2d4c43434c5e5945485e444c6d4a404c4441034e4240">usman@workwox.com</a>
                                                            </td>
                                                            <td>2020/11/25</td>

                                                            <td><span class="badge iq-bg-primary">Web Developer</span>
                                                            </td>
                                                            <td>
                                                                <a href="pay_slip.php"
                                                                    class="btn btn-warning text-white  w-75  "
                                                                    value="generate_slip">Generate Slip
                                                                </a>

                                                            </td>
                                                            <td>$5000</td>

                                                            <td>
                                                                <div class="flex align-items-center list-user-action">
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="View"
                                                                        href="user_profile.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Edit" href="#"><i
                                                                            class="ri-pencil-line"></i></a>
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Delete" href="#"><i
                                                                            class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><img
                                                                    class="rounded img-fluid avatar-40"
                                                                    src="../assets/images/user/04.jpg" alt="profile">
                                                            </td>
                                                            <td>Jamal</td>
                                                            <td>asad4395</td>

                                                            <td><a href="/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="2d4c43434c5e5945485e444c6d4a404c4441034e4240">asad@workwox.com</a>
                                                            </td>
                                                            <td>2020/11/05</td>

                                                            <td><span class="badge iq-bg-primary">Web Designer</span>
                                                            </td>
                                                            <td>
                                                                <a href="pay_slip.php"
                                                                    class="btn btn-warning text-white  w-75  "
                                                                    value="generate_slip">Generate Slip
                                                                </a>

                                                            </td>
                                                            <td>$3000</td>

                                                            <td>
                                                                <div class="flex align-items-center list-user-action">
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="View"
                                                                        href="user_profile.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Edit" href="#"><i
                                                                            class="ri-pencil-line"></i></a>
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Delete" href="#"><i
                                                                            class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><img
                                                                    class="rounded img-fluid avatar-40"
                                                                    src="../assets/images/user/06.jpg" alt="profile">
                                                            </td>
                                                            <td>Salman</td>
                                                            <td>asad4395</td>

                                                            <td><a href="/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="2d4c43434c5e5945485e444c6d4a404c4441034e4240">asad@workwox.com</a>
                                                            </td>
                                                            <td>2020/11/05</td>

                                                            <td><span class="badge iq-bg-primary">Web Designer</span>
                                                            </td>
                                                            <td>
                                                                <a href="pay_slip.php"
                                                                    class="btn btn-warning text-white  w-75  "
                                                                    value="generate_slip">Generate Slip
                                                                </a>

                                                            </td>
                                                            <td>$3000</td>

                                                            <td>
                                                                <div class="flex align-items-center list-user-action">
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="View"
                                                                        href="user_profile.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Edit" href="#"><i
                                                                            class="ri-pencil-line"></i></a>
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Delete" href="#"><i
                                                                            class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"><img
                                                                    class="rounded img-fluid avatar-40"
                                                                    src="../assets/images/user/10.jpg" alt="profile">
                                                            </td>
                                                            <td>Usman </td>
                                                            <td>asad4395</td>

                                                            <td><a href="/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="2d4c43434c5e5945485e444c6d4a404c4441034e4240">asad@workwox.com</a>
                                                            </td>
                                                            <td>2020/11/05</td>

                                                            <td><span class="badge iq-bg-primary">Web Designer</span>
                                                            </td>
                                                            <td>
                                                                <a href="pay_slip.php"
                                                                    class="btn btn-warning text-white  w-75  "
                                                                    value="generate_slip">Generate Slip
                                                                </a>

                                                            </td>
                                                            <td>$3000</td>
                                                            <td>
                                                                <div class="flex align-items-center list-user-action">
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="View"
                                                                        href="user_profile.php">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Edit" href="#"><i
                                                                            class="ri-pencil-line"></i></a>
                                                                    <a class="iq-bg-primary" data-toggle="tooltip"
                                                                        data-placement="top" title=""
                                                                        data-original-title="Delete" href="#"><i
                                                                            class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
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