<?php $CI =& get_instance(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url() . "assets/";?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/";?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/";?>bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/";?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/";?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/";?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="<?php echo base_url() . "assets/"; ?>dist/img/iit.png">
    <title><?php echo $title;?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <div class="main__header">
        <?php
        $this->load->view('Layout/header');
        ?>
    </div>

    <div class="content">


        <div class="main__contant">
<!--            <section class="content-header" style="font-weight: bold; font-size: 16px; text-align: center; margin-top: 50px">
                <?php /*echo $header;*/?>
            </section>
-->            <?php echo !empty($content) ? $content : ''; ?>
        </div>
    </div>

</div>

<?php
$this->load->view('Layout/footer');
?>

</body>
</html>
