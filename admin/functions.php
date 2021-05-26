</<?php
require('config.php');
   function setTitle(){
     if (isset($_GET['page'])){
         $title =$_GET['page'];
         switch($title){
            case 'home': echo 'Dashboard';break;
             case 'create_user': echo 'Create User';break;
             case 'manage_users': echo 'Manage Users';break;
             case 'freelancers': echo 'Freelancers';break;
             case 'branches': echo 'Branches';break;
         }
     } else echo 'Dashboard';
 }
function getMessage($text,$fontColor='black'){
    echo "
          <div class=\"alert alert-warning\">
            <span style='color:$fontColor'>$text</span> 
          </div>";                           
};

function getTotals($tbl){
    global $connection;
    $sql="SELECT COUNT(*) as 'Total' FROM $tbl";
    $result= mysqli_query($connection,$sql);
    $count= mysqli_fetch_array($result);
    return $count['Total'];   
}

function checkUser($col1,$col2,$tbl,$where = ''){
    $sql = "SELECT $col1 ,$col2 FROM $tbl";
}