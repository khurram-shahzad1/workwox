<?php 
session_start();
if (!isset($_SESSION['admin_loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?>
<head>
    <title> WorkWox | Leaves
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
            </div>
            <div class="tab-content" id="myTabContent-2">
                <div class="tab-pane fade show active" id="layout1" role="tabpanel" aria-labelledby="layout1-tab">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title">Employee Leaves </h4>
                                            
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <div class="row justify-content-between">
                                                <div class="col-sm-6 col-md-3 col-12 py-2">
                                                    <div class="border border-2 text-center p-3">
                                                        <h5>Total Presents</h5>
                                                        <h4>12/16</h4>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3 col-12 py-2">
                                                    <div class="border border-2 text-center p-3">
                                                        <h5>Planned Leaves</h5>
                                                        <h4>4 <span class="text-dark " style="font-size:small;"> Today
                                                            </span></h4>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-3 col-12 py-2">
                                                    <div class="border border-2 text-center p-3">
                                                        <h5>Unplanned Leaves</h5>
                                                        <h4>0 <span class="text-dark " style="font-size:small;"> Today
                                                            </span></h4>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-3 col-12 py-2">
                                                    <div class="border border-2 text-center p-3">
                                                        <h5>Pending Requests</h5>
                                                        <h4>2 <span class="text-dark " style="font-size:small;"> Today
                                                            </span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>





                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <div class="row justify-content-between">
                                                                <div class="col-sm-6 col-md-3 col-12 py-2">
                                                                    <div id="user_list_datatable_info"
                                                                        class="dataTables_filter">
                                                                        <form class="mr-3 position-relative">
                                                                            <div class="form-group mb-0">
                                                                                <input type="search"
                                                                                    class="form-control"
                                                                                    id="exampleInputSearch"
                                                                                    placeholder=" Employee Name"
                                                                                    aria-controls="user-list-table">
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-md-3 col-12 py-2">
                                                                    <div class="form-group">

                                                                        <select class="form-control form-control-md">
                                                                            <option selected="">Leave Type</option>
                                                                            <option value="1">Casual Leave</option>
                                                                            <option value="2">Medical Leave</option>
                                                                           
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-3 col-12 py-2">
                                                                    <div class="form-group">

                                                                    <select class="form-control form-control-md">
                                                                            <option selected="">Leave Status</option>
                                                                            <option value="1">Pending</option>
                                                                            <option value="2">Approved</option>
                                                                            <option value="3">Rejected</option>

                                                                           
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-3 col-12 py-2">
                                                                    <div id="user_list_datatable_info"
                                                                        class="dataTables_filter">
                                                                        <form class="mr-3 position-relative">
                                                                            <div class="form-group mb-0">
                                                                                <button type="button" name="next"
                                                                                    class="btn btn-success   w-100  py-2"
                                                                                    value="Next">Search
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <table id="user-list-table" class="table table-striped table-bordered mt-4"
                                                role="grid" aria-describedby="user-list-page-info">
                                                <thead>
                                                    <tr>
                                                        <th>Profile</th>
                                                        <th>Name</th>
                                                        <th>Leave Type</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>No. of Days</th>
                                                        <th>Reason</th>
                                                        <th>Status</th>

                                                        <th style="min-width: 100px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/01.jpg" alt="profile"></td>
                                                        <td>Asad Ullah</td>
                                                        <td>Casual</td>
                                                        <td>
                                                        27 March 2021
                                                        </td>
                                                        <td>
                                                        28 March 2021
                                                        </td>
                                                        <td>1 Day</td>
                                                        <td>I am not feeling Well.</td>
                                                        <td>
                                                        <div class="form-group">

                                                                        <select class="form-control form-control-md">
                                                                            <option selected="">Approved</option>
                                                                            <option value="1">Pending</option>
                                                                            <option value="2">Rejected</option>
                                                                           
                                                                        </select>
                                                                    </div>
                                                        </td>
                                                       
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                              
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
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/10.jpg" alt="profile"></td>
                                                        <td>Usman </td>
                                                        <td>Casual</td>
                                                        <td>
                                                        27 March 2021
                                                        </td>
                                                        <td>
                                                        28 March 2021
                                                        </td>
                                                        <td>1 Day</td>
                                                        <td>I am not feeling Well.</td>
                                                        <td>
                                                        <div class="form-group">

                                                                        <select class="form-control form-control-md">
                                                                            <option selected="">Approved</option>
                                                                            <option value="1">Pending</option>
                                                                            <option value="2">Rejected</option>
                                                                           
                                                                        </select>
                                                                    </div>
                                                        </td>
                                                       
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                              
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
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/04.jpg" alt="profile"></td>
                                                        <td>Jamal</td>
                                                        <td>Casual</td>
                                                        <td>
                                                        27 March 2021
                                                        </td>
                                                        <td>
                                                        28 March 2021
                                                        </td>
                                                        <td>1 Day</td>
                                                        <td>I am not feeling Well.</td>
                                                        <td>
                                                        <div class="form-group">

                                                                        <select class="form-control form-control-md">
                                                                            <option selected="">Approved</option>
                                                                            <option value="1">Pending</option>
                                                                            <option value="2">Rejected</option>
                                                                           
                                                                        </select>
                                                                    </div>
                                                        </td>
                                                       
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                              
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
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/06.jpg" alt="profile"></td>
                                                        <td>Salman</td>
                                                        <td>Casual</td>
                                                        <td>
                                                        27 March 2021
                                                        </td>
                                                        <td>
                                                        28 March 2021
                                                        </td>
                                                        <td>1 Day</td>
                                                        <td>I am not feeling Well.</td>
                                                        <td>
                                                        <div class="form-group">

                                                                        <select class="form-control form-control-md">
                                                                            <option selected="">Approved</option>
                                                                            <option value="1">Pending</option>
                                                                            <option value="2">Rejected</option>
                                                                           
                                                                        </select>
                                                                    </div>
                                                        </td>
                                                       
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                              
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
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/10.jpg" alt="profile"></td>
                                                        <td>Usman </td>
                                                        <td>Casual</td>
                                                        <td>
                                                        27 March 2021
                                                        </td>
                                                        <td>
                                                        28 March 2021
                                                        </td>
                                                        <td>1 Day</td>
                                                        <td>I am not feeling Well.</td>
                                                        <td>
                                                        <div class="form-group">

                                                                        <select class="form-control form-control-md">
                                                                            <option selected="">Approved</option>
                                                                            <option value="1">Pending</option>
                                                                            <option value="2">Rejected</option>
                                                                           
                                                                        </select>
                                                                    </div>
                                                        </td>
                                                       
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                              
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




                                                        <div class="row justify-content-between mt-3">
                                                            <div id="user-list-page-info" class="col-md-6">
                                                                <span>Showing 1 to 5 of 5 entries</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <nav aria-label="Page navigation example">
                                                                    <ul class="pagination justify-content-end mb-0">
                                                                        <li class="page-item disabled">
                                                                            <a class="page-link" href="#" tabindex="-1"
                                                                                aria-disabled="true">Previous</a>
                                                                        </li>
                                                                        <li class="page-item active"><a
                                                                                class="page-link" href="#">1</a>
                                                                        </li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">2</a></li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                href="#">3</a></li>
                                                                        <li class="page-item">
                                                                            <a class="page-link" href="#">Next</a>
                                                                        </li>
                                                                    </ul>
                                                                </nav>
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