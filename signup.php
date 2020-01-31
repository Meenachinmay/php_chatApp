<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signup.css">

    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>ChatApp: SignUp</title>
</head>
<body>
<div class="signup-form">
    <form action="" method="post">
        <div class="form-header">
            <h2>Sign Up</h2>
            <p>SignUp to ChatApp</p>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="user_name" placeholder="Example: meenachinmay" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="user_password">Password</label>
            <input type="password" class="form-control" name="user_password" placeholder="Example: 12345678" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="signin">Email Address</label>
            <input type="email" class="form-control" name="user_email" placeholder="someone.site@someone.com" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <select class="form-control" name="user_country" id="" required>
                <option disabled>Select a country</option>
                <option>Japan</option>
                <option>India</option>
                <option>Pakistan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="country">Gender</label>
            <select class="form-control" name="user_gender" id="" required>
                <option disabled>Select your gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
        </div>
        <?php include("signup_user.php")?>
    </form>
    <div class="text-center small" style="color: #674288;">
        Already have an account <a style="text-decoration: none" href="signin.php">Create one</a>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>