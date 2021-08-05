<?php 
session_start();

 $conn = mysqli_connect("localhost", "root" , "", "workwox");

 
 if (isset($_GET['signout'])) {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
}

if (isset($_POST['submit'])) {
    $files=$_FILES['file'];
    $filename = $files['name'];
    $filrerror = $files['error'];
    $filetemp = $files['tmp_name'];
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('jpg','png','txt','doc','docx');
    $destinationfile = 'user_files/'.$filename;
    $user_id=$_SESSION['user_id'];
    $task_id = $_POST['task_id'];
    $task_uploaded_description = $_POST['task_uploaded_description'];
    $sql = "UPDATE `assign_task` SET `user_file` = '$filename' , `status` = '1' , `task_uploaded_description` ='$task_uploaded_description' WHERE task_id  = '$task_id'";
    $query = mysqli_query($conn , $sql);
    if($query){
        move_uploaded_file($filetemp, $destinationfile);
        $_SESSION['status'] = "Task Submit!";
       $_SESSION['status_code'] = "success";
       header('Location:index.php');
    }
    else{
        $_SESSION['status'] = "Error!";
       $_SESSION['status_code'] = "error";
       header('Location:index.php');
    }
}

if (isset($_POST['punch_in'])) {
    date_default_timezone_set("Asia/Karachi");
    $user_id = $_SESSION['user_id'];
    $currentdate=date('Y/m/d');
    $punch_in_time=date('H:i:s');
    $sortpunch_in_time = date('h:i A', strtotime($punch_in_time));
    $sql_e = "SELECT * FROM user_attendance WHERE user_id='$user_id' AND attendance_date='$currentdate'";
        $res_e = mysqli_query($conn, $sql_e);	
        if(mysqli_num_rows($res_e) > 0){
            $_SESSION['status'] = "Already Punch In!";
            $_SESSION['status_code'] = "error";
            header('Location:user_attendance.php');
          }else
          {
        $sql="INSERT into `user_attendance` (user_id,punch_in_time,attendance_date) VALUES ('$user_id','$punch_in_time','$currentdate')";
            $query=mysqli_query($conn, $sql);
        if($query){
            $_SESSION['status'] = "Your Punch In Time is $sortpunch_in_time";
            $_SESSION['status_code'] = "success";
            header('Location:user_attendance.php');
            }
        }   
    }

    if (isset($_POST['punch_out'])) {
        date_default_timezone_set("Asia/Karachi");
        $user_id = $_SESSION['user_id'];
        $currentdate=date('Y/m/d');
        $punch_out_time=date('H:i:s');
        $sortpunch_out_time = date('h:i A', strtotime($punch_out_time));
        $sql_e = "SELECT * FROM user_attendance WHERE user_id='$user_id' AND attendance_date='$currentdate' AND  inout_status='1'";
            $res_e = mysqli_query($conn, $sql_e);	
            if(mysqli_num_rows($res_e) > 0){
                $_SESSION['status'] = "Already Punch Out!";
                $_SESSION['status_code'] = "error";
                header('Location:user_attendance.php');
              }else
              {
                $sql = "UPDATE `user_attendance` SET  `punch_out_time` = '$punch_out_time' , `inout_status` = '1' , `attendance_status` = '1' WHERE  attendance_date='$currentdate' ";
                $query=mysqli_query($conn, $sql);
            if($query){
                $_SESSION['status'] = "Your Punch Out Time is $sortpunch_out_time";
                $_SESSION['status_code'] = "success";
                header('Location:user_attendance.php');
                }
            }   
        }
