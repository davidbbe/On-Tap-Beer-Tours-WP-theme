<?php
/*
* Template name: Winery Tours
*/

get_header(); ?>

  <!-- PAGE TITLE -->
  <section class="pageTitle" style="background-image:url(<?php echo get_bloginfo('template_directory');?>/img/winery/vineyard.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="titleTable">
            <div class="titleTableInner">
              <div class="pageTitleInfo">
                <h1>Winery Tours</h1>
                <div class="under-border"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PAGE CONTENT -->
  <section class="mainContentSection singlePackage">
    <div class="container">
      <div class="row countryTitle">
        <div class="col-sm-8 col-xs-12">
          <div id="package-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#package-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#package-carousel" data-slide-to="1" class=""></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active">
                <img alt="First slide" src="<?php echo get_bloginfo('template_directory');?>/img/winery/vineyard-small.jpg">
              </div>
              <div class="item">
                <img alt="Second slide" src="<?php echo get_bloginfo('template_directory');?>/img/winery/grapes-small.jpg">
              </div>
            </div>
            <a class="left carousel-control" href="#package-carousel" data-slide="prev"><span class="glyphicon glyphicon-menu-left"></span></a>
            <a class="right carousel-control" href="#package-carousel" data-slide="next"><span class="glyphicon glyphicon-menu-right"></span></a>
          </div>
        </div>

        <div class="col-sm-4 col-xs-12">
          <aside>
            <div class="well">
              <h3>Not sure what wineries to visit?</h3>
              <p>Ask one of our Wine & Event Specialists. They will be happy to provide winery recommendations based on your personal preference.</p>
              <br />
              <a href="#" class="btn buttonCustomPrimary">BOOK NOW</a>
            </div>
          </aside>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8 col-xs-12">
          <div role="tabpanel" class="countryTabs">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#over-view" aria-controls="over-view" role="tab" data-toggle="tab">OVER VIEW</a>
              </li>
              <li role="presentation">
                <a href="#sonoma" aria-controls="sonoma" role="tab" data-toggle="tab">Sonoma Winery Map</a>
              </li>
              <li role="presentation">
                <a href="#napa" aria-controls="napa" role="tab" data-toggle="tab">Napa Winery Map</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="over-view">
                <div class="commonInfo">
                  <h2>Sonoma and Napa Valley Winery Tours</h2>
                  <p>Tour It. Event Services has been working with award winning wineries in Napa and Sonoma valleys for over a decade.  We are consistently striving to find the next new palate pleaser while embracing the originals.</p>
                  <p>Our experienced tour guides will share a wealth of knowledge  about small boutique single vineyard wineries, to large estate wineries customized to your palate.</p>
                  <p>Ask about our VIP tasting experience!</p>
                  <p>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-glass" aria-hidden="true"></i> Complimentary champagne & bar service in all limousine vehicles</li>
                      <li><i class="fa fa-glass" aria-hidden="true"></i> Recommendations from our in-house wine specialist</li>
                      <li><i class="fa fa-glass" aria-hidden="true"></i> Your own professional chauffeur</li>
                      <li><i class="fa fa-glass" aria-hidden="true"></i> Couples, groups & large parties</li>
                    </ul>
                  </p>
                  <p class="lead">To Book Your Wine Tour Call: <a href="tel:707-483-8126">707-483-8126</a></p>
                </div>
              </div>

              <div role="tabpanel" class="tab-pane" id="sonoma">
                <div class="commonInfo">
                  <a href="<?php echo get_bloginfo('template_directory');?>/img/winery/Sonoma-County-Map-high3.jpg" target="_blank">View full size map</a>
                  <img src="<?php echo get_bloginfo('template_directory');?>/img/winery/Sonoma-County-Map-high3.jpg" alt="Sonoma County Winery Map" class="img-responsive" />
                </div>
              </div>

              <div role="tabpanel" class="tab-pane" id="napa">
                <div class="commonInfo">
                  <a href="<?php echo get_bloginfo('template_directory');?>/img/winery/Napa-Valley-Winery-Map-A.jpg" target="_blank">View full size map</a>
                  <img src="<?php echo get_bloginfo('template_directory');?>/img/winery/Napa-Valley-Winery-Map-A.jpg" alt="Sonoma County Winery Map" class="img-responsive" />
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-sm-4 col-xs-12">




        </div>

      </div>

    </div>
  </section>

<?php get_footer(); ?>