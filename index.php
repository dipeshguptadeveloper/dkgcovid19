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

</body>
</html>