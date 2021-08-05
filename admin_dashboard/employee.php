<?php 
session_start();
if (!isset($_SESSION['admin_loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?>
<head>
<title> WorkWox | Employee
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
                            <div class="col-sm-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title">Add Employee</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul id="top-tabbar-vertical" class="p-0">
                                                    <li class="active" id="personal">
                                                        <a href="javascript:void();">
                                                            <i
                                                                class="ri-lock-unlock-line text-primary"  onclick="show2()"></i><span>Personal</span>
                                                        </a>
                                                    </li>
                                                    <li id="contact">
                                                        <a href="javascript:void();">
                                                            <i class="ri-user-fill text-danger" onclick="show1()"></i><span>Contact</span>
                                                        </a>
                                                    </li>
                                                    <li id="official">
                                                        <a href="javascript:void();">
                                                            <i
                                                                class="ri-camera-fill text-success"></i><span>Official</span>
                                                        </a>
                                                    </li>
                                                    <li id="payment">
                                                        <a href="javascript:void();">
                                                            <i class="ri-check-fill text-warning"></i><span>Bank
                                                                Details</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-9">
                                                <form id="form-wizard3" class="text-center">
                                                    <!-- fieldsets -->
                                                    <fieldset>
                                                        <div class="form-card text-left" id="personal_information">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h3 class="mb-4">Personal Information:</h3>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="fname">First Name: *</label>
                                                                        <input type="text" class="form-control"
                                                                            id="fname" name="fname"
                                                                            placeholder="First Name"
                                                                            required="required" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="lname">Last Name: *</label>
                                                                        <input type="text" class="form-control"
                                                                            id="lname" name="lname"
                                                                            placeholder="Last Name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Gender: *</label>
                                                                        <div class="form-check">
                                                                            <div
                                                                                class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="customRadio1"
                                                                                    name="customRadio"
                                                                                    class="custom-control-input">
                                                                                <label class="custom-control-label"
                                                                                    for="customRadio1"> Male</label>
                                                                            </div>
                                                                            <div
                                                                                class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="customRadio2"
                                                                                    name="customRadio"
                                                                                    class="custom-control-input">
                                                                                <label class="custom-control-label"
                                                                                    for="customRadio2"> Female</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="dob">Date Of Birth: *</label>
                                                                        <input type="date" class="form-control" id="dob"
                                                                            name="dob" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button id="submit" type="button" name="next"
                                                            class="btn btn-success next action-button float-right"
                                                            value="Next">Next</button>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="form-card text-left" id="contact_information">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h3 class="mb-4">Contact Information:</h3>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="email">Email Id: *</label>
                                                                        <input type="email" class="form-control"
                                                                            id="email" name="email"
                                                                            placeholder="Email Id" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="ccno">Contact Number: *</label>
                                                                        <input type="text" class="form-control"
                                                                            id="ccno" name="ccno"
                                                                            placeholder="Contact Number" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="city">City: *</label>
                                                                        <input type="text" class="form-control"
                                                                            id="city" name="city" placeholder="City." />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="state">State: *</label>
                                                                        <input type="text" class="form-control"
                                                                            id="state" name="state"
                                                                            placeholder="State." />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" name="next"
                                                            class="btn btn-success next action-button float-right"
                                                            value="Next">Next</button>
                                                        <button type="button" name="previous"
                                                            class="btn btn-dark previous action-button-previous float-right mr-3"
                                                            value="Previous">Previous</button>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="form-card text-left" id="official_information">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h3 class="mb-4">Official Information:</h3>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="empid">Employee Id: *</label>
                                                                        <input type="email" class="form-control"
                                                                            id="empid" name="empid"
                                                                            placeholder="Employee Id." />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="desg">Designation: *</label>
                                                                        <input type="text" class="form-control"
                                                                            id="desg" name="desg"
                                                                            placeholder="Designation." />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="accname">Department Name: *</label>
                                                                        <input type="text" class="form-control"
                                                                            id="accname" name="accname"
                                                                            placeholder="Department Name." />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="workhour">Join Date *</label>
                                                                        <input type="date" class="form-control"
                                                                            id="workhour" name="workhour"
                                                                            placeholder="Working Hour." />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" name="next"
                                                            class="btn btn-success next action-button float-right"
                                                            value="Submit">Next</button>
                                                        <button type="button" name="previous"
                                                            class="btn btn-dark previous action-button-previous float-right mr-3"
                                                            value="Previous">Previous</button>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="form-card text-left" id="bank_detail">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h3 class="mb-4 text-left">Bank Details:</h3>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="panno">Pan No: *</label>
                                                                        <input type="text" class="form-control"
                                                                            id="panno" name="panno"
                                                                            placeholder="Pan No." />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="accno">Account No: *</label>
                                                                        <input type="text" class="form-control"
                                                                            id="accno" name="accno"
                                                                            placeholder="Account No." />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="holname">Account Holder Name:
                                                                            *</label>
                                                                        <input type="text" class="form-control"
                                                                            id="holname" name="accname"
                                                                            placeholder="Account Holder Name." />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="ifsc">IFSC Code: *</label>
                                                                        <input type="text" class="form-control"
                                                                            id="ifsc" name="ifsc"
                                                                            placeholder="IFSC Code." />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="btn btn-success action-button float-right"
                                                            href="form-wizard-vertical.html">Submit</a>
                                                        <button type="button" name="previous"
                                                            class="btn btn-dark previous action-button-previous float-right mr-3"
                                                            value="Previous">Previous</button>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title">Employee List </h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="row justify-content-between">
                                                <div class="col-sm-4 col-md-4">
                                                    <div id="user_list_datatable_info" class="dataTables_filter">
                                                        <form class="mr-3 position-relative">
                                                            <div class="form-group mb-0">
                                                                <input type="search" class="form-control"
                                                                    id="exampleInputSearch" placeholder="Search"
                                                                    aria-controls="user-list-table">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
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
                                            <table id="user-list-table" class="table table-striped table-bordered mt-4"
                                                role="grid" aria-describedby="user-list-page-info">
                                                <thead>
                                                    <tr>
                                                        <th>Profile</th>
                                                        <th>Name</th>
                                                        <th>Contact</th>
                                                        <th>Email</th>
                                                        <th>City</th>
                                                        <th>Designation</th>
                                                        <th>Join Date</th>
                                                        <th style="min-width: 100px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/01.jpg" alt="profile"></td>
                                                        <td>Asad Ullah</td>
                                                        <td>03360656688</td>
                                                        <td><a class="__cf_email__"
                                                                >asad@workwox.com</a>
                                                        </td>
                                                        <td>Sahiwal</td>
                                                        <td><span class="badge iq-bg-primary">Web Designer</span></td>
                                                        <td>2020/11/05</td>
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                                <a class="iq-bg-primary" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="View" href="user_profile.php">
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
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/10.jpg" alt="profile"></td>
                                                        <td>Usman </td>
                                                        <td>03202125566</td>
                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="2d4c43434c5e5945485e444c6d4a404c4441034e4240">usman@workwox.com</a>
                                                        </td>
                                                        <td>Sahiwal</td>
                                                        <td><span class="badge iq-bg-primary">Web Developer</span></td>
                                                        <td>2021/02/01</td>
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                                <a class="iq-bg-primary" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="View" href="user_profile.php">
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
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/04.jpg" alt="profile"></td>
                                                        <td>Jamal</td>
                                                        <td>0310 5156688</td>
                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="2d4c43434c5e5945485e444c6d4a404c4441034e4240">jamal@workwox.com</a>
                                                        </td>
                                                        <td>Sahiwal</td>
                                                        <td><span class="badge iq-bg-primary">Web Developer</span></td>
                                                        <td>2021/02/15</td>
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                                <a class="iq-bg-primary" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="View" href="user_profile.php">
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
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/06.jpg" alt="profile"></td>
                                                        <td>Salman</td>
                                                        <td>03003566452</td>
                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="2d4c43434c5e5945485e444c6d4a404c4441034e4240">salman@workwox.com</a>
                                                        </td>
                                                        <td>Sahiwal</td>
                                                        <td><span class="badge iq-bg-primary">Website Developer</span>
                                                        </td>
                                                        <td>2021/01/05</td>
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                                <a class="iq-bg-primary" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="View" href="user_profile.php">
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
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/10.jpg" alt="profile"></td>
                                                        <td>Usman </td>
                                                        <td>03012525685</td>
                                                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="2d4c43434c5e5945485e444c6d4a404c4441034e4240">usman@workwox.com</a>
                                                        </td>
                                                        <td>Sahiwal</td>
                                                        <td><span class="badge iq-bg-primary">Social Media
                                                                Marketer</span></td>
                                                        <td>2020/11/25</td>
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                                <a class="iq-bg-primary" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="View" href="user_profile.php">
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
                                                        <li class="page-item active"><a class="page-link" href="#">1</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
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
        <!-- Main-Body End -->

    </div>
    <!-- Wrapper End-->

    <!-- Footer Start -->
    <?php include '../components/admin_footer.php'; ?>
    <!-- Footer End -->
        <script type="text/javascript">
     function show1()
     {
        document.getElementById('contact_information').style.display = "block";
        document.getElementById('personal_information').style.display = "none";
   
     }
     function show2()
     {
         document.getElementById('personal_information').style.display = "block";
         document.getElementById('contact_information').style.display = "none";
   
     }
        
        </script>


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