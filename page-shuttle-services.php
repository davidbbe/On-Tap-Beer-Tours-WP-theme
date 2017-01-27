<?php
/*
* Template name: Shuttle Services
*/

get_header(); ?>

  <!-- PAGE TITLE -->
  <section class="pageTitle" style="background-image:url(<?php echo get_bloginfo('template_directory');?>/img/pages/page-title-bg10.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="titleTable">
            <div class="titleTableInner">
              <div class="pageTitleInfo">
                <h1>Shuttle Services</h1>
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
                <img alt="First slide" src="<?php echo get_bloginfo('template_directory');?>/img/shuttle/sprinter-front.jpeg">
              </div>
              <div class="item">
                <img alt="Second slide" src="<?php echo get_bloginfo('template_directory');?>/img/shuttle/sprinter-inside.jpeg">
              </div>
            </div>
            <a class="left carousel-control" href="#package-carousel" data-slide="prev"><span class="glyphicon glyphicon-menu-left"></span></a>
            <a class="right carousel-control" href="#package-carousel" data-slide="next"><span class="glyphicon glyphicon-menu-right"></span></a>
          </div>
        </div>

        <div class="col-sm-4 col-xs-12">
          <aside>
            <div class="well">
              <h3>Need help?</h3>
              <p>Ask one of our Wine & Event Specialists. They will be happy to provide recommendations based on your personal preference.</p>
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
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="over-view">
                <div class="commonInfo">
                  <h2>Airport Pickup &amp; Drop Off Services</h2>
                  <p>Tour It. Event Services provides safe transportation for you and your guests from your choice of event locations. We require a 3-hour minimum for all shuttle services.</p>
                  <p>Our vehicles include:
                    <ul class="list-unstyled">
                      <li><i class="fa fa-circle" aria-hidden="true"></i> SUV’s</li>
                      <li><i class="fa fa-circle" aria-hidden="true"></i> Limousines</li>
                      <li><i class="fa fa-circle" aria-hidden="true"></i> Mercedes Sprinter Vans</li>
                      <li><i class="fa fa-circle" aria-hidden="true"></i> Custom Busses</li>
                    </ul>
                  </p>
                  <p>Depending on the size of your event, we can also provide on site shuttle service attendants. By adding this dynamic we can ensure effective transition from parking to transit.</p>

                  <p class="lead">Click the book now button to see our availability or call: <a href="tel:707-483-8126">707-483-8126</a></p>
                </div>
              </div>

<!--               <div role="tabpanel" class="tab-pane" id="sonoma">
                <div class="commonInfo">
                </div>
              </div>

              <div role="tabpanel" class="tab-pane" id="napa">
                <div class="commonInfo">
                </div>
              </div> -->

            </div>
          </div>
        </div>

        <div class="col-sm-4 col-xs-12">







        </div>

      </div>

    </div>
  </section>

<?php get_footer(); ?>