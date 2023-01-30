<?php

if (isset($_POST['submit'])) {
  class classments
  {
    public $class;
    public $selection;
    public $PTS;
    public $PAR;
    public $GAN;
    public $EMP;
    public $PER;
    public $GF;
    public $GC;
    public $DEF;
    public function __construct($selection, $PTS, $PAR, $GAN, $EMP, $PER, $GF, $GC, $DEF)
    {
      $this->selection = $selection;
      $this->PTS = $PTS;
      $this->PAR = $PAR;
      $this->GAN = $GAN;
      $this->EMP = $EMP;
      $this->PER = $PER;
      $this->GF = $GF;
      $this->GC = $GC;
      $this->DEF = $DEF;
    }
  }
  $maroc = new classments("MAROC", 0, 0, 0, 0, 0, 0, 0, 0);
  $croatie = new classments("CROATIE", 0, 0, 0, 0, 0, 0, 0, 0);
  $belgique = new classments("BELGIQUE", 0, 0, 0, 0, 0, 0, 0, 0);
  $canada = new classments("CANADA", 0, 0, 0, 0, 0, 0, 0, 0);

  $maroc1 = $_POST["maroc1"];
  $croitie1 = $_POST["croitie1"];
  $belgique1 = $_POST["belgique1"];
  $canada1 = $_POST["canada1"];
  $belgique2 = $_POST["belgique2"];
  $maroc2 = $_POST["maroc2"];
  $canada2 = $_POST["canada2"];
  $croatie2 = $_POST["croatie2"];
  $canada3 = $_POST["canada3"];
  $maroc3 = $_POST["maroc3"];
  $croatie3 = $_POST["croatie3"];
  $belgique3 = $_POST["belgique3"];


  if ($maroc1 != "" && $croitie1 !== "") {
    if ($maroc1 > $croitie1) {
      $maroc->PAR++;
      $maroc->PTS += 3;
      $maroc->GAN++;
      $maroc->GF += $maroc1;
      $croatie->PAR++;
      $croatie->GF += $croitie1;
      $croatie->GC += $maroc1;
      $maroc->GC += $croitie1;
      $croatie->PER++;
      $maroc->DEF += $maroc1 - $croitie1;
      $croatie->DEF += $croitie1 - $maroc1;

    } elseif ($croitie1 > $maroc1) {
      $croatie->PAR++;
      $croatie->PTS += 3;
      $croatie->GAN++;
      $croatie->GF += $croitie1;
      $maroc->PAR++;
      $maroc->GF += $maroc1;
      $maroc->GC += $croitie1;
      $croatie->GC = $maroc1;
      $maroc->PER++;
      $croatie->DEF += $croitie1 - $maroc1;
      $maroc->DEF += $maroc1 - $croitie1;

    } else {
      $croatie->PTS++;
      $maroc->PTS++;
      $croatie->PAR++;
      $maroc->PAR++;
      $croatie->EMP++;
      $maroc->EMP++;
      $croatie->GF += $croitie1;
      $maroc->GF += $maroc1;
      $maroc->GC += $croitie1;
      $croatie->GC += $maroc1;

    }
    if ($belgique1 !== "" && $canada1 !== "") {
      if ($belgique1 > $canada1) {
        $belgique->PAR++;
        $belgique->PTS += 3;
        $belgique->GAN++;
        $belgique->GF += $belgique1;
        $canada->PAR++;
        $canada->GF += $canada1;
        $canada->GC += $belgique1;
        $belgique->GC += $canada1;
        $canada->PER++;
        $belgique->DEF += $belgique1 - $canada1;
        $canada->DEF += $canada1 - $belgique1;
      } elseif ($belgique1 < $canada1) {
        $canada->PAR++;
        $canada->PTS += 3;
        $canada->GAN++;
        $canada->GF += $canada1;
        $belgique->PAR++;
        $belgique->GF += $belgique1;
        $belgique->GC += $canada1;
        $canada->GC += $belgique1;
        $belgique->PER++;
        $canada->DEF += $canada1 - $belgique1;
        $belgique->DEF += $belgique1 - $canada1;
      } else {
        $canada->PTS++;
        $belgique->PTS++;
        $canada->PAR++;
        $belgique->PAR++;
        $canada->EMP++;
        $belgique->EMP++;
        $canada->GF += $canada1;
        $belgique->GF += $belgique1;
        $belgique->GC += $canada1;
        $canada->GC += $belgique1;
      }
    }
    if ($belgique2 !== "" && $maroc2 !== "") {
      if ($belgique2 > $maroc2) {
        $belgique->PAR++;
        $belgique->PTS += 3;
        $belgique->GAN++;
        $belgique->GF += $belgique2;
        $maroc->PAR++;
        $maroc->GF += $maroc2;
        $maroc->GC += $belgique2;
        $belgique->GC += $maroc2;
        $maroc->PER++;
        $belgique->DEF += $belgique2 - $maroc2;
        $maroc->DEF += $maroc2 - $belgique2;
      } elseif ($belgique2 < $maroc2) {
        $maroc->PAR++;
        $maroc->PTS += 3;
        $maroc->GAN++;
        $maroc->GF += $maroc2;
        $belgique->PAR++;
        $belgique->GF += $belgique2;
        $belgique->GC += $maroc2;
        $maroc->GC += $belgique2;
        $belgique->PER++;
        $maroc->DEF += $maroc2 - $belgique2;
        $belgique->DEF += $belgique2 - $maroc2;
      } else {
        $maroc->PTS++;
        $belgique->PTS++;
        $maroc->PAR++;
        $belgique->PAR++;
        $maroc->EMP++;
        $belgique->EMP++;
        $maroc->GF += $maroc2;
        $belgique->GF += $belgique2;
        $belgique->GC += $maroc2;
        $maroc->GC += $belgique2;
      }
    }
    if ($croatie2 !== "" && $canada2 !== "") {
      if ($croatie2 > $canada2) {
        $croatie->PAR++;
        $croatie->PTS += 3;
        $croatie->GAN++;
        $croatie->GF += $croatie2;
        $canada->PAR++;
        $canada->GF += $canada2;
        $canada->GC += $croatie2;
        $croatie->GC += $canada2;
        $canada->PER++;
        $croatie->DEF += $croatie2 - $canada2;
        $canada->DEF += $canada2 - $croatie2;
      } elseif ($croatie2 < $canada2) {
        $canada->PAR++;
        $canada->PTS += 3;
        $canada->GAN++;
        $canada->GF += $canada2;
        $croatie->PAR++;
        $croatie->GF += $croatie2;
        $croatie->GC += $canada2;
        $canada->GC += $croatie2;
        $croatie->PER++;
        $canada->DEF += $canada2 - $croatie2;
        $croatie->DEF += $croatie2 - $canada2;
      } else {
        $canada->PTS++;
        $croatie->PTS++;
        $canada->PAR++;
        $croatie->PAR++;
        $canada->EMP++;
        $croatie->EMP++;
        $canada->GF += $canada2;
        $croatie->GF += $croatie2;
        $croatie->GC += $canada2;
        $canada->GC += $croatie2;
      }
    }
    if ($maroc3 !== "" && $canada3 !== "") {
      if ($maroc3 > $canada3) {
        $maroc->PAR++;
        $maroc->PTS += 3;
        $maroc->GAN++;
        $maroc->GF += $maroc3;
        $canada->PAR++;
        $canada->GF += $canada3;
        $canada->GC += $maroc3;
        $maroc->GC += $canada3;
        $canada->PER++;
        $maroc->DEF += $maroc3 - $canada3;
        $canada->DEF += $canada3 - $maroc3;
      } elseif ($maroc3 < $canada3) {
        $canada->PAR++;
        $canada->PTS += 3;
        $canada->GAN++;
        $canada->GF += $canada3;
        $maroc->PAR++;
        $maroc->GF += $maroc3;
        $maroc->GC += $canada3;
        $canada->GC += $maroc3;
        $maroc->PER++;
        $canada->DEF += $canada3 - $maroc3;
        $maroc->DEF += $maroc3 - $canada3;
      } else {
        $canada->PTS++;
        $maroc->PTS++;
        $canada->PAR++;
        $maroc->PAR++;
        $canada->EMP++;
        $maroc->EMP++;
        $canada->GF += $canada3;
        $maroc->GF += $maroc3;
        $maroc->GC += $canada3;
        $canada->GC += $maroc3;
      }
    }
    if ($croatie3 !== "" && $belgique3 !== "") {
      if ($croatie3 > $belgique3) {
        $croatie->PAR++;
        $croatie->PTS += 3;
        $croatie->GAN++;
        $croatie->GF += $croatie3;
        $belgique->PAR++;
        $belgique->GF += $belgique3;
        $belgique->GC += $croatie3;
        $croatie->GC += $belgique3;
        $belgique->PER++;
        $croatie->DEF += $croatie3 - $belgique3;
        $belgique->DEF += $belgique3 - $croatie3;
      } elseif ($croatie3 < $belgique3) {
        $belgique->PAR++;
        $belgique->PTS += 3;
        $belgique->GAN++;
        $belgique->GF += $belgique3;
        $croatie->PAR++;
        $croatie->GF += $croatie3;
        $croatie->GC += $belgique3;
        $belgique->GC += $croatie3;
        $croatie->PER++;
        $belgique->DEF += $belgique3 - $croatie3;
        $croatie->DEF += $croatie3 - $belgique3;
      } else {
        $belgique->PTS++;
        $croatie->PTS++;
        $belgique->PAR++;
        $croatie->PAR++;
        $belgique->EMP++;
        $croatie->EMP++;
        $belgique->GF += $belgique3;
        $croatie->GF += $croatie3;
        $croatie->GC += $belgique3;
        $belgique->GC += $croatie3;
      }
    }

  } else {
    false;
  }

  $Equipes = array($maroc, $croatie, $belgique, $canada);

  usort($Equipes, function ($a, $b) {

    if ($b->PTS == $a->PTS) {

      if ($b->DEF == $a->DEF) {

        if ($b->GF == $a->GF) {

          return $a->GC <=> $b->GC;
        }
        return $b->GF <=> $a->GF;
      }
      return $b->DEF <=> $a->DEF;
    }

    return $b->PTS <=> $a->PTS;



  });


}
;


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Soccer &mdash;</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <style>
    #logo {
      width: 100px;
    }

    input {
      background-color: #ee2049;
      border: none;
      margin-top: 5px;
      text-align: Center;
      color: white;
      width: 40px;
      height: 50px;
      border-radius: 20px;
    }

    td {
      color: aliceblue;

    }

    .submit {
      align-items: center;
      width: 120px;
    }

      {
      margin-left: 25%;

    }

    #card {
      margin-left: 30%;
      border-radius: 20px;

    }
  </style>

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html">
              <img src="images/small_icon-wc-selected.webp" alt="Logo" id="logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">Matches</a></li>
                <li><a href="" class="nav-link">Players</a></li>
                <li><a href="" class="nav-link">Blog</a></li>
                <li><a href="" class="nav-link">Contact</a></li>
              </ul>
            </nav>

            <a href="#"
              class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 ml-auto">
            <h1 class="text-white">World Cup Event</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
            <div id="date-countdown"></div>
            <p>
              <a href="#" class="btn btn-primary py-3 px-4 mr-3">&copy; FIFA </a>
              <a href="#" class="more light">Learn More</a>
            </p>
          </div>
        </div>
      </div>
    </div>



    <div class="container">


      <div class="row">
        <div class="col-lg-12">

          <div class="d-flex team-vs">

            <div class="team-1 w-50">
              <div class="team-details w-100 text-center">
                <h4>Simulator Soccer 2022</h4>
              </div>
            </div>
            <div class="team-2 w-50">
              <div class="team-details w-100 text-center">
                <img src="images/small_icon-wc-selected.webp" alt="Image" class="img-fluid">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-dark">
      <form action="index.php" method="post" class="widget-next-match">
        <div class="widget-title">
          <h3>Match</h3>
        </div>
        <div class="widget-body mb-3 rounded-4" id="card">
          <div class="widget-vs" style="border-radius:40px">
            <div class="d-flex align-items-center justify-content-around justify-content-between w-50 bg-white">
              <div class="team-1 text-center">
                <img src="images/maroc.jfif" alt="Image">

                <input type="number" class="score" name="maroc1">
              </div>
              <div>
                <span class="vs"><span>VS</span></span>
              </div>
              <div class="team-2 text-center">
                <input type="number" class="score" name="croitie1">
                <img src="images/croatie.jfif" alt="Image">

              </div>
            </div>
          </div>
        </div>
        <div class="widget-body mb-3" id="card">
          <div class="widget-vs">
            <div class="d-flex align-items-center justify-content-around justify-content-between w-50 bg-white">
              <div class="team-1 text-center">
                <img src="images/belgique.jfif" alt="Image">

                <input type="number" class="score" name="belgique1">
              </div>
              <div>
                <span class="vs"><span>VS</span></span>
              </div>
              <div class="team-2 text-center">
                <input type="number" class="score" name="canada1">
                <img src="images/canada.jfif" alt="Image">

              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="widget-body mb-3" id="card">
          <div class="widget-vs">
            <div class="d-flex align-items-center justify-content-around justify-content-between w-50 bg-white">
              <div class="team-1 text-center">
                <img src="images/maroc.jfif" alt="Image">

                <input type="number" class="score" name="maroc2">
              </div>
              <div>
                <span class="vs"><span>VS</span></span>
              </div>
              <div class="team-2 text-center">
                <input type="number" class="score" name="belgique2">
                <img src="images/belgique.jfif" alt="Image">

              </div>
            </div>
          </div>
        </div>
        <div class="widget-body mb-3" id="card">
          <div class="widget-vs">
            <div class="d-flex align-items-center justify-content-around justify-content-between w-50 bg-white">
              <div class="team-1 text-center">
                <img src="images/croatie.jfif" alt="Image">

                <input type="number" class="score" name="croatie2">
              </div>
              <div>
                <span class="vs"><span>VS</span></span>
              </div>
              <div class="team-2 text-center">
                <input type="number" class="score" name="canada2">
                <img src="images/canada.jfif" alt="Image">

              </div>
            </div>
          </div>
        </div>
        <div class="widget-body mb-3" id="card">
          <div class="widget-vs">
            <div class="d-flex align-items-center justify-content-around justify-content-between w-50 bg-white">
              <div class="team-1 text-center">
                <img src="images/maroc.jfif" alt="Image">

                <input type="number" class="score" name="maroc3">
              </div>
              <div>
                <span class="vs"><span>VS</span></span>
              </div>
              <div class="team-2 text-center">
                <input type="number" class="score" name="canada3">
                <img src="images/canada.jfif" class="img-circle" alt="Image">

              </div>
            </div>
          </div>
        </div>
        <div class="widget-body mb-3" id="card">
          <div class="widget-vs">
            <div class="d-flex align-items-center justify-content-around justify-content-between w-50 bg-white">
              <div class="team-1 text-center">
                <img src="images/croatie.jfif" alt="Image">

                <input type="number" class="score" name="croatie3">
              </div>
              <div>
                <span class="vs"><span>VS</span></span>
              </div>
              <div class="team-2 text-center">
                <input type="number" class="score" name="belgique3">
                <img src="images/belgique.jfif" alt="Image">

              </div>
            </div>
          </div>
        </div>


        <input type="submit" value="Check" name="submit" class="submit active">


    </div>
    </form>
  </div>
  <div class="widget-title">
          <h3>Resultat</h3>
        </div>
  <div class="col-lg-9 align-items-center d-flex align-items-center justify-content-around w-400">


    <div class="widget-next-match">
      <table class="table custom-table">
        <thead>

          <tr>
            <th>cls</th>
            <th>Equipes</th>
            <th>PTS.</th>
            <th>PAR.</th>
            <th>GAN.</th>
            <th>EMP.</th>
            <th>PER.</th>
            <th>G.F.</th>
            <th>G.C.</th>
            <th>+/-</th>
          </tr>
        </thead>
        <tbody>
          <?php

          if (isset($_POST['submit'])) {
            $class = 1;
            foreach ($Equipes as $int) {
              echo "<tr>";
              echo "<td> " . $class++ . "</td>";
              echo "<td class='logoequipe'>" . $int->selection . "</td>";
              echo "<td>" . $int->PTS . "</td>";
              echo "<td>" . $int->PAR . "</td>";
              echo "<td>" . $int->GAN . "</td>";
              echo "<td>" . $int->EMP . "</td>";
              echo "<td>" . $int->PER . "</td>";
              echo "<td>" . $int->GF . "</td>";
              echo "<td>" . $int->GC . "</td>";
              echo "<td>" . $int->DEF . "</td>";
              echo "</tr>";
            }
            echo "</table>";
          }

          ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="latest-news">
    <div class="container">
      <div class="row">
        <div class="col-12 title-section">
          <h2 class="heading">Latest News</h2>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-md-4">
          <div class="post-entry">
            <a href="#">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="caption">
              <div class="caption-inner">
                <h3 class="mb-3">Romolu to stay at Real Nadrid?</h3>
                <div class="author d-flex align-items-center">
                  <div class="img mb-2 mr-3">
                    <img src="images/person_1.jpg" alt="">
                  </div>
                  <div class="text">
                    <h4>Mellissa Allison</h4>
                    <span>May 19, 2020 &bullet; Sports</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="post-entry">
            <a href="#">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="caption">
              <div class="caption-inner">
                <h3 class="mb-3">Kai Nets Double To Secure Comfortable Away Win</h3>
                <div class="author d-flex align-items-center">
                  <div class="img mb-2 mr-3">
                    <img src="images/person_1.jpg" alt="">
                  </div>
                  <div class="text">
                    <h4>Mellissa Allison</h4>
                    <span>May 19, 2020 &bullet; Sports</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="post-entry">
            <a href="#">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="caption">
              <div class="caption-inner">
                <h3 class="mb-3">Dogba set for Juvendu return?</h3>
                <div class="author d-flex align-items-center">
                  <div class="img mb-2 mr-3">
                    <img src="images/person_1.jpg" alt="">
                  </div>
                  <div class="text">
                    <h4>Mellissa Allison</h4>
                    <span>May 19, 2020 &bullet; Sports</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- .site-section -->


  <div class="container site-section">
    <div class="row">
      <div class="col-6 title-section">
        <h2 class="heading">Our Blog</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="custom-media d-flex">
          <div class="img mr-4">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="text">
            <span class="meta">May 20, 2020</span>
            <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
            <p><a href="#">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="custom-media d-flex">
          <div class="img mr-4">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="text">
            <span class="meta">May 20, 2020</span>
            <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
            <p><a href="#">Read more</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="widget mb-3">
            <h3>News</h3>
            <ul class="list-unstyled links">
              <li><a href="#">All</a></li>
              <li><a href="#">Club News</a></li>
              <li><a href="#">Media Center</a></li>
              <li><a href="#">Video</a></li>
              <li><a href="#">RSS</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="widget mb-3">
            <h3>Tickets</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Online Ticket</a></li>
              <li><a href="#">Payment and Prices</a></li>
              <li><a href="#">Contact &amp; Booking</a></li>
              <li><a href="#">Tickets</a></li>
              <li><a href="#">Coupon</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="widget mb-3">
            <h3>Matches</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Standings</a></li>
              <li><a href="#">World Cup</a></li>
              <li><a href="#">La Lega</a></li>
              <li><a href="#">Hyper Cup</a></li>
              <li><a href="#">World League</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="widget mb-3">
            <h3>Social</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Youtube</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-12">
          <div class=" pt-5">
            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved |
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <!-- .site-wrap -->
</body>

</html>