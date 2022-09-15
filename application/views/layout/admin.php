<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ? : '' ?></title>

    <!-- import w3.css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/w3.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jodit.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/admin.css">
</head>

<body>
    <div class="top-bar">
        <div class="top-bar-left">
            <h4>Admin Panel</h4>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li><a href="<?= base_url() ?>admin/logout">Logout</a></li>
            </ul>
        </div>
    </div>
    
        <div class="sidebar">
            <a href="<?php echo  base_url(); ?>admin" class="<?=($this->uri->segment(1)==='admin')?'active':''?>">Dashboard</a>
            <a href="<?php echo  base_url(); ?>manage-post" class="<?=($this->uri->segment(1)==='manage-post')?'active':''?>">Manage Post</a>
            <a href="<?php echo  base_url(); ?>users" class="<?=($this->uri->segment(1)==='users')?'active':''?>">Users</a>
            <a href="<?php echo  base_url(); ?>orders" class="<?=($this->uri->segment(1)==='orders')?'active':''?>">Orders</a>
        </div>
        
    <div class="content">
        <?php if (isset($view)) { $this->load->view($view); } ?>
    </div>
    <footer>
    </footer>
    <!-- import jquery -->
    <script src="<?php echo  base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
    <!-- import jodit js -->
    <script src="<?php echo  base_url(); ?>assets/js/jodit.js"></script>
    <script src="<?php echo  base_url(); ?>assets/js/script.js"></script>
</body>

</html>