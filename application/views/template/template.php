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
<!--    <link href="--><?php //echo base_url('assets/bootstrap/css/bootstrap-theme.min.css'); ?><!--" rel="stylesheet">-->

    <link href="<?php echo base_url('assets/animate/animate.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/fontawesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/custom/temp.css'); ?>" rel="stylesheet">
<!--    <link href="--><?php //echo base_url('assets/checkbox/checkbox.css'); ?><!--" rel="stylesheet">-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/custom/temp.js'); ?>"></script>
    <script src="<?php echo base_url('assets/moment/moment.min.js'); ?>"></script>
</head>


<script>
    window.base_url_js = "<?php echo base_url(); ?>";

    function dateTimeNow() {
        return moment().format('YYYY-MM-DD H:mm:ss');
    }
</script>
<body>

        <?php echo $page; ?>

</body>
</html>