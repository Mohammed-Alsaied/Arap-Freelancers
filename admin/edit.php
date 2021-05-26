 <?php
   if (isset($_GET['id'])){
      $id=$_GET['id'];
      $getUser="SELECT * FROM users WHERE user_id ='$id'";
      $result=mysqli_query($connection,$getUser);
      $row=mysqli_fetch_array($result);

      if (isset($_POST['submit'])){
        $fristname= $_POST['fristname'];
        $lastname= $_POST['lastname'];
        $username= $_POST['username'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $role= $_POST['role']; 
        $update="UPDATE users SET fristname ='$fristname',lastname='$lastname',user_pass='$username',email='$email',
        user_pass='$password',role='$role' WHERE user_id ='$id'"; 
        mysqli_query($connection,$update);
        //header("Location:dashboard.php?page=manage_users");
         getMessage('Updates Successfuly','green');     
      };
   } ;
 ?>
 
 <!-- Create User Form-->
 <form method="post">
                            
                            <div class="form-group">
                                <label for="Frist-Name">Frist Name</label>
                                <input type="text" name="fristname" value="<?= $row['fristname']?>" class="form-control" id="Frist_Name">
                                
                            </div>
                            <div class="form-group">
                                <label for="Last-Name">Last Name</label>
                                <input type="text" name="lastname" value="<?= $row['lastname']?>" class="form-control" id="Last_Name">
                                
                            </div>
                            <div class="form-group">
                                <label for="User-Name">User Name</label>
                                <input type="text" name="username" value="<?= $row['user_name']?>" class="form-control" id="User_Name">
                                
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" value="<?= $row['email']?>" class="form-control" id="email" aria-describedby="emailHelp" autocomplete="off">
                                
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" value="<?= $row['user_pass']?>" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <label class="form-group">User Role</label>
                                <select class="form-control" name="role">
                                          <?php
                                            if ($row['role']=='1'){
                                               echo "<option value='1'>Super Admin</option>";                                                 
                                            }elseif($row['role']=='2'){
                                               echo "<option value='2'>Admin</option>";     
                                            }else{
                                               echo "<option value='3'>User</option>";
                                            }
                                          ?>
                                          <option>------------------------------</options>
                                          <option value="1">Super Admin</option>
                                          <option value="2">Admin</option>
                                          <option value="3">User</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                        </form>
                        <!-- End Create user-->