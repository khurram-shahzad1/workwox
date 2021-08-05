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
        <div class="content-page salon2-content" style="border-radius:20px;">
            <div class="bg-nav-horizontal mt-0">
            </div>
            <div class="tab-content" id="myTabContent-2">
                <div class="tab-pane fade show active" id="layout1" role="tabpanel" aria-labelledby="layout1-tab">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body res-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-primary-light icon iq-icon-box mr-2 rounded">
                                                    <svg width="28" height="32" viewBox="0 0 28 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M27.25 10H0.75C0.335812 10 0 9.66419 0 9.25V7C0 5.34312 1.34312 4 3 4H6V0.75C6 0.335813 6.33581 0 6.75 0H9.25C9.66419 0 10 0.335813 10 0.75V4H18V0.75C18 0.335813 18.3358 0 18.75 0H21.25C21.6642 0 22 0.335813 22 0.75V4H25C26.6569 4 28 5.34312 28 7V9.25C28 9.66419 27.6642 10 27.25 10ZM0.75 12H27.25C27.6642 12 28 12.3358 28 12.75V29C28 30.6569 26.6569 32 25 32H3C1.34312 32 0 30.6569 0 29V12.75C0 12.3358 0.335812 12 0.75 12ZM21.581 17.9967L19.8204 16.2218C19.5287 15.9278 19.0539 15.9258 18.7598 16.2176L12.1325 22.7916L9.25875 19.8946C8.96706 19.6005 8.49212 19.5986 8.19806 19.8903L6.42325 21.6509C6.12919 21.9426 6.12725 22.4175 6.419 22.7116L11.5816 27.9159C11.8732 28.2099 12.3481 28.2119 12.6422 27.9201L21.5767 19.0573C21.8708 18.7656 21.8727 18.2907 21.581 17.9967Z"
                                                                fill="#4788ff" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="28" height="32" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div class="media-support-primary salon-2 ml-3">
                                                    <h5 class="text-primary">1000</h5>
                                                    <p class="mb-0">Tasks</p>
                                                </div>
                                            </div>
                                            <div class="media-support-amount ml-3">
                                                <div id="salon2-chart-02" class="chart-salon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body res-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-danger-light icon iq-icon-box mr-2 rounded">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M22 6C22 2.68625 19.3137 0 16 0C12.6862 0 10 2.68625 10 6C10 9.31375 12.6862 12 16 12C19.3137 12 22 9.31375 22 6ZM14.5994 15.0688C10.8912 12.7987 4.885 12.175 1.8625 12.0031C0.846875 11.9456 0 12.7194 0 13.6962V27.6213C0 28.5169 0.724375 29.2638 1.65562 29.3119C4.38438 29.455 9.905 29.9794 13.7206 31.9013C14.3062 32.1963 15.0006 31.7944 15.0006 31.1594V15.785C15 15.4931 14.8556 15.2256 14.5994 15.0688ZM30.1375 12.0031C27.1156 12.1744 21.1088 12.7987 17.4013 15.0688C17.145 15.2256 17.0006 15.5037 17.0006 15.7956V31.1575C17.0006 31.7944 17.6969 32.1969 18.2844 31.9013C22.0994 29.9813 27.6169 29.4569 30.345 29.3137C31.2762 29.265 32.0006 28.5181 32.0006 27.6225V13.6962C32 12.7194 31.1531 11.9456 30.1375 12.0031Z"
                                                                fill="#FF4B4B" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip1">
                                                                <rect width="32" height="32" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div class="media-support-danger salon-2 ml-3 flex-1">
                                                    <h5 class="text-danger">1000</h5>
                                                    <p class="mb-0">Employees</p>
                                                </div>
                                            </div>
                                            <div class="media-support-amount ml-3">
                                                <div class="progress-round income-progress salon2-progress-danger mx-auto"
                                                    data-value="46">
                                                    <span class="progress-left">
                                                        <span class="progress-bar border-white"
                                                            style="transform: rotate(0deg);"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar border-danger"
                                                            style="transform: rotate(150deg);"></span>
                                                    </span>
                                                    <div
                                                        class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center text-center">
                                                        <div class="h4 mb-0">46</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body res-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-success-light icon iq-icon-box mr-2 rounded">
                                                    <svg width="24" height="32" viewBox="0 0 24 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M23.5625 6.5625L17.4438 0.4375C17.1625 0.15625 16.7812 0 16.3813 0H16V8H24V7.61875C24 7.225 23.8438 6.84375 23.5625 6.5625ZM14 8.5V0H1.5C0.66875 0 0 0.66875 0 1.5V30.5C0 31.3312 0.66875 32 1.5 32H22.5C23.3312 32 24 31.3312 24 30.5V10H15.5C14.675 10 14 9.325 14 8.5ZM4 4.5C4 4.22375 4.22375 4 4.5 4H9.5C9.77625 4 10 4.22375 10 4.5V5.5C10 5.77625 9.77625 6 9.5 6H4.5C4.22375 6 4 5.77625 4 5.5V4.5ZM4 9.5V8.5C4 8.22375 4.22375 8 4.5 8H9.5C9.77625 8 10 8.22375 10 8.5V9.5C10 9.77625 9.77625 10 9.5 10H4.5C4.22375 10 4 9.77625 4 9.5ZM13 25.9925V27.5C13 27.7763 12.7762 28 12.5 28H11.5C11.2238 28 11 27.7763 11 27.5V25.9819C10.2944 25.9456 9.60813 25.6994 9.03938 25.2725C8.79563 25.0894 8.78312 24.7244 9.00375 24.5138L9.73812 23.8131C9.91125 23.6481 10.1687 23.6406 10.3713 23.7675C10.6131 23.9188 10.8875 24 11.1725 24H12.9294C13.3356 24 13.6669 23.63 13.6669 23.1756C13.6669 22.8037 13.4412 22.4762 13.1187 22.38L10.3062 21.5362C9.14437 21.1875 8.3325 20.0725 8.3325 18.8244C8.3325 17.2919 9.52313 16.0469 10.9994 16.0075V14.5C10.9994 14.2238 11.2231 14 11.4994 14H12.4994C12.7756 14 12.9994 14.2238 12.9994 14.5V16.0181C13.705 16.0544 14.3912 16.3 14.96 16.7275C15.2037 16.9106 15.2162 17.2756 14.9956 17.4862L14.2612 18.1869C14.0881 18.3519 13.8306 18.3594 13.6281 18.2325C13.3863 18.0806 13.1119 18 12.8269 18H11.07C10.6637 18 10.3325 18.37 10.3325 18.8244C10.3325 19.1963 10.5581 19.5238 10.8806 19.62L13.6931 20.4638C14.855 20.8125 15.6669 21.9275 15.6669 23.1756C15.6669 24.7087 14.4762 25.9531 13 25.9925Z"
                                                            fill="#37E6B0" />
                                                    </svg>
                                                </div>
                                                <div class="media-support-success salon-2 ml-3">
                                                    <h5 class="text-success">150</h5>
                                                    <p class="mb-0">Salaries</p>
                                                </div>
                                            </div>
                                            <div class="media-support-amount ml-3">
                                                <div id="salon2-chart-03" class="chart-salon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body res-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-info-light icon iq-icon-box mr-2 rounded">
                                                    <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.8 11.2C6.565 11.2 8 9.76501 8 8.00001C8 6.23501 6.565 4.80001 4.8 4.80001C3.035 4.80001 1.6 6.23501 1.6 8.00001C1.6 9.76501 3.035 11.2 4.8 11.2ZM27.2 11.2C28.965 11.2 30.4 9.76501 30.4 8.00001C30.4 6.23501 28.965 4.80001 27.2 4.80001C25.435 4.80001 24 6.23501 24 8.00001C24 9.76501 25.435 11.2 27.2 11.2ZM28.8 12.8H25.6C24.72 12.8 23.925 13.155 23.345 13.73C25.36 14.835 26.79 16.83 27.1 19.2H30.4C31.285 19.2 32 18.485 32 17.6V16C32 14.235 30.565 12.8 28.8 12.8ZM16 12.8C19.095 12.8 21.6 10.295 21.6 7.20001C21.6 4.10501 19.095 1.60001 16 1.60001C12.905 1.60001 10.4 4.10501 10.4 7.20001C10.4 10.295 12.905 12.8 16 12.8ZM19.84 14.4H19.425C18.385 14.9 17.23 15.2 16 15.2C14.77 15.2 13.62 14.9 12.575 14.4H12.16C8.98 14.4 6.4 16.98 6.4 20.16V21.6C6.4 22.925 7.475 24 8.8 24H23.2C24.525 24 25.6 22.925 25.6 21.6V20.16C25.6 16.98 23.02 14.4 19.84 14.4ZM8.655 13.73C8.075 13.155 7.28 12.8 6.4 12.8H3.2C1.435 12.8 0 14.235 0 16V17.6C0 18.485 0.715 19.2 1.6 19.2H4.895C5.21 16.83 6.64 14.835 8.655 13.73Z"
                                                            fill="#876cfe" />
                                                    </svg>
                                                </div>
                                                <div class="media-support-info salon-2 ml-3">
                                                    <h5 class="text-info">100%</h5>
                                                    <p class="mb-0">Attendance</p>
                                                </div>
                                            </div>
                                            <div class="media-support-amount ml-3">
                                                <div id="salon2-chart-04" class="chart-salon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            
                        

                            <div class="col-xl-9 col-lg-6 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title">Task Summary</h4>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <a class="btn btn-sm btn-success" href="view_task.php">Task For Approval</a> 
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
                                                    <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
                                                    $conn = mysqli_connect("localhost", "root" , "", "workwox");
                                                        $sql = "SELECT * FROM assign_task";
                                                        $query = mysqli_query($conn, $sql);
                                                        while ($data = mysqli_fetch_array($query)) {
                                                            $status = $data['status'];
                                                            $user_id= $data['user_id'];
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
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4">
                                            <img src="../assets/images/user/01.jpg"
                                                class="img-fluid avatar-90 rounded-normal" alt="image">
                                            <div class="d-flex doc-social ml-4">
                                                <a href="#"><i
                                                        class="lab la-facebook-f text-primary font-size-20"></i></a>
                                                <a href="#"><i
                                                        class="lab la-twitter text-primary-dark font-size-20"></i></a>
                                                <a href="#"><i
                                                        class="lab la-instagram mr-2 text-danger font-size-20"></i></a>
                                            </div>
                                        </div>
                                        <h4 class="text-uppercase">Xyz</h4>
                                        <p class="font-size-16">Top Employee </p>
                                        <div class="d-flex align-items-center pt-3">
                                            <span class="bg-warning-light rounded-small iq-card-icon-small mr-3">
                                                <i class="las la-phone-volume"></i>
                                            </span>
                                            <h5>+92 300 0000005</h5>
                                        </div>
                                        <div class="d-flex align-items-center pt-3">
                                            <span class="bg-success-light rounded-small iq-card-icon-small mr-3">
                                                <i class="las la-envelope"></i>
                                            </span>
                                            <h5><a href="http://iqonic.design/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="52313a33203b211221333e3d3c7c313d3f">workwox@gmail.com</a>
                                            </h5>
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