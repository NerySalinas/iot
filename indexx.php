
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>About Us</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CPoppins:300,400,500,600,700%7CMuli:200,300,400,500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader" id="loading">
      <div class="preloader-body">
        <div id="loading-center-object">
          <div class="object" id="object_four"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_one"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="10px" data-xl-stick-up-offset="10px" data-xxl-stick-up-offset="10px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
               
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"> <a class="brand" href="index.html"><img src="images/icono3.jpg" alt="" width="199" height="41"/></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Inicio</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">Registros</a>
                  </li>
                </ul>
              </div>
             
              <div class="rd-navbar-dummy"></div>
            </div>
          </nav>
        </div>
      </header>
     
      <section class="section section-lg bg-gray-100 text-center" id="solutions">
        <div class="container">
          <h3 class="wow fadeIn" data-wow-delay=".1s">ÚLTIMOS REGISTROS ALMACENADOS</h3>
          <div class="row row-30 row-md-50 row-xl-60">
            <div class="col-sm-6 col-lg-4 wow fadeIn">
                    <?php
                    include '../bd_controller_local.php';
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
                    /* LA CONSULTA LIMITA A UN SOLO REGISTRO EN FORMA DESCENDENTE */
                    $sql = "SELECT * from registro ORDER BY IDRegistro DESC LIMIT 1  ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                      // output data of each row
                      echo "<ul>";
                      while($row = $result->fetch_assoc()) {
                        echo "<li> Registro: " . $row["IDRegistro"].  " Temperatura " . $row["Tem"]." Humedad " . $row["Hum"]." Riego: " . $row["Riego"]. "</li>";
                      }
                      echo "</ul>";
                    } else {
                      echo "0 results";
                    }
                    $conn->close();
                    ?php
              <!-- Box Modern-->
              <article class="box-modern" data-anime="circles-1">
                <div class="box-modern-media">
                  <div class="box-modern-icon mdi mdi-comment-text"></div>
                  <div class="box-modern-circle box-modern-circle-1"></div>
                  <div class="box-modern-circle box-modern-circle-2"></div>
                </div>
                <p class="box-modern-title">Temperatura</p>
                <div class="box-modern-text">
                  <p>Se muestra el último registro de temperatura que se tiene almacenado</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".1s">
              <!-- Box Modern-->
              <article class="box-modern box-modern_alternate" data-anime="circles-2">
                <div class="box-modern-media">
                  <div class="box-modern-icon mdi mdi-chart-pie"></div>
                  <div class="box-modern-circle box-modern-circle-1"></div>
                  <div class="box-modern-circle box-modern-circle-2"></div>
                </div>
                <p class="box-modern-title">Humedad</p>
                <div class="box-modern-text">
                  <p>Se muestra el último registro de humedad que se tiene almacenado</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
              <!-- Box Modern-->
              <article class="box-modern" data-anime="circles-1">
                <div class="box-modern-media">
                  <div class="box-modern-icon mdi mdi-basket"></div>
                  <div class="box-modern-circle box-modern-circle-1"></div>
                  <div class="box-modern-circle box-modern-circle-2"></div>
                </div>
                <p class="box-modern-title">Riego</p>
                <div class="box-modern-text">
                  <p>Se muestra si en el último registro el riego está encendido o apagado</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Counters-->
      <section class="section section-md text-center">
            
        <div class="container">
          <div class="layout-bordered-1">
            <div class="layout-bordered-1-item">
                    <h2>Valores</h2>
                    
                    <?php
                        include '../bd_controller_local.php';
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * from registro ORDER BY IDRegistro DESC LIMIT 1  ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            echo "<ul>";
                            while($row = $result->fetch_assoc()) {
                              echo "<li> Registro: " . $row["IDRegistro"]. " Usuario: " . $row["Fecha"]. " Temperatura " . $row["Tem"]." Humedad " . $row["Hum"]." Riego " . $row["Riego"]. "</li>";
                            }
                            echo "</ul>";
                          } else {
                            echo "0 results";
                          }
                          $conn->close();
            
            ?>
              <!-- Counter Classic-->
              
              <article class="counter-classic">
                <div class="counter-classic-main">
                  <div class="counter">78</div>
                </div>
                <h4 class="counter-classic-title">Temperatura</h4>
              </article>
            </div>
            <div class="layout-bordered-1-item">
              <!-- Counter Classic-->
              <article class="counter-classic">
                <div class="counter-classic-main">
                  <div class="counter">100</div><span class="small text-primary">%</span>
                </div>
                <h4 class="counter-classic-title">Humedad</h4>
              </article>
            </div>
            <div class="layout-bordered-1-item">
              <!-- Counter Classic-->
              <article class="counter-classic">
                <div class="counter-classic-main">
                  <div class="counter">3</div><span class="small text-primary">X</span>
                </div>
                <h4 class="counter-classic-title">Riego</h4>
              </article>
            </div>
          </div>
        </div>
      </section>
      <section class="breadcrumbs-custom">
          <section class="section parallax-container breadcrumbs-custom-main context-dark" data-parallax-img="images/tur.jpg">
            <div class="parallax-content">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-xl-9">
                    <h2 class="breadcrumbs-custom-title"></h2>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="breadcrumbs-custom-aside">
            <div class="container">
              <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Inicio</a></li>
                <li class="active">Registros</li>
              </ul>
            </div>
          </div>
        </section>
        <section class="section section-lg bg-gray-100 text-center" id="solutions">
        <div class="container">
            <h3 class="wow fadeIn" data-wow-delay=".1s">HISTORIAL DE REGISTROS</h3>
            <div class="row row-30 row-md-50 row-xl-60">
              </section>

      <!-- What We Do-->
     

  

      <!-- Page Footer--><a class="banner" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"></a>
      <footer class="section footer-classic">
        <div class="footer-classic-main">
          <div class="container">
            <div class="row row-50 justify-content-lg-between">
              <div class="col-sm-7 col-lg-3 col-xl-2"><a class="brand" href="index.html"><img src="images/icono3.jpg" alt="" width="199" height="41"/></a>
                <p><span style="max-width: 250px;"></span></p>
              </div>
              <div class="col-sm-5 col-lg-3 col-xl-2">
                <h4 class="footer-classic-title">About</h4>
                <ul class="list footer-classic-list">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Press and media</a></li>
                </ul>
              </div>
              <div class="col-sm-7 col-lg-5 col-xl-3">
                <h4 class="footer-classic-title">Quick Links</h4>
                <ul class="list footer-classic-list footer-classic-list_2-cols">
                  <li><a href="#">Sign Up</a></li>
                  <li><a href="#">Our Team</a></li>
                  <li><a href="#">Portfolio</a></li>
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Services</a></li>
                </ul>
              </div>
              <div class="col-sm-5 col-lg-9 col-xl-2">
                <h4 class="footer-classic-title">Contact Us</h4>
                <div class="row row-20 row-sm-35">
                  <div class="col-6 col-sm-12 col-lg-8 col-xl-12">
                    <div class="row row-10 text-default">
                      <div class="col-lg-6 col-xl-12"><a href="mailto:#">info@demolink.org</a></div>
                      <div class="col-lg-6 col-xl-12"><a class="big" href="tel:#">+1-853-234-65</a></div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-12 col-lg-4 col-xl-12 text-right text-sm-left">
                    <div class="group group-xs"><a class="link link-social-1 mdi mdi-twitter" href="#"></a><a class="link link-social-1 mdi mdi-facebook" href="#"></a><a class="link link-social-1 mdi mdi-instagram" href="#"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-classic-aside">
          <div class="container">
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved. Design by <a href="https://www.templatemonster.com">TemplateMonster</a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>