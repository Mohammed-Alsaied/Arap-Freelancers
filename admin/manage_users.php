<?php// include('includes/header.php')?>
    <!-- Begin Navbar -->
    <?php //include('includes/navbar.php')?>
    <!-- End Navbar -->
    <!--<div class="container">
        <div class="row">
            <!-- Start Sidebar-->
            <?php// include('includes/sidebar.php')?>
            <!-- End Sidebar-->
            <!--<div class="col-md-9">
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
                        </ul>-->
                    <!--</div>
                    <div class="card-body">
                        <!-- Start Manage user-->
                        <?php
                           //require('config.php');
                           $sql = "SELECT * FROM users";
                           $result= mysqli_query($connection,$sql);
                           if(mysqli_num_rows($result) > 0){                           
                        ?>
                        <input type="text" class="form-control find" id="search" placeholder="Search..." autocomplete="off">
                        <div class="result"></div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Frist Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>User Role</th>
                                    <th class="text-center">Opearaions</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                  while($users= mysqli_fetch_array($result)){
                                ?>                                                               
                                <tr>
                                    <td><?= $users['fristname']?></td>
                                    <td><?= $users['lastname']?></td>
                                    <td><?= $users['email']?></td>
                                    <td><?php if($users['role']==1){
                                        echo 'Super Admin';
                                    }elseif($users['role']==2){
                                        echo 'Admin';
                                    }else{
                                        echo 'User';
                                    };                                    
                                    ?></td>
                                    <td class="text-center">
                                        <a href="dashboard.php?page=edit&id=<?=$users['user_id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?php//delete($users['user_id'])>?"></a>
                                        <a href="delete.php?id=<?= $users['user_id']?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                               </tr>
                             <?php } ?>   
                            </tbody>
                        </table>
                   <?php }else{
                          getMessage('Table is no Users Data','red');
                   };
                   ?>
                        <!-- End manage user-->
                    <!--</div>
                </div>
            </div>
        </div>
        <!-- End Card Style-->
    <!--</div>
    <!--<div class="footer">
        <span>Copyright &copy; Mohamed Alsaied 2020. &reg; All Rights Reserved.</span>
    </div>-->
    <?php //include('includes/footer.php')?>
