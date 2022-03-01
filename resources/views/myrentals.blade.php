<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Renten - Car Rental Service HTML Template</title>
  <!-- site favicon -->
    @include('csslink')
</head>
<body>

  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->   

  <!--  header-section start  -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <ul class="social-links">
              <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="header-info d-flex justify-content-center">
              <li>
                <i class="fa fa-map-marker"></i>
                <p>Benin, Abomey-Calavi / UAC</p>
              </li>
              <li>
                <i class="fa fa-clock-o"></i>
                <p>Mon - Fri Day 08:00 am - 5.00 pm</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-3">
            <div class="header-action d-flex align-items-center justify-content-end">
              <div class="login-reg">
                  <a href="registration.html">Sign Up</a>
                  <a href="login.html">Sign in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
          <a class="site-logo site-title" href="index.html"><img src="assets/images/logo1.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu mr-auto">
              <li><a href="index.html">Home</a></li>
              <li><a href="cars-list.html">cars</a>
              <li><a href="history.html">My rentals</a></li>
              <li><a href="contact.html">contact us</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div><!-- header-bottom end -->
  </header>
  <!--  header-section end  -->

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">History of my rentals</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li>Rentals</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- features-section start -->
  <section class="blog-section pb-120 pt-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">History of my rentals</h2>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-4 col-sm-6">
          <div class="post-item shadow-none">
            <div class="thumb">
              <img src="assets/images/cars/1.jpg" alt="image">
              <a href="#0" class="post-date">16<br>Dec</a>
            </div>
            <div class="content">
              <div style="display: flex; flex-direction: row; justify-content:space-between;">
                <h3 class="post-title pb-2">Mistubisshi</h3>
                <h4 style="color: green;">Render</h4>
              </div>
              <a href="history-details.html" class="border-btn">read more</a>
            </div>
          </div>
        </div><!-- post-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="post-item shadow-none">
            <div class="thumb">
              <img src="assets/images/cars/1.jpg" alt="image">
              <a href="#0" class="post-date">16<br>Dec</a>
            </div>
            <div class="content">
              <div style="display: flex; flex-direction: row; justify-content:space-between;">
                <h3 class="post-title pb-2">Porche</h3>
                <h4 style="color: rgb(194, 94, 12);">Waiting</h4>
              </div>
              <a href="history-details.html" class="border-btn">read more</a>
            </div>
          </div>
        </div><!-- post-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="post-item shadow-none">
            <div class="thumb">
              <img src="assets/images/cars/1.jpg" alt="image">
              <a href="#0" class="post-date">16<br>Dec</a>
            </div>
            <div class="content">
              <div style="display: flex; flex-direction: row; justify-content:space-between;">
                <h3 class="post-title pb-2">Mistubisshi</h3>
                <h4 style="color: rgb(0, 51, 128);">In use</h4>
              </div>
              <a href="history-details.html" class="border-btn">read more</a>
            </div>
          </div>
        </div><!-- post-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="post-item shadow-none">
            <div class="thumb">
              <img src="assets/images/cars/1.jpg" alt="image">
              <a href="#0" class="post-date">16<br>Dec</a>
            </div>
            <div class="content">
              <div style="display: flex; flex-direction: row; justify-content:space-between;">
                <h3 class="post-title pb-2">Mistubisshi</h3>
                <h4 style="color: green;">Render</h4>
              </div>
              <a href="history-details.html" class="border-btn">read more</a>
            </div>
          </div>
        </div><!-- post-item end -->
      </div>
    </div>
  </section>
  <!-- features-section end -->

  <!-- choose-car-section start -->
  <section class="choose-car-section section-bg pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">The Best Rent Cars</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="choose-car-slider-two owl-carousel">
            <div class="car-item border-none">
              <div class="thumb">
                <img src="assets/images/cars/s1.jpg" alt="image">
                <a href="#0" class="cmn-btn">rent now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="assets/images/cars/s2.jpg" alt="image">
                <a href="#0" class="cmn-btn">rent now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="assets/images/cars/s3.jpg" alt="image">
                <a href="#0" class="cmn-btn">rent now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="assets/images/cars/s4.jpg" alt="image">
                <a href="#0" class="cmn-btn">rent now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="assets/images/cars/s1.jpg" alt="image">
                <a href="#0" class="cmn-btn">rent now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="assets/images/cars/s2.jpg" alt="image">
                <a href="#0" class="cmn-btn">rent now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- choose-car-section end -->

  <!-- footer-section start -->
  <footer class="footer-section">
    <div class="footer-top pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-8">
            <div class="footer-widget widget-about">
              <div class="widget-about-content">
                <a href="index.html" class="footer-logo"><img src="assets/images/logo-footer.png" alt="logo"></a>
                <p>Lorem ipsum dolor sit amet, congue placeranec. Leo faucibus sed eleifend bibendum </p>
                <ul class="social-links">
                  <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4">
            <div class="footer-widget widget-menu">
              <h4 class="widget-title">our cars</h4>
              <ul>
                <li><a href="#0">mistubishi lancer</a></li>
                <li><a href="#0">forester subar</a></li>
                <li><a href="#0">mirage ange</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4">
            <div class="footer-widget widget-menu">
              <h4 class="widget-title">useful link</h4>
              <ul>
                <li><a href="#0">search</a></li>
                <li><a href="#0">contact</a></li>
                <li><a href="#0">car list</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-sm-8">
            <div class="footer-widget widget-address">
              <h4 class="widget-title">contact with us</h4>
              <ul>
                <li>
                  <i class="fa fa-map-marker"></i>
                  <span>Benin, Abomey-Clavi / UAC </span>
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  <span>abc@email.com</span>
                </li>
                <li>
                  <i class="fa fa-phone-square"></i>
                  <span>+229 53695874</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer-section end -->
  
  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

    @include("jslink")
</body>

</html>