<style>
    .page_body {
        position: relative;
    }
    #form {padding-top:50px;height:500px;}
    #payment {padding-top:50px;height:500px;}
    #admit {padding-top:50px;height:500px;}
    #result {padding-top:50px;height:500px;}
</style>

<div class="page_body" data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="navbar navbar-default navbar-fixed-top" style="top: 180px;" id="status">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#form" onclick="moveTop()">Application Form Submission</a></li>
                    <li><a href="#payment" onclick="moveTop()">Payment</a></li>
                    <li><a href="#admit" onclick="moveTop()">Admit Card</a></li>
                    <li><a href="#result" onclick="moveTop()">Result</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="form" class="container-fluid" style="text-align: center">
    <h2>Application Form Submission</h2>
    <p>Application submission has been successfully done.</p>
    <span class="glyphicon glyphicon-ok-circle" style="font-size: 150px">
</div>
<div id="payment" class="container-fluid" style="text-align: center">
    <h2>Payment Status</h2>
    <p>Pending!</p>
</div>
<div id="admit" class="container-fluid" style="text-align: center">
    <h2>Admit Card</h2>
    <a href="<?php echo base_url() . "assets/"; ?>dist/img/2.pdf" download>
        <button class="btn btn-primary" style="margin-top: 45px">Download Admit Card </button>
    </a>
</div>
<div id="result" class="container-fluid" style="text-align: center">
    <h2>Result</h2>
    <a href="<?php echo base_url() . "assets/"; ?>dist/img/2.pdf" download>
        <button class="btn btn-primary" style="margin-top: 45px">View Result</button>
    </a>
</div>

</div>

<script>
    function moveTop() {
        document.getElementById("status").style.top = "0px";
    }
</script>