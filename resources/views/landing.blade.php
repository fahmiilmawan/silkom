<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />

    <!--====== Title ======-->
    <title>SILKOM - Landing Page</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/png"
    />

    <!--====== CSS Files LinkUp ======-->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/lineIcons.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>


    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->
    <header class="header-area">
      <div class="navbar-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html" style="color:white">
                  {{-- <img src="" alt="Logo" /> --}}
                  SILKOM

                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="toggler-icon"> </span>
                  <span class="toggler-icon"> </span>
                  <span class="toggler-icon"> </span>
                </button>

                <div
                  class="collapse navbar-collapse sub-menu-bar"
                  id="navbarSupportedContent"
                >
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="page-scroll active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#about">About</a>
                    </li>
                  </ul>
                </div>
                <!-- navbar collapse -->


              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->

      <div
        id="home"
        class="header-hero bg_cover"
        style="background-image: url(assets/images/header/banner-bg.svg)"
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="header-hero-content text-center">
                <h3
                  class="header-sub-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.2s"
                >
                  SILKOM
                </h3>
                <h2
                  class="header-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.5s"
                >
                  SISTEM INFORMASI LAB KOMPUTER
                </h2>
                <p
                  class="text wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                >
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                  diam nonumy eirmod tempor
                </p>
                <a
                  href="{{ route('loginPage') }}"
                  class="main-btn wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="1.1s"
                >
                  Get Started
                </a>
              </div>
              <!-- header hero content -->
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-lg-12">
              <div
                class="header-hero-image text-center wow fadeIn"
                data-wow-duration="1.3s"
                data-wow-delay="1.4s"
              >
                <img src="assets/images/header/header-hero.png" alt="hero" />
              </div>
              <!-- header hero image -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
        <div id="particles-1" class="particles"></div>
      </div>
      <!-- header hero -->
    </header>
    <!--====== HEADER PART ENDS ======-->



    <!--====== SERVICES PART START ======-->
    <section id="features" class="services-area pt-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="section-title text-center pb-40">
              <div class="line m-auto"></div>
              <h3 class="title">
                Clean and simple design,
                <span> Comes with everything you need to get started!</span>
              </h3>
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-7 col-sm-8">
            <div
              class="single-services text-center mt-30 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.2s"
            >
              <div class="services-icon">
                <img
                  class="shape"
                  src="assets/images/services/services-shape.svg"
                  alt="shape"
                />
                <img
                  class="shape-1"
                  src="assets/images/services/services-shape-1.svg"
                  alt="shape"
                />
                <i class="lni lni-baloon"> </i>
              </div>
              <div class="services-content mt-30">
                <h4 class="services-title">
                  <a href="javascript:void(0)">Clean</a>
                </h4>
                <p class="text">
                  Lorem ipsum dolor sit amet,consetetur sadipscing elitr,
                  seddiam nonu eirmod tempor invidunt labore.
                </p>
                <a class="more" href="javascript:void(0)"
                  >Learn More <i class="lni lni-chevron-right"> </i>
                </a>
              </div>
            </div>
            <!-- single services -->
          </div>
          <div class="col-lg-4 col-md-7 col-sm-8">
            <div
              class="single-services text-center mt-30 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <div class="services-icon">
                <img
                  class="shape"
                  src="assets/images/services/services-shape.svg"
                  alt="shape"
                />
                <img
                  class="shape-1"
                  src="assets/images/services/services-shape-2.svg"
                  alt="shape"
                />
                <i class="lni lni-cog"> </i>
              </div>
              <div class="services-content mt-30">
                <h4 class="services-title">
                  <a href="javascript:void(0)">Robust</a>
                </h4>
                <p class="text">
                  Lorem ipsum dolor sit amet,consetetur sadipscing elitr,
                  seddiam nonu eirmod tempor invidunt labore.
                </p>
                <a class="more" href="javascript:void(0)"
                  >Learn More <i class="lni lni-chevron-right"> </i>
                </a>
              </div>
            </div>
            <!-- single services -->
          </div>
          <div class="col-lg-4 col-md-7 col-sm-8">
            <div
              class="single-services text-center mt-30 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.8s"
            >
              <div class="services-icon">
                <img
                  class="shape"
                  src="assets/images/services/services-shape.svg"
                  alt="shape"
                />
                <img
                  class="shape-1"
                  src="assets/images/services/services-shape-3.svg"
                  alt="shape"
                />
                <i class="lni lni-bolt-alt"> </i>
              </div>
              <div class="services-content mt-30">
                <h4 class="services-title">
                  <a href="javascript:void(0)">Powerful</a>
                </h4>
                <p class="text">
                  Lorem ipsum dolor sit amet,consetetur sadipscing elitr,
                  seddiam nonu eirmod tempor invidunt labore.
                </p>
                <a class="more" href="javascript:void(0)"
                  >Learn More <i class="lni lni-chevron-right"> </i>
                </a>
              </div>
            </div>
            <!-- single services -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>
    <!--====== SERVICES PART ENDS ======-->

    <section id="about">
      <!--====== ABOUT PART START ======-->
      <div class="about-area pt-70">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div
                class="about-content mt-50 wow fadeInLeftBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <div class="section-title">
                  <div class="line"></div>
                  <h3 class="title">
                    Quick & Easy <span>to Use Bootstrap Template</span>
                  </h3>
                </div>
                <!-- section title -->
                <p class="text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                  nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit amet, consetetur sadipscing.
                </p>
                <a href="javascript:void(0)" class="main-btn">Try it Free</a>
              </div>
              <!-- about content -->
            </div>
            <div class="col-lg-6">
              <div
                class="about-image text-center mt-50 wow fadeInRightBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <img src="assets/images/about/about1.svg" alt="about" />
              </div>
              <!-- about image -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
          <img src="assets/images/about/about-shape-1.svg" alt="shape" />
        </div>
      </div>
      <!--====== ABOUT PART ENDS ======-->

      <!--====== ABOUT PART START ======-->
      <div class="about-area pt-70">
        <div class="about-shape-2">
          <img src="assets/images/about/about-shape-2.svg" alt="shape" />
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-last">
              <div
                class="about-content ms-lg-auto mt-50 wow fadeInLeftBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <div class="section-title">
                  <div class="line"></div>
                  <h3 class="title">
                    Modern design <span> with Essential Features</span>
                  </h3>
                </div>
                <!-- section title -->
                <p class="text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                  nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit amet, consetetur sadipscing.
                </p>
                <a href="javascript:void(0)" class="main-btn">Try it Free</a>
              </div>
              <!-- about content -->
            </div>
            <div class="col-lg-6 order-lg-first">
              <div
                class="about-image text-center mt-50 wow fadeInRightBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <img src="assets/images/about/about2.svg" alt="about" />
              </div>
              <!-- about image -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!--====== ABOUT PART ENDS ======-->

      <!--====== ABOUT PART START ======-->
      <div class="about-area pt-70">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div
                class="about-content mt-50 wow fadeInLeftBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <div class="section-title">
                  <div class="line"></div>
                  <h3 class="title">
                    <span>Crafted for</span> SaaS, App and Software Landing Page
                  </h3>
                </div>
                <!-- section title -->
                <p class="text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                  nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit amet, consetetur sadipscing.
                </p>
                <a href="javascript:void(0)" class="main-btn">Try it Free</a>
              </div>
              <!-- about content -->
            </div>
            <div class="col-lg-6">
              <div
                class="about-image text-center mt-50 wow fadeInRightBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <img src="assets/images/about/about3.svg" alt="about" />
              </div>
              <!-- about image -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
          <img src="assets/images/about/about-shape-1.svg" alt="shape" />
        </div>
      </div>
      <!--====== ABOUT PART ENDS ======-->
    </section>

    <!--====== FOOTER PART START ======-->
    <footer id="footer" class="footer-area pt-120">
      <div class="container">
        <!-- subscribe area -->
        <div class="footer-widget pb-100 mt-100">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8">
              <div
                class="footer-about mt-50 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
              >
                <a class="logo" href="javascript:void(0)" style="color: white;font-size: 60px">
                  {{-- <img src="assets/images/logo/logo.svg" alt="logo" /> --}}
                  SILKOM
                </a>
                <p class="text">
                  Lorem ipsum dolor sit amet consetetur sadipscing elitr,
                  sederfs diam nonumy eirmod tempor invidunt ut labore et dolore
                  magna aliquyam.
                </p>
                <ul class="social">
                  <li>
                    <a href="javascript:void(0)">
                      <i class="lni lni-facebook-filled"> </i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="lni lni-twitter-filled"> </i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="lni lni-instagram-filled"> </i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="lni lni-linkedin-original"> </i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- footer about -->
            </div>

            <div class="col-lg-3 col-md-5 col-sm-12">
              <div
                class="footer-contact mt-50 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.8s"
              >
                <div class="footer-title">
                  <h4 class="title">Contact Us</h4>
                </div>
                <ul class="contact">
                  <li>+8092725xxxx</li>
                  <li>info@gmail.com</li>
                  <li>www.yourweb.com</li>
                  <li>
                    123 Street Bandung , Bandung <br />
                    Indonesia
                  </li>
                </ul>
              </div>
              <!-- footer contact -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- footer widget -->
        <div class="footer-copyright">
          <div class="row">
            <div class="col-lg-12">
              <div class="copyright d-sm-flex justify-content-between">
                <div class="copyright-content">
                  <p class="text">
                    Designed and Developed by
                    <a href="" rel="nofollow">Fahmi Ilmawan</a>
                  </p>
                </div>
                <!-- copyright content -->
              </div>
              <!-- copyright -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- footer copyright -->
      </div>
      <!-- container -->
      <div id="particles-2"></div>
    </footer>
    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"> <i class="lni lni-chevron-up"> </i> </a>
    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Javascript Files ======-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
