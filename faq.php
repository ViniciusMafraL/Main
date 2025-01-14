<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Landing Page Templaaaate</title>
  <link rel="shortcut icon" href="image/Logo.svg" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="fonts/icon-font/css/style.css">
  <link rel="stylesheet" href="fonts/typography-font/typo.css">
  <link rel="stylesheet" href="fonts/fontawesome-5/css/all.css">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="plugins/aos/aos.min.css">
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="plugins/slick/slick.min.css">
  <link rel="stylesheet" href="plugins/ui-range-slider/jquery-ui.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="css/main.css">
  <!-- Custom stylesheet -->
</head>

<body>
  <div class="site-wrapper overflow-hidden ">
    <!-- Header start  -->
    <!-- Header Area -->
    <header class="site-header site-header--menu-right bg-default py-7 py-lg-0 site-header--absolute site-header--sticky">
      <div class="container">
        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="./index.html">
              <!-- light version logo (logo must be black)-->
              <img src="image/logo-main-black.png" alt="" class="light-version-logo default-logo">
              <!-- Dark version logo (logo must be White)-->
              <img src="image/logo-main-white.png" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="mobile-menu">
            <div class="navbar-nav-wrapper">
              <ul class="navbar-nav main-menu">
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <i class="icon icon-small-down"></i></a>
                  <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="drop-menu-item">
                      <a href="home-1.html">
                        Homepage 01
                      </a>
                    </li>
                    <li class="drop-menu-item">
                      <a href="home-2.html">
                        Homepage 02
                      </a>
                    </li>
                    <li class="drop-menu-item">
                      <a href="home-3.html">
                        Homepage 03
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown2" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="icon icon-small-down"></i></a>
                  <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Job Pages
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                        <li class="drop-menu-item">
                          <a href="./search-grid.html">
                            Job Grid
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./search-list-1.html">
                            Job List
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./jobdetails.html">
                            Job Details
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown21" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dashboard
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown21">
                        <li class="drop-menu-item">
                          <a href="./dashboard-main.html">
                            Dashboard Main
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./dashboard-settings.html">
                            Settings
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./dashboard-posted-applicants.html">
                            Applicants
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./dashboard-posted-applicants.html">
                            Posted Jobs
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown25g" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Candidate Pages
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown25g">
                        <li class="drop-menu-item">
                          <a href="./candidate-profile-main.html">
                            Candidate Profile
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./candidate-profile.html">
                            Candidate Profile 02
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Search Pages
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                        <li class="drop-menu-item">
                          <a href="./search-grid.html">
                            Search Grid
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./search-list-1.html">
                            Search List 01
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./search-list-2.html">
                            Search List 02
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item">
                      <a href="./company-profile.html">
                        Company Profile
                      </a>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                        <li class="drop-menu-item">
                          <a href="javacript:" data-toggle="modal" data-target="#login">
                            Sign In
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="javacript:" data-toggle="modal" data-target="#signup">
                            Sign Up
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown26" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Essential
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown26">
                        <li class="drop-menu-item">
                          <a href="faq.html">
                            Faq
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./error-404.html">
                            404
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./pricing-page.html">
                            Pricing page
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./contact.html">Contact</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Support</a>
                </li>
              </ul>
            </div>
            <button class="d-block d-lg-none offcanvas-btn-close focus-reset" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
              <i class="gr-cross-icon"></i>
            </button>
          </div>
          <div class="header-btns header-btn-devider ml-auto pr-2 ml-lg-6 d-none d-xs-flex">
            <a class="btn btn-transparent text-uppercase font-size-3 heading-default-color focus-reset" href="javacript:" data-toggle="modal" data-target="#login">
              Log in
            </a>
            <a class="btn btn-primary text-uppercase font-size-3" href="javacript:" data-toggle="modal" data-target="#signup">
              Sign up
            </a>
          </div>
          <!-- Mobile Menu Hamburger-->
          <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <i class="icon icon-simple-remove icon-close"></i> -->
            <span class="hamburger hamburger--squeeze js-hamburger">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
            </span>
          </button>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!-- Login Modal -->
    <div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper" data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
          <div class="row no-gutters">
            <div class="col-lg-5 col-md-6">
              <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                <div class="pb-9">
                  <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                    Welcome Back
                  </h3>
                  <p class="mb-0 font-size-4 text-white">Log in to continue your account
                    and explore new jobs.</p>
                </div>
                <div class="border-top border-default-color-2 mt-auto">
                  <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">
                    <div class="pt-5 px-9">
                      <h3 class="font-size-7 text-white">
                        295
                      </h3>
                      <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New jobs
                        posted today</p>
                    </div>
                    <div class="pt-5 px-9">
                      <h3 class="font-size-7 text-white">
                        14
                      </h3>
                      <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New companies
                        registered</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-6">
              <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                <div class="row">
                  <div class="col-4 col-xs-12">
                    <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-allports h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-linkedin pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with LinkedIn</span></a>
                  </div>
                  <div class="col-4 col-xs-12">
                    <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with Google</span></a>
                  </div>
                  <div class="col-4 col-xs-12">
                    <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with Facebook</span></a>
                  </div>
                </div>
                <div class="or-devider">
                  <span class="font-size-3 line-height-reset ">Or</span>
                </div>
                <form action="/">
                  <div class="form-group">
                    <label for="email" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                    <input type="email" class="form-control" placeholder="example@gmail.com" id="email">
                  </div>
                  <div class="form-group">
                    <label for="password" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                    <div class="position-relative">
                      <input type="password" class="form-control" id="password" placeholder="Enter password">
                      <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password"></a>
                    </div>
                  </div>
                  <div class="form-group d-flex flex-wrap justify-content-between">
                    <label for="terms-check" class="gr-check-input d-flex  mr-3">
                      <input class="d-none" type="checkbox" id="terms-check">
                      <span class="checkbox mr-5"></span>
                      <span class="font-size-3 mb-0 line-height-reset mb-1 d-block">Remember password</span>
                    </label>
                    <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                  </div>
                  <div class="form-group mb-8">
                    <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Log in </button>
                  </div>
                  <p class="font-size-4 text-center heading-default-color">Don’t have an account? <a href="" class="text-primary">Create a free account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sign Up Modal -->
    <div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-n6 mr-lg-n6 focus-reset shadow-10" data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
          <div class="row no-gutters">
            <div class="col-lg-5 col-md-6">
              <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                <div class="pb-9">
                  <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                    Create a free account today
                  </h3>
                  <p class="mb-0 font-size-4 text-white">Create your account to continue
                    and explore new jobs.</p>
                </div>
                <div class="border-top border-default-color-2 mt-auto">
                  <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">
                    <div class="pt-5 px-9">
                      <h3 class="font-size-7 text-white">
                        295
                      </h3>
                      <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New jobs
                        posted today</p>
                    </div>
                    <div class="pt-5 px-9">
                      <h3 class="font-size-7 text-white">
                        14
                      </h3>
                      <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New companies
                        registered</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-6">
              <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                <div class="row">
                  <div class="col-4 col-xs-12">
                    <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-allports h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-linkedin pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from LinkedIn</span></a>
                  </div>
                  <div class="col-4 col-xs-12">
                    <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from Google</span></a>
                  </div>
                  <div class="col-4 col-xs-12">
                    <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from Facebook</span></a>
                  </div>
                </div>
                <div class="or-devider">
                  <span class="font-size-3 line-height-reset">Or</span>
                </div>
                <form action="/">
                  <div class="form-group">
                    <label for="email2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                    <input type="email" class="form-control" placeholder="example@gmail.com" id="email2">
                  </div>
                  <div class="form-group">
                    <label for="password2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                    <div class="position-relative">
                      <input type="password" class="form-control" id="password2" placeholder="Enter password">
                      <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password2"></a>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password23" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Confirm Password</label>
                    <div class="position-relative">
                      <input type="password" class="form-control" id="password23" placeholder="Enter password">
                      <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password23"></a>
                    </div>
                  </div>
                  <div class="form-group d-flex flex-wrap justify-content-between mb-1">
                    <label for="terms-check2" class="gr-check-input d-flex  mr-3">
                      <input class="d-none" type="checkbox" id="terms-check2">
                      <span class="checkbox mr-5"></span>
                      <span class="font-size-3 mb-0 line-height-reset d-block">Agree to the <a href="" class="text-primary">Terms & Conditions</a></span>
                    </label>
                    <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                  </div>
                  <div class="form-group mb-8">
                    <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Sign Up </button>
                  </div>
                  <p class="font-size-4 text-center heading-default-color">Don’t have an account? <a href="" class="text-primary">Create a free account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header start end -->
    <!-- jobDetails-section -->
    <div class="jobDetails-section bg-default pt-md-30 pt-sm-25 pt-23 pb-md-27 pb-sm-20 pb-17">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-md-7 pr-xl-15" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="">
              <h3 class="font-size-9 font-weight-bold mb-7 mb-lg-13">Frequently Asked Questions</h3>
              <p class="font-size-4 mb-2">Not seeing your question here?</p>
              <a href="#" class="font-size-3 font-weight-bold text-green text-uppercase">Chat with us</a>
            </div>
          </div>
          <div class="col-xl-6 col-md-11" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="faq-content pt-lg-4 pt-6">
              <div class="accordion rounded-10 border-green border-top-5 pl-1" id="accordionExample">
                <div class="border-bottom overflow-hidden">
                  <div class="mb-0 border-bottom-0" id="heading2-1">
                    <button class="btn-reset font-size-5 font-weight-semibold text-left px-0 pb-6 pt-7 accordion-trigger arrow-icon w-100 border-left-0 border-right-0 focus-reset mt-n2" type="button" data-toggle="collapse" data-target="#collapse2-1" aria-expanded="true" aria-controls="collapse2-1">
                      How does the Jobium.com work?
                    </button>
                  </div>
                  <div id="collapse2-1" class="collapse pr-7 show" aria-labelledby="heading2-1" data-parent="#accordionExample">
                    <div class="mt-n3 font-size-4 text-gray font-weight-normal pb-7 pr-7 pt-6">
                      Yes. You can cancel your subscription anytime. Your subscription will continue to be active until the end of your current
                      term (month or year) but it will not auto-renew. Unless you delete your account manually, your account and all
                      data will be deleted 60 days from the day your subscription becomes inactive.
                    </div>
                  </div>
                </div>
                <div class="border-bottom overflow-hidden">
                  <div class="mb-0 border-bottom-0" id="heading2-2">
                    <button class="btn-reset font-size-5 font-weight-semibold text-left px-0 pb-6 pt-7 accordion-trigger arrow-icon w-100 border-left-0 border-right-0 focus-reset mt-n2" type="button" data-toggle="collapse" data-target="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
                      Do you offer non-profit and educational discounts?
                    </button>
                  </div>
                  <div id="collapse2-2" class="collapse pr-7" aria-labelledby="heading2-2" data-parent="#accordionExample">
                    <div class="mt-n3 font-size-4 text-gray font-weight-normal pb-7 pr-7 pt-6">
                      Yes. You can cancel your subscription anytime. Your subscription will continue to be active until the end of your current
                      term (month or year) but it will not auto-renew. Unless you delete your account manually, your account and all
                      data will be deleted 60 days from the day your subscription becomes inactive.
                    </div>
                  </div>
                </div>
                <div class="border-bottom overflow-hidden">
                  <div class="mb-0 border-bottom-0" id="heading2-3">
                    <button class="btn-reset font-size-5 font-weight-semibold text-left px-0 pb-6 pt-7 accordion-trigger arrow-icon w-100 border-left-0 border-right-0 focus-reset mt-n2" type="button" data-toggle="collapse" data-target="#collapse2-3" aria-expanded="false" aria-controls="collapse2-3">
                      Can I cancel my subscription anytime?
                    </button>
                  </div>
                  <div id="collapse2-3" class="collapse pr-7" aria-labelledby="heading2-3" data-parent="#accordionExample">
                    <div class="mt-n3 font-size-4 text-gray font-weight-normal pb-7 pr-7 pt-6">
                      Yes. You can cancel your subscription anytime. Your subscription will continue to be active until the end of your current
                      term (month or year) but it will not auto-renew. Unless you delete your account manually, your account and all
                      data will be deleted 60 days from the day your subscription becomes inactive.
                    </div>
                  </div>
                </div>
                <div class="border-bottom overflow-hidden">
                  <div class="mb-0 border-bottom-0" id="heading2-4">
                    <button class="btn-reset font-size-5 font-weight-semibold text-left px-0 pb-6 pt-7 accordion-trigger arrow-icon w-100 border-left-0 border-right-0 focus-reset mt-n2" type="button" data-toggle="collapse" data-target="#collapse2-4" aria-expanded="false" aria-controls="collapse2-4">
                      How does the Jobium.com work?
                    </button>
                  </div>
                  <div id="collapse2-4" class="collapse pr-7" aria-labelledby="heading2-4" data-parent="#accordionExample">
                    <div class="mt-n3 font-size-4 text-gray font-weight-normal pb-7 pr-7 pt-6">
                      Yes. You can cancel your subscription anytime. Your subscription will continue to be active until the end of your current
                      term (month or year) but it will not auto-renew. Unless you delete your account manually, your account and all
                      data will be deleted 60 days from the day your subscription becomes inactive.
                    </div>
                  </div>
                </div>
                <div class="border-bottom overflow-hidden">
                  <div class="mb-0 border-bottom-0" id="heading2-5">
                    <button class="btn-reset font-size-5 font-weight-semibold text-left px-0 pb-6 pt-7 accordion-trigger arrow-icon w-100 border-left-0 border-right-0 focus-reset mt-n2" type="button" data-toggle="collapse" data-target="#collapse2-5" aria-expanded="false" aria-controls="collapse2-5">
                      How does the Jobium.com work?
                    </button>
                  </div>
                  <div id="collapse2-5" class="collapse pr-7" aria-labelledby="heading2-5" data-parent="#accordionExample">
                    <div class="mt-n3 font-size-4 text-gray font-weight-normal pb-7 pr-7 pt-6">
                      Yes. You can cancel your subscription anytime. Your subscription will continue to be active until the end of your current
                      term (month or year) but it will not auto-renew. Unless you delete your account manually, your account and all
                      data will be deleted 60 days from the day your subscription becomes inactive.
                    </div>
                  </div>
                </div>
                <div class="border-bottom overflow-hidden">
                  <div class="mb-0 border-bottom-0" id="heading2-6">
                    <button class="btn-reset font-size-5 font-weight-semibold text-left px-0 pb-6 pt-7 accordion-trigger arrow-icon w-100 border-left-0 border-right-0 focus-reset mt-n2" type="button" data-toggle="collapse" data-target="#collapse2-6" aria-expanded="false" aria-controls="collapse2-6">
                      Do you offer non-profit and educational discounts?
                    </button>
                  </div>
                  <div id="collapse2-6" class="collapse pr-7" aria-labelledby="heading2-6" data-parent="#accordionExample">
                    <div class="mt-n3 font-size-4 text-gray font-weight-normal pb-7 pr-7 pt-6">
                      Yes. You can cancel your subscription anytime. Your subscription will continue to be active until the end of your current
                      term (month or year) but it will not auto-renew. Unless you delete your account manually, your account and all
                      data will be deleted 60 days from the day your subscription becomes inactive.
                    </div>
                  </div>
                </div>
                <div class="border-bottom overflow-hidden">
                  <div class="mb-0 border-bottom-0" id="heading2-7">
                    <button class="btn-reset font-size-5 font-weight-semibold text-left px-0 pb-6 pt-7 accordion-trigger arrow-icon w-100 border-left-0 border-right-0 focus-reset mt-n2" type="button" data-toggle="collapse" data-target="#collapse2-7" aria-expanded="false" aria-controls="collapse2-7">
                      Can I cancel my subscription anytime?
                    </button>
                  </div>
                  <div id="collapse2-7" class="collapse pr-7" aria-labelledby="heading2-7" data-parent="#accordionExample">
                    <div class="mt-n3 font-size-4 text-gray font-weight-normal pb-7 pr-7 pt-6">
                      Yes. You can cancel your subscription anytime. Your subscription will continue to be active until the end of your current
                      term (month or year) but it will not auto-renew. Unless you delete your account manually, your account and all
                      data will be deleted 60 days from the day your subscription becomes inactive.
                    </div>
                  </div>
                </div>
                <div class="border-bottom overflow-hidden">
                  <div class="mb-0 border-bottom-0" id="heading2-8">
                    <button class="btn-reset font-size-5 font-weight-semibold text-left px-0 pb-6 pt-7 accordion-trigger arrow-icon w-100 border-left-0 border-right-0 focus-reset mt-n2" type="button" data-toggle="collapse" data-target="#collapse2-8" aria-expanded="false" aria-controls="collapse2-8">
                      How does the Jobium.com work?
                    </button>
                  </div>
                  <div id="collapse2-8" class="collapse pr-7" aria-labelledby="heading2-8" data-parent="#accordionExample">
                    <div class="mt-n3 font-size-4 text-gray font-weight-normal pb-7 pr-7 pt-6">
                      Yes. You can cancel your subscription anytime. Your subscription will continue to be active until the end of your current
                      term (month or year) but it will not auto-renew. Unless you delete your account manually, your account and all
                      data will be deleted 60 days from the day your subscription becomes inactive.
                    </div>
                  </div>
                </div>
                <div class="border-bottom overflow-hidden">
                  <div class="mb-0 border-bottom-0" id="heading2-9">
                    <button class="btn-reset font-size-5 font-weight-semibold text-left px-0 pb-6 pt-7 accordion-trigger arrow-icon w-100 border-left-0 border-right-0 focus-reset mt-n2" type="button" data-toggle="collapse" data-target="#collapse2-9" aria-expanded="false" aria-controls="collapse2-9">
                      Do you offer non-profit and educational discounts?
                    </button>
                  </div>
                  <div id="collapse2-9" class="collapse pr-7" aria-labelledby="heading2-9" data-parent="#accordionExample">
                    <div class="mt-n3 font-size-4 text-gray font-weight-normal pb-7 pr-7 pt-6">
                      Yes. You can cancel your subscription anytime. Your subscription will continue to be active until the end of your current
                      term (month or year) but it will not auto-renew. Unless you delete your account manually, your account and all
                      data will be deleted 60 days from the day your subscription becomes inactive.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer area function start -->
    <!-- cta section -->
    <footer class="footer bg-ebony-clay dark-mode-texts">
      <div class="container">
        <!-- Cta section -->
        <div class="pt-11 pt-lg-20 pb-13 pb-lg-20 border-bottom border-width-1 border-default-color-2">
          <div class="row justify-content-center ">
            <div class="col-xl-7 col-lg-12" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
              <!-- cta-content start -->
              <div class="pb-xl-0 pb-9 text-xl-left text-center">
                <h2 class="text-white font-size-8 mb-4">Most comprehensive job portal</h2>
                <p class="text-hit-gray font-size-5 mb-0">We must explain to you how all this mistaken idea of denouncing</p>
              </div>
              <!-- cta-content end -->
            </div>
            <div class="col-xl-5 col-lg-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
              <!-- cta-btns start -->
              <div class="btns d-flex justify-content-xl-end justify-content-center align-items-xl-center flex-wrap h-100  mx-n4">
                <a class="btn btn-outline-gallery btn-xl mx-4 mt-6 text-uppercase" href="#" data-toggle="modal" data-target="#login">Log in</a>
                <a class="btn btn-green btn-h-60 btn-xl mx-4 mt-6 text-uppercase" href="#" data-toggle="modal" data-target="#signup">Register</a>
              </div>
              <!-- cta-btns end -->
            </div>
          </div>
        </div>
      </div>
      <div class="container  pt-12 pt-lg-19 pb-10 pb-lg-19">
        <div class="row">
          <div class="col-lg-4 col-sm-6 mb-lg-0 mb-9">
            <!-- footer logo start -->
            <img src="image/logo-main-white.png" alt="" class="footer-logo mb-14">
            <!-- footer logo End -->
            <!-- media start -->
            <div class="media mb-11">
              <img src="image/l1/png/message.png" class="align-self-center mr-3" alt="">
              <div class="media-body pl-5">
                <p class="mb-0 font-size-4 text-white">Contact us at</p>
                <a class="mb-0 font-size-4 font-weight-bold" href="mailto:support@uxtheme.net">support@uxtheme.net</a>
              </div>
            </div>
            <!-- media start -->
            <!-- widget social icon start -->
            <div class="social-icons">
              <ul class="pl-0 list-unstyled d-flex align-items-end ">
                <li class="d-flex flex-column justify-content-center px-3 mr-3 font-size-4 heading-default-color">Follow us on:</li>
                <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><i class="fab fa-facebook-f font-size-3 pt-2"></i></a></li>
                <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><i class="fab fa-twitter font-size-3 pt-2"></i></a></li>
                <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><i class="fab fa-linkedin-in font-size-3 pt-2"></i></a></li>
              </ul>
            </div>
            <!-- widget social icon end -->
          </div>
          <div class="col-lg-8 col-md-6">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                <div class="footer-widget widget2 mb-md-0 mb-13">
                  <!-- footer widget title start -->
                  <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Company</p>
                  <!-- footer widget title end -->
                  <!-- widget social menu start -->
                  <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">About us</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Contact us</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Careers</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Press</a></li>
                  </ul>
                  <!-- widget social menu end -->
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                <div class="footer-widget widget3 mb-sm-0 mb-13">
                  <!-- footer widget title start -->
                  <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Product</p>
                  <!-- footer widget title end -->
                  <!-- widget social menu start -->
                  <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Features </a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Pricing</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">News</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Help desk</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Support</a></li>
                  </ul>
                  <!-- widget social menu end -->
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                <div class="footer-widget widget4 mb-sm-0 mb-13">
                  <!-- footer widget title start -->
                  <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Services</p>
                  <!-- footer widget title end -->
                  <!-- widget social menu start -->
                  <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Digital Marketing</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">SEO for Business</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Avasta Dash</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">UI Design</a></li>
                  </ul>
                  <!-- widget social menu end -->
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                <div class="footer-widget widget4">
                  <!-- footer widget title start -->
                  <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Legal</p>
                  <!-- footer widget title end -->
                  <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Privacy Policy</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Terms & Conditions</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Return Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer area function end -->
  </div>
  <!-- Vendor Scripts -->
  <script src="js/vendor.min.js"></script>
  <!-- Plugin's Scripts -->
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/nice-select/jquery.nice-select.min.js"></script>
  <script src="plugins/aos/aos.min.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="plugins/counter-up/jquery.waypoints.min.js"></script>
  <script src="plugins/ui-range-slider/jquery-ui.js"></script>
  <!-- Activation Script -->
  <!-- <script src="js/drag-n-drop.js"></script> -->
  <script src="js/custom.js"></script>
</body>

</html>