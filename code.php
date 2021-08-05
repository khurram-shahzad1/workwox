<?php 
session_start();

 $conn = mysqli_connect("localhost", "root" , "", "workwox");

 
if (isset($_POST['signInForm'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql = "SELECT user_type FROM user WHERE email = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql); 
    $user = mysqli_fetch_array($result);
    $_SESSION['user_type'] = $user['user_type'];
     $user = $_SESSION['user_type'];
    if ($email==""|| $password==""|| $user=="") {
        echo "0";
    }

    else {
        if ($user=="Team") {
            $sql="SELECT * FROM `user` WHERE email = '$email' AND `password` = '$password' AND user_type = '$user'";

            $query=mysqli_query($conn, $sql);

            if (mysqli_num_rows($query) > 0) {

                $data=mysqli_fetch_array($query);

                $_SESSION['user_loggedin'] = TRUE;

                $_SESSION['user_id'] = $data['user_id'];

                echo "Team";

            }

            else {
                echo "0";
            }
        }

        else {
            $sql="SELECT * FROM `user` WHERE email = '$email' AND `password` = '$password' AND user_type = '$user'";

            $query=mysqli_query($conn, $sql);

            if (mysqli_num_rows($query) > 0) {

                $data=mysqli_fetch_array($query);

                $_SESSION['admin_loggedin'] = TRUE;

                $_SESSION['adminid'] = $data['user_id'];

                echo "Admin";

            }

            else {
                echo "0";
            }

        }
    }
}
 ?>