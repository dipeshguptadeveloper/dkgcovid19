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
            <h3 class="text-uppercase text-center">Covid-19 Live Updates Of World</h3>
        </div>
       <div class="table-responsive">
            <table class="table table-bordered table-striped text-center" id="tbval">
                <tr>
                    <th>Country</th>
                    <th>Total Confirmed</th>
                    <th>Total Recovered</th>
                    <th>Total Deaths</th>
                    <th>New Confirmed</th>
                    <th>New Recovered</th>
                    <th>New Deaths</th>
                </tr>
            </table>



       </div>
    </section>
    .<div class="container-fluid sub_section pt-5 pb-5" width="100vw" id="aboutid">
        <div class="section_header text-center mt-4 mb-5">
            <h1>About COVID-19 </h1>
        </div>
        <div class="row pt-5">
            <div class="col-lg-5 col-md-6 col-12">
                <img src="images/aboutcovid.jpg" width="450" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-12 ml-5 mt-2">
                <h2>What is COVID-19 (Corona-Virus)</h2><br>
                <p>Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing. You can protect yourself by washing your hands frequently, avoiding touching your face, and avoiding close contact (1 meter or 3 feet) with people who are unwell.</p>
                <p>Coronavirus disease spreads primarily through contact with an infected person when they cough or sneeze. It also spreads when a person touches a surface or object that has the virus on it, then touches their eyes, nose, or mouth.</p>
            </div>
        </div>
    </div>

    <!-- ************************ cornona symptoms ******************** -->
    <div class="container-fluid pt-5 pb-5" id="sympid">
        <div class="section_header text-center mt-4 mb-5">
            <h1>CoronaVirus Symptoms</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/cough.png" class="img-fluid" width="120" height="120" alt="">
                        <figcaption>cough</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/mucus.png" class="img-fluid" width="120" height="120" alt="">
                        <figcaption>running nose</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/fever.png" class="img-fluid" width="120" height="120" alt="">
                        <figcaption>fever</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/cold.png" class="img-fluid" width="120" height="120" alt="">
                        <figcaption>cold</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/sleeping.png" class="img-fluid" width="120" height="120" alt="">
                        <figcaption>tiredness</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="images/breathing.png" class="img-fluid" width="120" height="120" alt="">
                        <figcaption>difficulty in breathing</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- ************************ prevention against cornona ************************* -->
    <div class="container-fluid sub_section pt-5 pb-5" id="preventid">
        <div class="section_header text-center mt-4 mb-5">
            <h1>6 Steps Prevention Against CoronaVirus</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/handwash.png" class="img-fluid" width="90" height="90" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/patient.png" class="img-fluid" width="90" height="90" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/quarantine.png" class="img-fluid" width="90" height="90" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Avoid close contact(1 meter or 3 feet) with people who are unwell.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/stay-home.png" class="img-fluid" width="90" height="90" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay home and self-isolate from others in the household, if you feel unwell.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/news.png" class="img-fluid" width="90" height="90" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay informed by watching news & follow the recommended practices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">
                                <img src="images/fever1.png" class="img-fluid" width="90" height="90" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>If you have fever, cough and difficulty in breathing, seek medical care early.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ************************ contact us ************************* -->
    <div class="container-fluid pt-5 pb-5" id="contactid">
        <div class="section_header text-center mt-4 mb-5">
            <h1>Contact-Us</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <labe>Email address</labe>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Mobile No.</label>
                            <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Select symptoms</label> <br>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                                <label for="customcheckbox1" class="custom-control-label">Cold</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
                                <label for="customcheckbox2" class="custom-control-label">Fever</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breathing">
                                <label for="customcheckbox3" class="custom-control-label">Breathing Difficulty</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="cough">
                                <label for="customcheckbox4" class="custom-control-label">Cough</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox5" name="coronasym[]" value="week">
                                <label for="customcheckbox5" class="custom-control-label">Feeling Week</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

    function fetch(){
        $.get("https://api.covid19api.com/summary",

            function(data){
                // console.log(data['Countries'].length)
                var tbval = document.getElementById('tbval');

                for(var i=1; i<(data['Countries'].length); i++){
                    var x = tbval.insertRow();
                    x.insertCell(0);

                    tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                    tbval.rows[i].cells[0].style.background = '#7a4a91';
                    tbval.rows[i].cells[0].style.color = '#fff';

                    x.insertCell(1);

                    tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                    tbval.rows[i].cells[1].style.background = '#4bb7d8';
                    

                    x.insertCell(2);

                    tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                    tbval.rows[i].cells[2].style.background = '#7EFF5E';
                    

                    x.insertCell(3);

                    tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                    tbval.rows[i].cells[3].style.background = '#E1931C';
                    

                    x.insertCell(4);

                    tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                    tbval.rows[i].cells[4].style.background = '#28AAFF';
                   

                    x.insertCell(5);

                    tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                    tbval.rows[i].cells[5].style.background = '#46FF00';
                    

                    x.insertCell(6);

                    tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                    tbval.rows[i].cells[6].style.background = '#FF2828';
                    
                }
            }
        );
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
