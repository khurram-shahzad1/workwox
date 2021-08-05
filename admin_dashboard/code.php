<?php 
session_start();

 $conn = mysqli_connect("localhost", "root" , "", "workwox");
 if (isset($_POST['submit'])) {
    $user_id=$_POST['user_id'];
    $task_name=$_POST['task_name'];
    $task_deadlinedate=$_POST['task_deadlinedate'];
    $task_assigndate=date('Y/m/d');
    $files=$_FILES['file'];
    $task_description = $_POST['task_description'];
    $filename = $files['name'];
    $filrerror = $files['error'];
    $filetemp = $files['tmp_name'];
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('jpg','png','txt','doc','docx');
    $destinationfile = 'task_files/'.$filename;
        if($task_name== "" || $task_deadlinedate== "" || $task_description==""){
        $_SESSION['status'] = "Fill All The Fields!";
        $_SESSION['status_code'] = "warning";
        header('Location:create_task.php');
      }else{
        move_uploaded_file($filetemp, $destinationfile);
    $sql = "INSERT INTO `assign_task`(`user_id`, `task_name`, `task_assigndate`, `task_deadlinedate`, `task_file`, `task_description`) VALUES ('$user_id','$task_name','$task_assigndate','$task_deadlinedate','$filename','$task_description')";

$result = mysqli_query($conn, $sql);

if($result){
    
    $_SESSION['status'] = "Task Assigned!";
       $_SESSION['status_code'] = "success";
       header('Location:create_task.php');
}
else{
    
    $_SESSION['status'] = "Error Occured!";
       $_SESSION['status_code'] = "error";
       header('Location:create_task.php');
}
}
 }

 if (isset($_GET['signout'])) {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
}

if(isset($_POST['approve'])) {
  $approve_task_id=$_POST['approve'];

  $sql = "UPDATE `assign_task` SET  `status` = '3' WHERE task_id  = '$approve_task_id'";
  $query = mysqli_query($conn , $sql);

      if($query){
          echo 1;
      }
      else{
          echo 0;
      }
}
if(isset($_POST['reject'])) {
  $reject_task_id=$_POST['reject'];

  $sql = "UPDATE `assign_task` SET  `status` = '2' WHERE task_id  = '$reject_task_id'";
  $query = mysqli_query($conn , $sql);

      if($query){
          echo 1;
      }
      else{
          echo 0;
      }
}

if(isset($_GET['approve_attendance_id'])) {
    $approve_attendance_id=$_GET['approve_attendance_id'];
  
    $sql = "UPDATE `user_attendance` SET  `attendance_status` = '3' WHERE attendance_id  = '$approve_attendance_id'";
    $query = mysqli_query($conn , $sql);
  
        if($query){
            $_SESSION['status'] = "Attendance Approved!";
            $_SESSION['status_code'] = "success";
            header('Location:attendance.php');
        }
        else{
            $_SESSION['status'] = "Error Occured!";
       $_SESSION['status_code'] = "error";
       header('Location:attendance.php');
        }
  }

  if(isset($_GET['reject_attendance_id'])) {
    $reject_attendance_id=$_GET['reject_attendance_id'];
  
    $sql = "UPDATE `user_attendance` SET  `attendance_status` = '2' WHERE attendance_id  = '$reject_attendance_id'";
    $query = mysqli_query($conn , $sql);
  
        if($query){
            $_SESSION['status'] = "Attendance Rejected!";
            $_SESSION['status_code'] = "success";
            header('Location:attendance.php');
        }
        else{
            $_SESSION['status'] = "Error Occured!";
       $_SESSION['status_code'] = "error";
       header('Location:attendance.php');
        }
  }