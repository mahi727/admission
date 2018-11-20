<?php $CI =& get_instance(); ?>
<!DOCTYPE html>
<html>
<style>
    /*    .main__header {
            background-image: url("<?php echo site_url() . "assets/"; ?>img/index.jpg" );
        opacity: 0.5;
        background-repeat: no-repeat;
        background-size: 100%;
    }*/
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="assets/img/iitlogo.png">
    <title><?php echo $title;?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
    //   $this->load->view('Layout/css');
    ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <div class="main__header">
        <?php
        $this->load->view('Layout/header');
        //  $this->load->view('Layout/leftMenu');
        ?>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!--        <section class="content-header" style="font-weight: bold; font-size: 16px">-->
        <!--            --><?php //echo $header;?>
        <!--        </section>-->


        <div class="main__contant">
            <?php echo !empty($content) ? $content : ''; ?>
        </div>
    </div>

</div>
<!-- ./wrapper -->
<?php
$this->load->view('Layout/footer');
?>

</body>
</html>
