<?php
/*
* Template name: Airport Transfers
*/

get_header(); ?>

  <!-- PAGE TITLE -->
  <section class="pageTitle" style="background-image:url(<?php echo get_bloginfo('template_directory');?>/img/airport/airport.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="titleTable">
            <div class="titleTableInner">
              <div class="pageTitleInfo">
                <h1>Airport Pickup/Drop off</h1>
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
                <img alt="First slide" src="<?php echo get_bloginfo('template_directory');?>/img/airport/airport-pickup.jpg">
              </div>
            </div>
            <a class="left carousel-control" href="#package-carousel" data-slide="prev"><span class="glyphicon glyphicon-menu-left"></span></a>
            <a class="right carousel-control" href="#package-carousel" data-slide="next"><span class="glyphicon glyphicon-menu-right"></span></a>
          </div>
        </div>

        <div class="col-sm-4 col-xs-12">
          <aside>
            <div class="well">
              <h3>Not sure how early to book?</h3>
              <p>Ask one of our transportation specialists. They will be happy to provide you with time recommendations for travel and airport wait times.</p>
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
<!--               <li role="presentation">
                <a href="#sonoma" aria-controls="sonoma" role="tab" data-toggle="tab">Sonoma Winery Map</a>
              </li>
              <li role="presentation">
                <a href="#napa" aria-controls="napa" role="tab" data-toggle="tab">Napa Winery Map</a>
              </li> -->
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="over-view">
                <div class="commonInfo">
                  <h2>Airport Pickup & Drop Off Services</h2>
                  <p>We will be happy to Pick up or drop off at any of the following airports:</p>
                  <p>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-plane" aria-hidden="true"></i> San Francisco International (SFO)</li>
                      <li><i class="fa fa-plane" aria-hidden="true"></i> Oakland International (OAK)</li>
                      <li><i class="fa fa-plane" aria-hidden="true"></i> Sonoma County Airport (STS)</li>
                    </ul>
                  </p>
                  <p>We have the perfect fit for small and large groups with our SUV’s, Limousines, Mercedes Sprinter Vans and Buses. Water, snacks and a complimentary craft beer will be provided while in transit.</p>
                  <p class="lead margin-bottom-none">Prices are as follows each way:</p>
                  <p class="text-muted">* Note: There will be an additional $40.00 charge for each additional stop or pick up.</p>


                  <div class="priceTable">
                    <div class="col-sm-4 col-xs-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">San Francisco</div>
                        <div class="panel-body bodyImageBg">
                          <img src="<?php echo get_bloginfo('template_directory');?>/img/airport/sfo.jpg" alt="San Francisco Airport">
                          <div class="priceCircle">
                            <h3>SFO</h3>
                          </div>
                        </div>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-plane" aria-hidden="true"></i>SUV 4 ppl. $270</li>
                          <li><i class="fa fa-plane" aria-hidden="true"></i>Limo 6 ppl. $280</li>
                          <li><i class="fa fa-plane" aria-hidden="true"></i>Van 11 ppl. $295</li>
                          <li><i class="fa fa-plane" aria-hidden="true"></i>Bus 16 ppl. $315</li>
                        </ul>
                        <div class="panel-footer"><a href="#" class="btn buttonTransparent">book now</a></div>
                      </div>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">Oakland</div>
                        <div class="panel-body bodyImageBg">
                          <img src="<?php echo get_bloginfo('template_directory');?>/img/airport/oak.jpg" alt="Oakland Airport">
                          <div class="priceCircle">
                            <h3>OAK</h3>
                          </div>
                        </div>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-plane" aria-hidden="true"></i>SUV 4 ppl. $250</li>
                          <li><i class="fa fa-plane" aria-hidden="true"></i>Limo 6 ppl. $260</li>
                          <li><i class="fa fa-plane" aria-hidden="true"></i>Van 11 ppl. $275</li>
                          <li><i class="fa fa-plane" aria-hidden="true"></i>Bus 16 ppl. $300</li>
                        </ul>
                        <div class="panel-footer"><a href="#" class="btn buttonTransparent">book now</a></div>
                      </div>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">Santa Rosa</div>
                        <div class="panel-body bodyImageBg">
                          <img src="<?php echo get_bloginfo('template_directory');?>/img/airport/sts.jpg" alt="Santa Rosa Airport">
                          <div class="priceCircle">
                            <h3>STS</h3>
                          </div>
                        </div>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-plane" aria-hidden="true"></i>SUV 4 ppl. $150</li>
                          <li><i class="fa fa-plane" aria-hidden="true"></i>Limo 6 ppl. $160</li>
                          <li><i class="fa fa-plane" aria-hidden="true"></i>Van 11 ppl. $175</li>
                          <li><i class="fa fa-plane" aria-hidden="true"></i>Bus 16 ppl. $200</li>
                        </ul>
                        <div class="panel-footer"><a href="#" class="btn buttonTransparent">book now</a></div>
                      </div>
                    </div>
                  </div>

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