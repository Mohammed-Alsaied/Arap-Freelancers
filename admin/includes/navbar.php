<?php session_start()?>
<div class="">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <i class="fas fa-laptop-code fa-3x text-primary"></i>  <a href="dashboard.php" class="navbar-brand">Arab Freelancers</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" id="nav">
                        <a class="nav-link" id="nav" href="dashboard.php"><span><i class="fas fa-house-user"></i> Home  </span></a>
                    </li>
                    <li class="nav-item" id="nav">
                        <a class="nav-link" id="nav" href="#"> <span> <i class="fas fa-dollar-sign"></i> Sales</span></a>
                    </li>
                    <li class="nav-item dropdown" id="nav" id="nav">
                        <a class="nav-link dropdown-toggle" href="#" id="nav" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i> <?= ucwords($_SESSION['frname'])?> <?= ucwords($_SESSION['lsname']);?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">                           
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>