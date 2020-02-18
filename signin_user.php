<?php
session_start();

include ('include/connection.php');

    if (isset($_POST['sign_in'])){
        $email = htmlentities(mysqli_real_escape_string($connection, $_POST['email']));
        $password = htmlentities(mysqli_real_escape_string($connection, $_POST['password']));

        $selected_user = "select * from users where user_email='$email' AND user_password='$password'";


        $query = mysqli_query($connection, $selected_user) or die (mysqli_error($connection));
        $check_user = mysqli_num_rows($query);

        if ($check_user == 1){
            $_SESSION['user_email'] = $email;

            $update_msg = mysqli_query($connection, "UPDATE users SET log_in='Online' WHERE user_email='$email'");

            $user = $_SESSION['user_email'];
            $get_user = "select * from users where user_email='$user'";

            $run_user = mysqli_query($connection, $get_user) or die (mysqli_error($connection));
            $row = mysqli_fetch_array($run_user);

            $user_name = $row['user_name'];

            echo "<script>window.open('home.php?user_name=$user_name', '_self')</script>";

        }else{
            
            echo "
                <div class='alert alert-danger'>
                    <strong>Check your email and password.</strong>
                </div>
            ";
        }

    }

?>