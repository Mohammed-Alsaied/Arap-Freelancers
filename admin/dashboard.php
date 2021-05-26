<?php include('includes/header.php');?>
          <!-- Begin Navbar -->
    <?php include('includes/navbar.php');
         if (!isset($_SESSION['userId'])) {
         header("Location:index.php");
    }
    ?>
    <!-- End Navbar -->
    <div class="container">
        <div class="row">
            <!-- Start Sidebar-->
            <div class="col-md-3">
                <?php
                  if (isset($_SESSION['role']) && $_SESSION['role'] ==1){
                       include ('includes/super-admin-sidebar.php');                     
                  }elseif (isset($_SESSION['role']) && $_SESSION['role'] ==2) {
                    include ('includes/admin-sidebar.php');
                  }elseif (isset($_SESSION['role']) && $_SESSION['role'] ==3) {
                    include ('includes/user-sidebar.php');
                  }else {
                      //header("Location:404.php");
                  }
                
                ?>
           </div>
            <!-- End Sidebar-->
            <div class="col-md-9">
                
                <!-- Start Alert -->
                <!--<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hello Admin!</strong> Have Nice Day.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>-->
                <!-- End Alert -->
                <!-- Start card Style-->
                   
                   <div class="card" style="width: 1000px;">
                    <div class="card-header">
                        <?php
                           if(isset($_GET['page'])){
                               $url = $_GET['page'];
                               switch($url):
                                   case 'home': echo 'Dashboard';break;
                                   case 'create_user': echo 'Create New user';break;
                                   case 'manage_users': echo 'Management Users';break;
                                   case 'freelancers': echo 'Freelancers';break;
                                   case 'branches': echo 'Branches';break;
                                   case 'edit': echo 'Edit User';break;

                               endswitch;
                           }else{
                               echo 'Dashboard';
                           }
                        ?>
                        <!--<ul class="nav nav-pills card-header-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.html">
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
                        </ul>-->
                    </div>
                    <div class="card-body">
                        <?php if(isset($_GET['page'])){
                            include($_GET['page']. '.php');
                        }else{
                            include ('home.php');
                        }
                                         
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card Style-->
    </div>
    <div class="footer">
        <span>Copyright &copy; Mohamed Alsaied 2020. &reg; All Rights Reserved.</span>
    </div>
    <?php include('includes/footer.php')?>
