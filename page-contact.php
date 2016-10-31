<?php
/*
* Template name: Contact Page
*/

get_header(); ?>

    <!-- PAGE TITLE -->
    <section class="pageTitle" style="background-image:url(img/pages/page-title-bg5.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="titleTable">
              <div class="titleTableInner">
                <div class="pageTitleInfo">
                  <h1>contact us</h1>
                  <div class="under-border"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- WHITE SECTION-->
    <section class="mainContentSection">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="contactInfo">
              <h2>get in touch</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
              <div class="media">
                <a class="media-left" href="#">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">address</h4>
                  <p>16/14 Babor Road, Mohammad pur <br>Dhaka, Bangladeshincididunt</p>
                </div>
              </div>
              <div class="media">
                <a class="media-left" href="#">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Phone number</h4>
                  <p>+55 654 545 122 <br>+55 654 545 123</p>
                </div>
              </div>
              <div class="media">
                <a class="media-left" href="#">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">email us</h4>
                  <p><a href="mailTo:info@example.com">info @example.com</a> <br><a href="mailTo:info@startravelbangladesh.com">info@startravelbangladesh.com</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-8 col-xs-12">
            <div class="contactForm">
              <form action="" method="POST" role="form" class="form">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Your Phone">
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn buttonCustomPrimary">send message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MAP AREA SECTION -->
    <section class="mapArea">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d467453.3147356961!2d90.37215279999992!3d23.748127500000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1452772758249" height="555" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

<?php get_footer(); ?>