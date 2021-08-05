<?php 
session_start();
if (!isset($_SESSION['admin_loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?>
<head>
<title> WorkWox | Attendance
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
                                            <h4 class="card-title">Punch In Record </h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">

                                            <table id="user-list-table" class="table table-striped table-bordered mt-4"
                                                role="grid" aria-describedby="user-list-page-info">
                                                <thead>
                                                    <tr>
                                                        <th>Profile</th>
                                                        <th>Name</th>
                                                        <th>Punch In Time</th>
                                                        <th>Punch Out Time</th>
                                                        <th>Approval</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $conn = mysqli_connect("localhost", "root" , "", "workwox");
                                                    $sql = "SELECT * FROM user_attendance WHERE attendance_status = '1' ";
                                                    $query = mysqli_query($conn, $sql);
                                                    while ($data = mysqli_fetch_array($query)) {
                                                    $punch_in_time = $data['punch_in_time'];
                                                    $punch_out_time = $data['punch_out_time'];
                                                    $sortpunch_in_time = date('h:i A', strtotime($punch_in_time));
                                                    $sortpunch_out_time = date('h:i A', strtotime($punch_out_time));
                                                    $user_id = $data['user_id'];
                                                    $sql_query_user = "SELECT * FROM user Where user_id='$user_id'";
                                                    $query_user = mysqli_query($conn, $sql_query_user);
                                                    while ($data_user = mysqli_fetch_array($query_user)) {?>
                                                    <tr>
                                                        <td><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/01.jpg" alt="profile"></td>
                                                        <td><?php echo $data_user['name'];?></td>
                                                        <td><?php echo $sortpunch_in_time;?></td>
                                                        <td><?php echo $sortpunch_out_time;?></td>
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                                <a class="iq-bg-primary pr-3 " href="code.php?approve_attendance_id=<?php echo $data['attendance_id'] ?>"  data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Approve Attendance" href="#"><i
                                                                        class="ri-check-line bg-success"></i></a>
                                                                <a class="iq-bg-primary " href="code.php?reject_attendance_id=<?php echo $data['attendance_id'] ?>" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Reject Attendance" href="#"><i
                                                                        class="ri-delete-bin-line bg-danger"></i></a>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                  


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row justify-content-between mt-3">
                                            <div id="user-list-page-info" class="col-md-6">
                                                <span>Showing 1 to 5 of 5 entries</span>
                                            </div>
                                            <div class="col-md-6 text-success">
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
                                                    <div class="form-group">

                                                        <select class="form-control form-control-md">
                                                            <option selected="">Select Month</option>
                                                            <option value="1">Jan</option>
                                                            <option value="2">Feb</option>
                                                            <option value="3">March</option>
                                                            <option value="1">Apr</option>
                                                            <option value="2">May</option>
                                                            <option value="3">June</option>
                                                            <option value="1">July</option>
                                                            <option value="2">August</option>
                                                            <option value="3">Sep</option>
                                                            <option value="1">Oct</option>
                                                            <option value="2">Nov</option>
                                                            <option value="3">Dec</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-3 col-12 py-2">
                                                    <div class="form-group">

                                                        <select class="form-control form-control-md">
                                                            <option selected="">Select Year</option>
                                                            <option value="1">2021</option>
                                                            <option value="2">2020</option>
                                                            <option value="3">2018</option>
                                                            <option value="3">2017</option>
                                                            <option value="3">2015</option>
                                                            <option value="3">2014</option>
                                                            <option value="3">2013</option>
                                                            <option value="3">2012</option>
                                                            <option value="3">2011</option>
                                                            <option value="3">2010</option>
                                                            <option value="3">2009</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-3 col-12 py-2">
                                                    <div id="user_list_datatable_info" class="dataTables_filter">
                                                        <form class="mr-3 position-relative">
                                                            <div class="form-group mb-0">
                                                                <button type="button" name="next"
                                                                    class="btn btn-success   w-100  py-2"
                                                                    value="Next">Submit
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
                                                        <th>1</th>
                                                        <th>2</th>
                                                        <th>3</th>
                                                        <th>4</th>
                                                        <th>5</th>
                                                        <th>6</th>
                                                        <th class="text-warning">7</th>
                                                        <th>8</th>
                                                        <th>9</th>
                                                        <th>10</th>
                                                        <th>11</th>
                                                        <th>12</th>
                                                        <th>13</th>
                                                        <th class="text-warning">14</th>
                                                        <th>15</th>
                                                        <th>16</th>
                                                        <th>17</th>
                                                        <th>18</th>
                                                        <th>19</th>
                                                        <th>20</th>
                                                        <th class="text-warning">21</th>
                                                        <th>22</th>
                                                        <th>23</th>
                                                        <th>24</th>
                                                        <th>25</th>
                                                        <th>26</th>
                                                        <th>27</th>
                                                        <th class="text-warning">28</th>
                                                        <th>29</th>
                                                        <th>30</th>
                                                        <th>31</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/01.jpg" alt="profile"></td>
                                                        <td>Asad Ullah</td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/10.jpg" alt="profile"></td>
                                                        <td>Usman </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/04.jpg" alt="profile"></td>
                                                        <td>Jamal</td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/06.jpg" alt="profile"></td>
                                                        <td>Salman</td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/10.jpg" alt="profile"></td>
                                                        <td>Usman </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/01.jpg" alt="profile"></td>
                                                        <td>Asad Ullah</td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/10.jpg" alt="profile"></td>
                                                        <td>Usman </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/04.jpg" alt="profile"></td>
                                                        <td>Jamal</td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/06.jpg" alt="profile"></td>
                                                        <td>Salman</td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/10.jpg" alt="profile"></td>
                                                        <td>Usman </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/01.jpg" alt="profile"></td>
                                                        <td>Asad Ullah</td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/10.jpg" alt="profile"></td>
                                                        <td>Usman </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/04.jpg" alt="profile"></td>
                                                        <td>Jamal</td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/06.jpg" alt="profile"></td>
                                                        <td>Salman</td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                                src="../assets/images/user/10.jpg" alt="profile"></td>
                                                        <td>Usman </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>

                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-close-line text-danger font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
                                                        </td>
                                                        <td> <i
                                                                class="ri-check-line text-success font-weight-bolder"></i>
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