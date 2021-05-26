<?php
    session_start();
    require 'functions.php';
    if(isset($_POST['submit'])){
        $userName =trim($_POST['username']);
        $password =trim($_POST['password']);
        if(empty($userName)){
            $userError ='Username Field is required.';
        }
        if(empty($password)){
           $passError ='Password Field is required.';
        }
        // Login
        $login ="SELECT * FROM users WHERE (user_name ='$userName' OR email ='$userName') AND user_pass='$password'";
        $check= mysqli_query($connection,$login);
        if (mysqli_num_rows($check) == 1) {
            $user= mysqli_fetch_array($check);
            $_SESSION['frname']= $user['fristname'];
            $_SESSION['lsname']= $user['lastname'];
            $_SESSION['userId']= $user['user_id'];
            $_SESSION['role']= $user['role'];
            header("Location:dashboard.php");
        }else{
           getMessage('Invalid Login','darkred');
        };

    
    }


?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>login</title>
    <!-- Include CSS Files-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h3 class="text-center">Hello Admin</h3>
            <form method="POST">
                <input type="text" name="username" value="<?php if(isset($userName)) echo $userName;  ?>" class="form-control" placeholder="Enter Username or Email"  autofocus autocomplete="off">
                <span><?php
                      if(isset($userError)){
                          echo $userError;
                      }
                      ?>
                </span>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" >
                <span><?php
                      if(isset($passError)){
                          echo $passError;
                      }
                      ?>
                </span>
                <input type="submit" name="submit" value="Login" class="btn btn-warning">
            </form>
        </div>
    </div>
    <!-- Include JS Files-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="js/all.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>