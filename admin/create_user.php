  <?php //include('includes/header.php')?>
    <!-- Begin Navbar -->
    <?php //include('includes/navbar.php')?>
    <!-- End Navbar -->
    <!--<div class="message">
        <i class="fas fa-check-circle"></i> Created Successfuly.
    </div>-->
    <!--<div class="container">
        <div class="row">-->
            <!-- Start Sidebar-->
            <?php //include('includes/sidebar.php')?>
            <!-- End Sidebar-->
            <!--<div class="col-md-9">-->
                <!-- Start Alert -->
                <!--<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hello Admin!</strong> Have Nice Day.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>-->
                <!-- End Alert -->
                <!-- Start card Style-->
                  <!--<div class="card">
                    <div class="card-header">
                          Featured
                        <!--<ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">
                                    <h5>Dashboard</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="create_user.php">
                                    <h5>Create User</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="manage_users.php">
                                    <h5>Manage Users</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="freelancers.php">
                                    <h5>Freelancers</h5>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="branches.php">
                                    <h5>Branches</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">-->
                        <!-- Start Create user-->
                        <?php
                          //include('config.php');
                           if(isset($_POST['submit'])){
                              $fristname= $_POST['fristname'];
                              $lastname= $_POST['lastname'];
                              $username= $_POST['username'];
                              $email= $_POST['email'];
                              $password= $_POST['password'];
                              $confirm= $_POST['confirm'];
                              $role= $_POST['role'];
                              $errors = array();
                              if(empty($fristname)){
                                $errors[]='Must specify Frist Name.';
                              };
                              if(empty($lastname)){
                                $errors[]='Must specify Last Name.';
                            };
                              if(empty($username)){
                                $errors[]='Must specify User Name.';
                            };
                              if(empty($email)){
                                $errors[]='Must specify Email.';
                            };
                              if(empty($password)){
                                $errors[]='Must specify Password.';
                            };
                              if(empty($confirm)){
                                $errors[]='Must specify Confirm Password.';
                            };
                            if(empty($role)){
                                $errors[]='Must specify Confirm Password.';
                            };
                            //checkUser('$usernam','$email','users','');
                            $sql ="SELECT user_name,email FROM users WHERE user_name ='$username' OR email ='$email'";
                            $result= mysqli_query($connection,$sql);
                            if (mysqli_num_rows($result) == 1) {
                                getMessage('Username or Email already taken','red');
                            }else{
                                $addUser = "INSERT INTO users VALUES (null,'$fristname','$lastname','$username','$email','$password','$role')";
                                mysqli_query($connection,$addUser);
                                //$input = array($fristname,$lastname,$username,$email,$password,$confirm,$role);
                                getMessage('User Created Successfuly.','green');  
                            };
                        };                                                                                                   
                          ?>
                        <!-- Create User Form-->
                        <form method="post">
                            <?php
                                if(!empty($errors)){
                             ?>
                             <div class="alert alert-danger">
                              <?php
                                 for($e = 0; $e < count($errors); $e++){
                                     echo "<li>$errors[$e]</li>";
                                 }; 
                              ?>
                             </div>
                             <?php  };
                             ?>
                            <div class="form-group">
                                <label for="Frist-Name">Frist Name</label>
                                <input type="text" name="fristname" value="<?php if(isset($fristname)) echo $fristname;  ?>" class="form-control" id="Frist_Name">
                                <span id="fristName"></span>
                            </div>
                            <div class="form-group">
                                <label for="Last-Name">Last Name</label>
                                <input type="text" name="lastname" value="<?php if(isset($lastname)) echo $lastname;  ?>" class="form-control" id="Last_Name">
                                <span id="lastName"></span>
                            </div>
                            <div class="form-group">
                                <label for="User-Name">User Name</label>
                                <input type="text" name="username" value="<?php if(isset($username)) echo $username;  ?>" class="form-control" id="User_Name">
                                <span id="userName"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" value="<?php if(isset($email)) echo $email;  ?>" class="form-control" id="email" aria-describedby="emailHelp" autocomplete="off">
                                <small id="email_val"></small>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" value="<?php if(isset($password)) echo $password;  ?>" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <label for="confirm password">Confirm Password</label>
                                <input type="password" name="confirm" value="<?php if(isset($confirm)) echo $confirm;  ?>" class="form-control" id="confirm password">
                                <div class="form-group check-password">
                                    <span id="pass_error"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-group">User Role</label>
                                <select class="form-control" name="role" value="<?php if(isset($role)) echo $role;  ?>">
                                          <option>Select Role</option>
                                          <option value="1">Super Admin</option>
                                          <option value="2">Admin</option>
                                          <option value="3">User</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Create</button>
                            <button type="button" onclick="clearTxt()" class="btn btn-danger">New</button>
                        </form>
                        <!-- End Create user-->
                   <!-- </div>
                </div>
            </div>
        </div>-->
        <!-- End Card Style-->
    <!--</div>
    <div class="footer">
        <span>Copyright &copy; Mohamed Alsaied 2020. &reg; All Rights Reserved.</span>
    </div>
    <?php //include('includes/footer.php')?>-->