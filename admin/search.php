<?php
require 'config.php';
if (isset($_GET['K'])) {
    $name = '%'. $_GET['K'].'%';
    $sql= "SELECT * FROM users WHERE fristname  LIKE '$name'";
    $query = mysqli_query($connection,$sql);
    if (mysqli_num_rows($query) > 0) {
       while($data =mysqli_fetch_array($query)){
           echo "<a href='#'>".$data['fristname']."</a> <br>";
          
       }
    }else {
        echo 'Not Found.. ';
    }
}