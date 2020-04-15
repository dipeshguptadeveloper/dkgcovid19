<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>

</head>

<body>
    <nav class="navbar navbar-expand-lg nav_style p-3">
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
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Prevention</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
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

    <section class="corona_update">
        <div class="mb-3">
            <h3 class="text-uppercase text-center">Covid-19 Updates</h3>
        </div>
        <div class="d-flex justify-content-around align-items-center">
            <div>
                <h1 class="count">15,24,266</h1>
                <p>Passengers screened at airport</p>
            </div>
            <div>
                <h1 class="count">512</h1>
                <p>Active COVID-19 cases*</p>
            </div>
            <div>
                <h1 class="count">40</h1>
                <p>Cured/Discharge cases*</p>
            </div>
            <div>
                <h1 class="count">9</h1>
                <p>Death cases*</p>
            </div>
        </div>
    </section>
    .<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
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
    <div class="container-fluid pt-5 pb-5" id="aboutid">
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
</body>

</html>