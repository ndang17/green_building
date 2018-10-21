<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--    <meta charset="utf-8">-->
    <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--    <title>Bootstrap 101 Template</title>-->

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/animate/animate.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/fontawesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/toastr/toastr.min.css'); ?>" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/moment/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/toastr/toastr.min.js'); ?>"></script>

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
</head>


<style>
    body {
        /*background-image: url("*/<?php //echo base_url('assets/images/bg/p.jpg'); ?>/*");*/
    }
    .margin-right {
        margin-right: 5px;
    }

    .thumbnail, .panel, .list-group {
        -webkit-box-shadow: 0px 0px 16px -9px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 16px -9px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 16px -9px rgba(0,0,0,0.75);
    }
</style>



<body>

<?php echo $include; ?>

<nav class="navbar navbar-inverse" style="border-radius: 0px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#" style="padding-top: 0px;">
                <img alt="Brand" src="<?php echo base_url('assets/images/icon/house2.png'); ?>" style="max-width: 250px;">
            </a>
        </div>
    </div>
</nav>

<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-3">
            <div class="">
                <div class="list-group">
                    <a href="<?php echo base_url('admin/master/add-question'); ?>" class="list-group-item <?php if($this->uri->segment(2)=='master'){echo 'active';} ?>"><i class="fa fa-database margin-right"></i> Master</a>
                    <a href="<?php echo base_url('admin/question/list'); ?>" class="list-group-item <?php if($this->uri->segment(2)=='question'){echo 'active';} ?>"><i class="fa fa-question-circle margin-right"></i> Question</a>
                    <a href="<?php echo base_url('admin/users'); ?>" class="list-group-item <?php if($this->uri->segment(2)=='users'){echo 'active';} ?>"><i class="fa fa-users margin-right"></i> Users</a>
                    <a href="<?php echo base_url('admin/statistik'); ?>" class="list-group-item <?php if($this->uri->segment(2)=='statistik'){echo 'active';} ?>"><i class="fa fa-bar-chart margin-right"></i> Statistik</a>
                    <a href="<?php echo base_url('admin/out'); ?>" class="list-group-item <?php if($this->uri->segment(2)=='out'){echo 'active';} ?>"><i class="fa fa-sign-out margin-right"></i> Logout</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <?php echo $page; ?>
        </div>
    </div>
</div>

</body>
</html>