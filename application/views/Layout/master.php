<?php $CI =& get_instance(); ?>
<!DOCTYPE html>
<html>
<style>
    .wrapper {
        background-color: white;
    }
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
    $this->load->view('Layout/css');
    ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php
    $this->load->view('Layout/header');
    $this->load->view('Layout/leftMenu');
    ?>
    <!-- Left side column. contains the logo and sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="font-weight: bold; font-size: 16px">
            <?php echo $header;?>
        </section>


        <?php echo !empty($content) ? $content : ''; ?>

    </div>

</div>
<!-- ./wrapper -->
    <?php
    $this->load->view('Layout/footer');
    ?>

</body>
</html>
