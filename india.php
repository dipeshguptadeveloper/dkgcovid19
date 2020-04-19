<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>

</head>

<body onload="fetch()">
    <nav class="navbar navbar-expand-lg nav_style p-2">
        <a class="navbar-brand pl-5" href="#">COVID-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutid">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sympid">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#preventid">Prevention</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactid">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 justify-content-center align-items-center d-flex">
                    <img src="images/circle-of-people.png" width="300" height="300" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightside w-100 h-100 justify-content-center align-items-center d-flex">
                    <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rotate"><img src="images/coronavirus.png" width="100" height="100" alt=""></span>na Virus.</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- ************************ cornona lastest update ******************** -->

    <section class="corona_update container-fluid">
        <div class="mb-5">
            <h3 class="text-uppercase text-center">Covid-19 Live Updates Of India</h3>
        </div>
       <div class="table-responsive">
            <table class="table text-center" id="tbl">
            <?php

$data = file_get_contents('https://api.covid19india.org/data.json');

$coronadata = json_decode($data,true);

// echo "<prev>";
// print_r($daywise);

$totalcount = count($daywise['cases_time_series']);
$i=0;
while($i < $totalcount){
    ?>

    <tr>
        <th class="text-left">Date & Month</th>
        <th colspan="5"></th>
    </tr>
    <tr>
        <td colspan="6" class="text-left"><?php echo $coronadata['cases_time_series'][$i]['date'] . "</br>"; ?>
        </td>;
    </tr>
    <tr class="text-capitalize text-white">
        <th style="color:#fff; background:#2196f3;">total confirmed</th>
    </tr>

    </div>
    </section>
<!-- ************************ top cursor ************************* -->
<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBTN"></i>
</div>



<!-- ************************ footer ************************* -->    
    <footer class="mt-5">
        <div class="footer_style text-center text-white container-fluid">
            <p>&copy copyright by Dipesh Kumar Gupta</p>
        </div> 
    </footer>
 <script type="text/javascript">

    $('.count').counterUp({
        delay:10,
        time:3000
    })

    mybutton = document.getElementById("myBTN");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction(){
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
            mybutton.style.display = "block";
        }
        else {
            mybutton.style.display = "none";
        }
    }

    function topFunction(){
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }


</script>
</body>
</html>

<?php

    include 'dbcon.php';

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $symp = $_POST['coronasym'];
        $msg = $_POST['msg'];

        $chk = "";

        foreach($symp as $chk1){
            $chk .= $chk1.",";
        }

        $insertquery = " insert into coronacase(username, email, mobile, symp, message) values('$username', '$email', '$mobile', '$chk', '$msg') ";

        $query = mysqli_query($con, $insertquery);

        if($query){
            ?>
            <script>
                alert("Inserted successful");
            </script>
            <?php
        }
        else {
            ?>
            <script>
                alert("Not inserted");
            </script>
            <?php
        }
    }
?>
