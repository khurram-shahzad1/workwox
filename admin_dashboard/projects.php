<?php 
session_start();
if (!isset($_SESSION['admin_loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?>
<head>
    <title> WorkWox | Projects
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
                                            <h4 class="card-title">Projects </h4>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row py-2 justify-content-between">
                                                            <div class="col-sm-6 col-md-3 col-12 py-2">
                                                                <div class="form-group">
                                                                    <form class="mr-3 position-relative">
                                                                        <div class="form-group mb-0">
                                                                            <input type="search" class="form-control"
                                                                                id="exampleInputSearch"
                                                                                placeholder=" Client Name"
                                                                                aria-controls="user-list-table">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-md-3 col-12 py-2">
                                                                <div class="form-group">
                                                                    <form class="mr-3 position-relative">
                                                                        <div class="form-group mb-0">
                                                                            <input type="search" class="form-control"
                                                                                id="exampleInputSearch"
                                                                                placeholder=" Project Name"
                                                                                aria-controls="user-list-table">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-md-3 col-12 py-2">
                                                                <div class="form-group">

                                                                    <select class="form-control form-control-md">
                                                                        <option selected="">Project Type</option>
                                                                        <option value="1">Web Development</option>
                                                                        <option value="2">Mobile Development
                                                                        </option>

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
                                                        <!-- <div class="row p-2">
                                                            <div
                                                                class="col-lg-3 col-md-6 col-sm-12 col-12 border border-3 rounded p-2 mb-3">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="project-title"><a
                                                                                href="/orange/projectview"
                                                                                class="">Office Management</a>
                                                                        </h4>
                                                                        <div class="py-2">
                                                                            <small class="block "><span
                                                                                    class="text-xs">1</span> <span
                                                                                    class="text-muted">open tasks,
                                                                                </span>
                                                                                <span class="text-xs">9</span> <span
                                                                                    class="text-muted">tasks
                                                                                    completed</span></small>
                                                                        </div>
                                                                        <p class="text-muted">Lorem Ipsum is simply
                                                                            dummy text of the ilms.
                                                                            <div class="pro-deadline ">
                                                                                <h4>
                                                                                    Deadline:
                                                                                </h4>
                                                                                <div class="text-muted py-2">
                                                                                    17 Apr 2021
                                                                                </div>
                                                                            </div>
                                                                            <div class="project-members py-2 ">
                                                                                <h4>Project Leader :</h4>
                                                                                <ul class="team-members">

                                                                                   <Div class="py-3"><img
                                                                                            class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/06.jpg"
                                                                                            alt="profile">
                                                                                    </div>
                                                                                    <h4>Asad</h4>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="project-members ">
                                                                                <h4> Team :
                                                                                </h4>
                                                                                <ul class="team-members">
                                                                                    <li class="py-2"><img
                                                                                            class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/04.jpg"
                                                                                            alt="profile">
                                                                                    </li>
                                                                                    <li class="py-2"><img
                                                                                            class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/04.jpg"
                                                                                            alt="profile">
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <p class="m-b-5">Progress <span
                                                                                    class="text-success float-right">90%</span>
                                                                            </p>
                                                                            <div class="progress progress-xs mb-0">
                                                                                <div role="progressbar"
                                                                                    data-toggle="tooltip" title="90%"
                                                                                    class="progress-bar bg-success"
                                                                                    style="width: 90%;"></div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div
                                                                class="col-lg-3 col-md-6 col-sm-12 col-12 border border-3 rounded p-2 mb-3">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="project-title"><a
                                                                                href="/orange/projectview"
                                                                                class="">Office Management</a>
                                                                        </h4>
                                                                        <div class="py-2">
                                                                            <small class="block "><span
                                                                                    class="text-xs">1</span> <span
                                                                                    class="text-muted">open tasks,
                                                                                </span>
                                                                                <span class="text-xs">9</span> <span
                                                                                    class="text-muted">tasks
                                                                                    completed</span></small>
                                                                        </div>
                                                                        <p class="text-muted">Lorem Ipsum is simply
                                                                            dummy text of the ilms.
                                                                        </p>
                                                                        <div class="pro-deadline ">
                                                                            <h4>
                                                                                Deadline:
                                                                            </h4>
                                                                            <div class="text-muted py-2">
                                                                                17 Apr 2021
                                                                            </div>
                                                                        </div>
                                                                        <div class="project-members py-3 ">
                                                                            <h4>Project Leader :</h4>
                                                                            <ul class="team-members">
                                                                                <li class="py-2"><img
                                                                                        class="rounded img-fluid avatar-40"
                                                                                        src="../assets/images/user/06.jpg"
                                                                                        alt="profile">
                                                                                </li>
                                                                                <h2>Usman</h2>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="project-members ">
                                                                            <h4> Team :
                                                                            </h4>
                                                                            <ul class="team-members">
                                                                                <li class="py-2"><img
                                                                                        class="rounded img-fluid avatar-40"
                                                                                        src="../assets/images/user/04.jpg"
                                                                                        alt="profile">
                                                                                </li>
                                                                                <li class="py-2"><img
                                                                                        class="rounded img-fluid avatar-40"
                                                                                        src="../assets/images/user/04.jpg"
                                                                                        alt="profile">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <p class="m-b-5">Progress <span
                                                                                class="text-success float-right">80%</span>
                                                                        </p>
                                                                        <div class="progress progress-xs mb-0">
                                                                            <div role="progressbar"
                                                                                data-toggle="tooltip" title="80%"
                                                                                class="progress-bar bg-success"
                                                                                style="width: 80%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div
                                                                class="col-lg-3 col-md-6 col-sm-12 col-12 border border-3 rounded p-2 mb-3">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="project-title"><a
                                                                                href="/orange/projectview"
                                                                                class="">Office Management</a>
                                                                        </h4>
                                                                        <div class="py-2">
                                                                            <small class="block "><span
                                                                                    class="text-xs">1</span> <span
                                                                                    class="text-muted">open tasks,
                                                                                </span>
                                                                                <span class="text-xs">9</span> <span
                                                                                    class="text-muted">tasks
                                                                                    completed</span></small>

                                                                        </div>

                                                                        <p class="text-muted">Lorem Ipsum is simply
                                                                            dummy text of the ilms.
                                                                        </p>
                                                                        <div class="pro-deadline ">
                                                                            <h4>
                                                                                Deadline:

                                                                            </h4>


                                                                            <div class="text-muted py-2">
                                                                                17 Apr 2021
                                                                            </div>
                                                                        </div>
                                                                        <div class="project-members py-2 ">
                                                                            <h4>Project Leader :</h4>
                                                                            <ul class="team-members">
                                                                               <div  class="py-2">
                                                                               <img
                                                                                        class="rounded img-fluid avatar-40"
                                                                                        src="../assets/images/user/06.jpg"
                                                                                        alt="profile">
                                                                                        

                                                                               </div>
                                                                               <div>
                                                                               <h4>Bilal</div>
                                                                          

                                                                            </ul>
                                                                        </div>
                                                                        <div class="project-members ">
                                                                            <h4> Team :
                                                                            </h4>
                                                                            <ul class="team-members">
                                                                                <li class="py-2"><img
                                                                                        class="rounded img-fluid avatar-40"
                                                                                        src="../assets/images/user/04.jpg"
                                                                                        alt="profile">

                                                                                </li>
                                                                                <li class="py-2"><img
                                                                                        class="rounded img-fluid avatar-40"
                                                                                        src="../assets/images/user/04.jpg"
                                                                                        alt="profile">
                                                                                </li>



                                                                            </ul>
                                                                        </div>
                                                                        <p class="m-b-5">Progress <span
                                                                                class="text-success float-right">70%</span>
                                                                        </p>
                                                                        <div class="progress progress-xs mb-0">
                                                                            <div role="progressbar"
                                                                                data-toggle="tooltip" title="70%"
                                                                                class="progress-bar bg-success"
                                                                                style="width: 70%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        Project

                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Office Management
                                                                        </h4>
                                                                        <div class="py-2">
                                                                            <small class="block "><span
                                                                                    class="text-xs">1</span> <span
                                                                                    class="text-muted">open tasks,
                                                                                </span>
                                                                                <span class="text-xs">9</span> <span
                                                                                    class="text-muted">tasks
                                                                                    completed</span></small>

                                                                        </div>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>
                                                                        <div class="pro-deadline ">
                                                                            <h4>
                                                                                Deadline:

                                                                            </h4>


                                                                            <div class="text-muted py-2">
                                                                                17 Apr 2021
                                                                            </div>
                                                                        </div>
                                                                        <div class="project-members py-2 ">
                                                                            <h4>Project Leader :</h4>
                                                                            <ul class="team-members list-unstyled d-flex">
                                                                                <li>
                                                                                    <div class="py-2 px-0">
                                                                                        <img class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/06.jpg"
                                                                                            alt="profile">


                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="py-3 ml-2">
                                                                                        <span><b>Bilal</b></span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <div class="project-members ">
                                                                            <h4> Team :
                                                                            </h4>
                                                                            <ul class="team-members list-unstyled d-flex">
                                                                                <li>
                                                                                    <div class="py-2 px-0">
                                                                                        <img class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/10.jpg"
                                                                                            alt="profile">


                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="py-3 ml-2">
                                                                                        <span><b>Jimmmi ch</b></span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                               <ul class="team-members list-unstyled d-flex">
                                                                                <li>
                                                                                    <div class="py-1 px-0">
                                                                                        <img class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/07.jpg"
                                                                                            alt="profile">


                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="py-3 ml-2">
                                                                                        <span><b>Asad Ali</b></span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <p class="m-b-5">Progress <span
                                                                                class="text-success float-right">70%</span>
                                                                        </p>
                                                                        <div class="progress progress-xs mb-0">
                                                                            <div role="progressbar"
                                                                                data-toggle="tooltip" title="70%"
                                                                                class="progress-bar bg-success"
                                                                                style="width: 70%;"></div>
                                                                        </div>
                                                                        <!-- <a href="#" class="btn btn-primary">Go
                                                                            View Details</a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        Project

                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Office Management
                                                                        </h4>
                                                                        <div class="py-2">
                                                                            <small class="block "><span
                                                                                    class="text-xs">1</span> <span
                                                                                    class="text-muted">open tasks,
                                                                                </span>
                                                                                <span class="text-xs">9</span> <span
                                                                                    class="text-muted">tasks
                                                                                    completed</span></small>

                                                                        </div>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>
                                                                        <div class="pro-deadline ">
                                                                            <h4>
                                                                                Deadline:

                                                                            </h4>


                                                                            <div class="text-muted py-2">
                                                                                17 Apr 2021
                                                                            </div>
                                                                        </div>
                                                                        <div class="project-members py-2 ">
                                                                            <h4>Project Leader :</h4>
                                                                            <ul class="team-members list-unstyled d-flex">
                                                                                <li>
                                                                                    <div class="py-2 px-0">
                                                                                        <img class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/06.jpg"
                                                                                            alt="profile">


                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="py-3 ml-2">
                                                                                        <span><b>Bilal</b></span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <div class="project-members ">
                                                                            <h4> Team :
                                                                            </h4>
                                                                            <ul class="team-members list-unstyled d-flex">
                                                                                <li>
                                                                                    <div class="py-2 px-0">
                                                                                        <img class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/10.jpg"
                                                                                            alt="profile">


                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="py-3 ml-2">
                                                                                        <span><b>Jimmmi ch</b></span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                               <ul class="team-members list-unstyled d-flex">
                                                                                <li>
                                                                                    <div class="py-1 px-0">
                                                                                        <img class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/07.jpg"
                                                                                            alt="profile">


                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="py-3 ml-2">
                                                                                        <span><b>Asad Ali</b></span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <p class="m-b-5">Progress <span
                                                                                class="text-success float-right">70%</span>
                                                                        </p>
                                                                        <div class="progress progress-xs mb-0">
                                                                            <div role="progressbar"
                                                                                data-toggle="tooltip" title="70%"
                                                                                class="progress-bar bg-success"
                                                                                style="width: 70%;"></div>
                                                                        </div>
                                                                        <!-- <a href="#" class="btn btn-primary">Go
                                                                            View Details</a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        Project

                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Office Management
                                                                        </h4>
                                                                        <div class="py-2">
                                                                            <small class="block "><span
                                                                                    class="text-xs">1</span> <span
                                                                                    class="text-muted">open tasks,
                                                                                </span>
                                                                                <span class="text-xs">9</span> <span
                                                                                    class="text-muted">tasks
                                                                                    completed</span></small>

                                                                        </div>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>
                                                                        <div class="pro-deadline ">
                                                                            <h4>
                                                                                Deadline:

                                                                            </h4>


                                                                            <div class="text-muted py-2">
                                                                                17 Apr 2021
                                                                            </div>
                                                                        </div>
                                                                        <div class="project-members py-2 ">
                                                                            <h4>Project Leader :</h4>
                                                                            <ul class="team-members list-unstyled d-flex">
                                                                                <li>
                                                                                    <div class="py-2 px-0">
                                                                                        <img class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/06.jpg"
                                                                                            alt="profile">


                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="py-3 ml-2">
                                                                                        <span><b>Bilal</b></span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <div class="project-members ">
                                                                            <h4> Team :
                                                                            </h4>
                                                                            <ul class="team-members list-unstyled d-flex">
                                                                                <li>
                                                                                    <div class="py-2 px-0">
                                                                                        <img class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/10.jpg"
                                                                                            alt="profile">


                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="py-3 ml-2">
                                                                                        <span><b>Jimmmi ch</b></span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                               <ul class="team-members list-unstyled d-flex">
                                                                                <li>
                                                                                    <div class="py-1 px-0">
                                                                                        <img class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/07.jpg"
                                                                                            alt="profile">


                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="py-3 ml-2">
                                                                                        <span><b>Asad Ali</b></span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <p class="m-b-5">Progress <span
                                                                                class="text-success float-right">70%</span>
                                                                        </p>
                                                                        <div class="progress progress-xs mb-0">
                                                                            <div role="progressbar"
                                                                                data-toggle="tooltip" title="70%"
                                                                                class="progress-bar bg-success"
                                                                                style="width: 70%;"></div>
                                                                        </div>
                                                                        <!-- <a href="#" class="btn btn-primary">Go
                                                                            View Details</a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        Project

                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Office Management
                                                                        </h4>
                                                                        <div class="py-2">
                                                                            <small class="block "><span
                                                                                    class="text-xs">1</span> <span
                                                                                    class="text-muted">open tasks,
                                                                                </span>
                                                                                <span class="text-xs">9</span> <span
                                                                                    class="text-muted">tasks
                                                                                    completed</span></small>

                                                                        </div>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>
                                                                        <div class="pro-deadline ">
                                                                            <h4>
                                                                                Deadline:

                                                                            </h4>


                                                                            <div class="text-muted py-2">
                                                                                17 Apr 2021
                                                                            </div>
                                                                        </div>
                                                                        <div class="project-members py-2 ">
                                                                            <h4>Project Leader :</h4>
                                                                            <ul class="team-members list-unstyled d-flex">
                                                                                <li>
                                                                                    <div class="py-2 px-0">
                                                                                        <img class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/06.jpg"
                                                                                            alt="profile">


                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="py-3 ml-2">
                                                                                        <span><b>Bilal</b></span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <div class="project-members ">
                                                                            <h4> Team :
                                                                            </h4>
                                                                            <ul class="team-members list-unstyled d-flex">
                                                                                <li>
                                                                                    <div class="py-2 px-0">
                                                                                        <img class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/10.jpg"
                                                                                            alt="profile">


                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="py-3 ml-2">
                                                                                        <span><b>Jimmmi ch</b></span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                               <ul class="team-members list-unstyled d-flex">
                                                                                <li>
                                                                                    <div class="py-1 px-0">
                                                                                        <img class="rounded img-fluid avatar-40"
                                                                                            src="../assets/images/user/07.jpg"
                                                                                            alt="profile">


                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="py-3 ml-2">
                                                                                        <span><b>Asad Ali</b></span>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <p class="m-b-5">Progress <span
                                                                                class="text-success float-right">70%</span>
                                                                        </p>
                                                                        <div class="progress progress-xs mb-0">
                                                                            <div role="progressbar"
                                                                                data-toggle="tooltip" title="70%"
                                                                                class="progress-bar bg-success"
                                                                                style="width: 70%;"></div>
                                                                        </div>
                                                                        <!-- <a href="#" class="btn btn-primary">Go
                                                                            View Details</a> -->
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