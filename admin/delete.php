<?php
require 'functions.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delUser = "DELETE FROM users WHERE user_id = '$id'";
    mysqli_query($connection,$delUser);
    header("Location:dashboard.php?page=manage_users");

}