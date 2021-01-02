<?php
$user=$app->db->getUser();

?>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light py-3 bg-light" id="mainNav">
    <div class="container">
      <a class="navbar-brand " href="/">eNotepad</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" style="
    /* background: #fff; */
">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link " href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">About US</a>
          </li>
          <li class="nav-item">
            <?php if($user!=null):?>
            <div class="dropdown show d-inline-block ">
              <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Welcome <?=ucfirst($user['name'])?></a>
            
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="process.php?action=logout">Logout</a>
              </div>
            </div>
            <?php else:?>
            <a class=" btn btn-primary" href="login.php">Login</a> | <a class=" btn btn-primary" href="register.php">Register</a>
            <?php endif;?>
            
          </li>
        </ul>
      </div>
    </div>
  </nav>