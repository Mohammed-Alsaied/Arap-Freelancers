<?php
  require ('admin/functions.php');
  include ('includes/header.php');
  if (isset($_POST['submit'])){
      // Uploaded Directory
      $dir = dirname(__FILE__) .'/admin/uploaded/';
      $path = $_FILES['photo']['tmp_name'];
      $file_name = $_FILES['photo']['name'];
      move_uploaded_file($path,$dir.$file_name);

      $name =  $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $skils = $_POST['skils'];
      $pass = $_POST['password'];
      //$photo = $_POST['photo'];
      $addFreeLancer = "INSERT INTO `freelanccers`(`f_id`, `f_name`, `f_phone`, `email`,`password`, `photo`) VALUES (NULL,'$name','$phone','$email','$pass','$file_name')";
      if(mysqli_query($connection,$addFreeLancer)){
            $last_id = mysqli_insert_id($connection);
            mysqli_query($connection,"INSERT INTO `details`(`id`, `description`, `f_id`) VALUES (NULL,'$skils','$last_id')");
             echo  getMessage('Created Successfuly','green');
            };
    };

?>
<!-- Create Login Freelancers-->
            
  
<div class="container text-light" id="container">
            <div class="freesignup">
                <label id="" class="p-3 mb-2 bg-info text-light">Sign Up to Arab Freelancers</label>
            </div>  
<div class="">
<form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Frist-Name">Name</label>
            <input type="text" name="name" value="" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" value="" class="form-control"  aria-describedby="emailHelp" autocomplete="off" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" value="" class="form-control"  aria-describedby="emailHelp" autocomplete="off" placeholder="Enter password">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea rows="" cols="" name="skils" value="" class="form-control" placeholder="Enter Skils"></textarea>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone"  class="form-control" placeholder="Enter Phone">
        </div>
        <div class="form-group">
            <label>Upload Photo</label>
            <input type="file" name="photo"  class="form-control">
        </div>
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Sign Up</button>
        <button type="button" onclick="clearTxt()" class="btn btn-danger">New</button><br><br>
</form>
</div>
   
  
<!-- End Login Freelancers-->
</div>
<?php include 'includes/footer.php'?>


