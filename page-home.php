<?php
/*
* Template name: Home Page
*/

get_header(); ?>

    <!-- BANNER -->
    <section class="bannercontainer">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/home/slider/slider-02.jpg" alt="Header background image" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" style="max-width:100%;" />
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Tour It
                  <span>Transportation Services</span>
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
                  Airport pickup/drop off, Winery tours, and all other event shuttle services.
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
                  <span class="page-scroll">
                    Give us a call:<br/>
                    <a href="tel:707-483-8126" class="btn buttonCustomPrimary">707-483-8126</a>
                  </span>
                </div>
              </div>
            </li>
<!--             <li data-transition="parallaxvertical" data-slotamount="10" data-masterspeed="700" data-title="Slide 1">
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
            </li> -->
<!--             <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
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
            </li> -->
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
  

    <section class="mainContentSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 sectionTitle">
            <h2><span>OFFERING TRANSPORTATION SERVICES TO NORTHERN CA</span></h2>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-7">
            <div class="">
              <p class="lead">At TOUR IT in Santa Rosa CA, we pride ourselves on maintaining a vehicle fleet that meets the exacting standards of all our clients.</p>
              <p>We understand that safety and comfort are very important to our customers and we strongly believe that we can exceed our customers’ expectations. Both businesses and individuals can rely on our transportation services. We have automobiles with dimensions and amenities to match any taste. We offer a suite of transportation solutions, including:</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-5">
            <img class="img-responsive" src="<?php echo get_bloginfo('template_directory');?>/img/limo.jpg" alt="Vehicle selection" />
          </div>
        </div>

<!--         <div class="row aboutItem">
          <div class="col-sm-4 col-xs-12">
            <div class="media">
              <a class="media-left" href="#"><i class="fa fa-plane" aria-hidden="true"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Airport Transportation</h4>
                <p>Travelers who feel worn down by long waits and frenzied passengers at the airport taxi departure area can take advantage of our airport transportation service.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media">
              <a class="media-left" href="#"><i class="fa fa-glass" aria-hidden="true"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Wine Tours</h4>
                <p>Planning an exciting day of touring some local notable wineries and vineyards? Discover the wines of Sonoma or Napa while travelling in style and luxury with our limousine wine tours.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media">
              <a class="media-left" href="#"><i class="fa fa-bus" aria-hidden="true"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Corporate Car Services</h4>
                <p>As a business owner or manager, you've got better things to do than worry about making travel arrangements. So if you're looking for an easy way to provide your employees with a quick and easy way to get around town, we're at your service.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media">
              <a class="media-left" href="#"><i class="fa fa-beer" aria-hidden="true"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Brewery Tours</h4>
                <p>Sample tasty IPA's, Farmhouse Ales, Lagers, Porters, Stouts, Ciders and Sours at some of Sonoma County's coolest breweries.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media">
              <a class="media-left" href="#"><i class="fa fa-bus" aria-hidden="true"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Weddings And Other Events</h4>
                <p>Event Services provides safe transportation for you and your guests from your choice of event locations.</p>
              </div>
            </div>
          </div>
        </div> -->

      </div>
    </section>


    <!-- 3 Packages -->
    <section class="mainContentSection packagesSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="sectionTitle">
              <h2><span class="lightBg">Our Transportation Options</span></h2>
              <p>Custom and private options can be arranged along with our well designed tour options.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="thumbnail deals">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/airport-transfer.jpg" alt="deal-image">
              <a href="#" class="pageLink"></a>
              <div class="discountInfo">
<!--                 <div class="discountOffer">
                  <h4>
                    50% <span>OFF</span>
                  </h4>
                </div> -->
                <ul class="list-inline duration">
                  <li>7 days/week</li>
                </ul>
              </div>
              <div class="caption">
                <h4>
                  <a href="#" class="captionTitle">Airport Transfers</a>
                </h4>
                <p>We will be happy to pick up or drop off at any of the following airports: SFO, OAK, STS(Sonoma County Airport).</p>
                <div class="detailsInfo">
                  <h5>
                    <span>Start From</span>
                    $150
                  </h5>
                  <ul class="list-inline detailsBtn">
                    <li>
                      <a href="#" class="btn buttonTransparent">Details</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-12">
            <div class="thumbnail deals">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/winery-tours.jpg" alt="deal-image">
              <a href="#" class="pageLink"></a>
              <div class="discountInfo">
<!--                 <div class="discountOffer">
                  <h4>
                    Free <span>Gift</span>
                  </h4>
                </div> -->
                <ul class="list-inline duration">
                  <li>6 hour min</li>
                </ul>
              </div>
              <div class="caption">
                <h4>
                  <a href="#" class="captionTitle">Winery Tours</a>
                </h4>
                <p>Our experienced tour guides will share a wealth of knowledge about small boutique single vineyard wineries, to large estate wineries customized to your palate.</p>
                <div class="detailsInfo">
                  <h5>
                    <span>Start From</span>
                    $300
                  </h5>
                  <ul class="list-inline detailsBtn">
                    <li>
                      <a href="#" class="btn buttonTransparent">Details</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-xs-12">
            <div class="thumbnail deals">
              <img src="<?php echo get_bloginfo('template_directory');?>/img/shuttle-services.jpg" alt="deal-image">
              <a href="#" class="pageLink"></a>
              <div class="discountInfo">
<!--                 <div class="discountOffer">
                  <h4>
                    25% <span>OFF</span>
                  </h4>
                </div> -->
                <ul class="list-inline duration">
                  <li>3 hour min</li>
                </ul>
              </div>
              <div class="caption">
                <h4>
                  <a href="#" class="captionTitle">Shuttle Services</a>
                </h4>
                <p>Event Services provides safe transportation for you and your guests from your choice of event locations.</p>
                <div class="detailsInfo">
                  <h5>
                    <span>Start From</span>
                    $150
                  </h5>
                  <ul class="list-inline detailsBtn">
                    <li>
                      <a href="#" class="btn buttonTransparent">Details</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>



    <!-- Wine Tours PARALLAX -->
    <section class="promotionWrapper">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="promotionTable">
              <div class="promotionTableInner">
                <div class="promotionInfo">
                  <span>Elegant Sonoma Wine Tasting Tours and Napa Valley Wine Tours</span>
                  <h2>Call Us Or Book Online</h2>
                  <ul class="list-inline rating">
                    <li><i class="fa fa-glass" aria-hidden="true"></i></li>
                    <li><i class="fa fa-glass" aria-hidden="true"></i></li>
                    <li><i class="fa fa-glass" aria-hidden="true"></i></li>
                    <li><i class="fa fa-glass" aria-hidden="true"></i></li>
                    <li><i class="fa fa-glass" aria-hidden="true"></i></li>
                  </ul>
                  <p>707-123-4567</p>
                  <a href="#" class="btn buttonCustomPrimary">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>