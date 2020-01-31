<?php
include("include/connection.php");

if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    exit();
}

    if (isset($_POST['sign_up'])){
        $name = htmlentities(mysqli_real_escape_string($connection, $_POST['user_name']));
        $password = htmlentities(mysqli_real_escape_string($connection, $_POST['user_password']));
        $email = htmlentities(mysqli_real_escape_string($connection, $_POST['user_email']));
        $country = htmlentities(mysqli_real_escape_string($connection, $_POST['user_country']));
        $gender = htmlentities(mysqli_real_escape_string($connection, $_POST['user_gender']));
        $rand = rand(1,2);

        if ($name == ''){
            echo "<script> alert('Please enter your name first')</script>";
        }

        if (strlen($password) < 6){
            echo "<script> alert('Password should be minimum of 6 characters!')</script>";
            exit();
        }

        $check_email = "select * from users where user_email='$email'";
        $run_checkEmail_query = mysqli_query($connection, $check_email);

        $checkEmail_query_result = mysqli_num_rows($run_checkEmail_query);

        if ($checkEmail_query_result == 1){
            echo "<script> alert('Email is already exists, please try again with other valid email')</script>";
            echo "<script>window.open('signup.php', '_self')</script>";
            exit();
        }

        if ($rand == 1){
            $default_profile_picture = "images/default_profile_picture1";
        }else{
            $default_profile_picture = "images/default_profile_picture2";
        }

        $insert_data = "insert into users (user_name, user_password, user_email, user_profile, user_country, user_gender) values ('$name', '$password', '$email', '$default_profile_picture', '$country','$gender')";

        $query = mysqli_query($connection, $insert_data) or die (mysqli_error($connection));

        if ($query){
            echo"<script>alert('Congratulation, $name, your account has been created successfully')</script>";
            echo"<script>window.open('signup.php', '_self')</script>";
        }else{
            echo"<script>alert('Registration failed, try again!')</script>";
            echo"<script>window.open('signup.php', '_self')</script>";
        }
    }