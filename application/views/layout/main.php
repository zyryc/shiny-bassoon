<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php if (isset($title) && $title != null) {
    echo $title." -  Tickets for You";
  }else{
    echo " Tickets for You";
  } ?></title>
  <!-- plugins:css -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo1.png" />
<script src="<?php echo base_url() ?>assets/js/preloader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
  body,html {
    height: 100%;
    
}

/* Style the links inside the navigation bar */
.nav-link {
  float: right;
  text-decoration: none;
}
.navbar-brand{
  max-width:200px;
}
@media screen and (max-width: 480px) {
  .navbar-brand{
  max-width:150px;
}
.full-page-wrapper{
  margin-top:0px !important;
}
}

  </style>
<body >


<nav class="navbar navbar-expand navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url() ?>">
      <img src="<?php echo base_url() ?>assets/images/ct.png" class="img-fluid rounded" alt="Ticket for You !" width="100%">
    </a>
    <div class="navbar-collapse collapse" id="">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      </ul>
      <div class="d-flex">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url() ?>">Home</a>
        </li>

      <?php if ($this->ion_auth->logged_in()) { ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       
            <?php echo $this->ion_auth->user()->row()->first_name; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= base_url() ?>logout">Log out</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?= base_url() ?>profile">Profile</a></li>
            
          </ul>
        </li>
      <?php  }else{ ?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url() ?>login">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url() ?>register">Register</a>
        </li>
        <?php  } ?>

      </ul>
      </div>
    </div>
  </div>
</nav>
  <div class="body-wrapper">



<div>
  <?php $this->load->view($view); ?>
</div>
        
  </div>
  <!-- plugins:js -->
  <script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url() ?>assets/vendors/chartjs/Chart.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url() ?>assets/js/material.js"></script>
  <script src="<?php echo base_url() ?>assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url() ?>assets/js/dashboard.js"></script>
  <script src="<?php echo base_url() ?>assets/js/script.js"></script>
  <!-- End custom js for this page-->
</body>
<style>
.active{
  border-bottom: 1px solid white;
}
.nav-link:hover {
  border-bottom: 1px solid white;

}
</style>
</html> 