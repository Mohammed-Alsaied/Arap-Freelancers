<?php
  $sql = "SELECT *  FROM freelanccers ORDER BY f_name";
  $query = mysqli_query($connection,$sql);  
?>
<select id="free" class="form-control">
<option>Select Freelancers</option>
<?php
   while($rows=mysqli_fetch_array($query)){
    ?>
    <option value="<?= $rows['f_id']?>"> <?= $rows['f_name']?> </option>
<?php
   }
   ?>
</select>
<div class="result"></div>  











<?php //include('includes/header.php')?>
    <!-- Begin Navbar -->
    <?php //include('includes/navbar.php')?>
    <!-- End Navbar -->
    <!--<div class="container">
        <div class="row">
            <!-- Start Sidebar-->
            <?php //include('includes/sidebar.php')?>
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
                    <div class="card-body">-->
                    <?php
                           //require('config.php');
                          /* $sql = "SELECT * FROM freelanccers";
                           $result= mysqli_query($connection,$sql);
                           if(mysqli_num_rows($result) > 0){                           
                        ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Skils</th>
                                <!--<th>Opearaions</th>-->
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                  while($freelancers= mysqli_fetch_array($result)){
                                ?>                                                               
                                <tr>
                                    <td><?= $freelancers['f_name']?></td>
                                    <td><?= $freelancers['f_phone']?></td>
                                    <td><?= $freelancers['skils']?></td>                                    
                                </tr>
                             <?php } ?>   
                            </tbody>
                        </table>
                   <?php }else{
                          getMessage('Table is no Users Data','red');
                   };
                   ?>
                    <!--</div>
                </div>
            </div>
        </div>
        <!-- End Card Style-->
    <!--</div>
    </div>
    <!--<div class="footer">
        <span>Copyright &copy; Mohamed Alsaied 2020. &reg; All Rights Reserved.</span>
    </div>-->
    <?php //include('includes/footer.php')?>*/
