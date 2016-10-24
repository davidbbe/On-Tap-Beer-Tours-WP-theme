<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class('changeHeader'); ?>>
  <div class="main-wrapper">

<!--[if lt IE 8]>
<div class="alert alert-warning">
  You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

    <header>
      <nav class="navbar navbar-default navbar-main navbar-fixed-top" role="navigation">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active dropdown singleDrop">
                <a href="index.html">Home</a>
              </li>
              <li class="dropdown megaDropMenu">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">tour packages</a>
                <ul class="row dropdown-menu">
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Tour Packages Grid View</li>
                      <li><a href="packages-grid-left-sidebar.html">Packages Sidebar Left</a></li>
                      <li><a href="packages-grid-right-sidebar.html">Packages Sidebar Right</a></li>
                      <li><a href="packages-grid.html">Packages 3 Columns</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Tour Packages List View</li>
                      <li><a href="packages-list-left-sidebar.html">Packages Sidebar Left</a></li>
                      <li><a href="packages-list-right-sidebar.html">Packages Sidebar Right</a></li>
                      <li><a href="packages-list.html">Packages List</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Single Package</li>
                      <li><a href="single-package-left-sidebar.html">Package Sidebar Left</a></li>
                      <li><a href="single-package-right-sidebar.html">Package Sidebar Right</a></li>
                      <li><a href="single-package-fullwidth.html">Package Fullwidth</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Booking Steps</li>
                      <li><a href="booking-1.html">Step 1 - Personal Info</a></li>
                      <li><a href="booking-2.html">Step 2 - Payment Info</a></li>
                      <li><a href="booking-3.html">Step 3 - Confirmation</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destinations</a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="destination-cities.html">Destination Cities</a></li>
                  <li><a href="destination-single-city.html">Single Destination</a></li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES</a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Gallery <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="gallery-grid.html">Gallery Grid</a></li>
                      <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                      <li><a href="gallery-photo-slider.html">Photo Slider</a></li>
                    </ul>
                  </li>
                  <li><a href="404.html">404 Not Found</a></li>
                  <li><a href="coming-soon.html">Coming Soon</a></li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Grid View <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-grid-three-col.html">Blog Grid 3 Col</a></li>
                      <li><a href="blog-grid-two-col.html">Blog Grid 2 Col</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog List View <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                      <li><a href="blog-list-left-sidebar.html">blog-list-left-sidebar.html</a></li>
                      <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Blog Post <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-single-right-sidebar.html">Right Sidebar</a></li>
                      <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">shortcodes</a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="accordion-and-toggles.html">Accordions &amp; Toggles</a></li>
                  <li><a href="tabs-and-dropdown.html">Tabs &amp; Dropdowns</a></li>
                  <li><a href="pricing-table.html">Pricing Tables</a></li>
                </ul>
              </li>
<!--               <li class="dropdown searchBox">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="searchIcon"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <span class="input-group">
                      <input type="text" class="form-control" placeholder="Search..." aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2">Search</span>
                    </span>
                  </li>
                </ul>
              </li> -->
            </ul>
          </div>

        </div>
      </nav>
    </header>

    <!-- BANNER -->
    <section class="bannercontainer">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>
            <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/home/slider/slider-05.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Driver Service
                  <span>Bay Area, CA</span>
                </div>
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  We are a professional local transportation company serving California, particularly the CA Bay Area. We provide transportation services in a safe, comfortable, and a timely manner.
                </div>
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><a target="_blank" href="#" class="btn buttonCustomPrimary">Book Now</a></span>
                </div>
              </div>
            </li>

            <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/home/slider/slider-02.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Reliable Transportation
                  <span>For Any Occasion</span>
                </div>
                <div class="tp-caption rs-caption-2 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  We understand that safety and comfort are very important to our customers and we strongly believe that we can exceed our customers’ expectations.
                </div>
                <div class="tp-caption rs-caption-3 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><a target="_blank" href="#" class="btn buttonCustomPrimary">View Services</a></span>
                </div>
              </div>
            </li>

            <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/home/slider/slider-03.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  The Ultimate
                  <span>Client Experience</span>
                </div>
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Our mission is to offer our customers fast and easy access to unbeatable prices for transportation services for all types of occasions within the California Bay Area.
                </div>
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><a target="_blank" href="#" class="btn buttonCustomPrimary">Book Now</a></span>
                </div>
              </div>
            </li>
<!-- 
            <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/home/slider/slider-04.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Go Where You Wanna Go
                  <span>24/7 Quick Support</span>
                </div>
                <div class="tp-caption rs-caption-2 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Maecenas et leo nec nunc rutrum tempor. Mauris pharetra porttitor odio eget convallis. Praesent facilisis mattis pretium. Aliquam sagittis efficitur risus, interdum euismod urna. Pellentesque vel augue augue.
                </div>
                <div class="tp-caption rs-caption-3 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><a target="_blank" href="http://goo.gl/lXpsqr" class="btn buttonCustomPrimary">View Delails</a></span>
                </div>
              </div>
            </li> -->

          </ul>
        </div>
      </div>
    </section>
