<?php
/*
* Template name: Contact Page
*/

get_header(); ?>

    <!-- PAGE TITLE -->
    <section class="pageTitle" style="background-image:url(<?php echo get_bloginfo('template_directory');?>/img/pages/page-title-bg3.jpg);">
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
              <p>If you have any questions, please feel free to drop us a line. If you don’t get an answer immediately we’ll get back to you as soon as we can.</p>
              <div class="media">
                <a class="media-left" href="#">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">address</h4>
                  <p>Tour It LLC<br>
                    1040 North Dutton Ste G<br>
                    Santa Rosa, CA 95491<br>
                  </p>
                </div>
              </div>
              <div class="media">
                <a class="media-left" href="#">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Phone number</h4>
                  <p>707-483-8126</p>
                </div>
              </div>
              <div class="media">
                <a class="media-left" href="#">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">email us</h4>
                  <p><a href="mailTo:touritllc@gmail.com">touritllc@gmail.com</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-8 col-xs-12">

            <div class="contact-page-form">

              <?php

                $contact_form_email_address = "streethouse4@gmail.com";

                //response generation function
                $response = "";

                //function to generate response
                function my_contact_form_generate_response($type, $message){

                  global $response;

                  if($type == "success") $response = "<div class='success'>{$message}</div>";
                  else $response = "<div class='error'>{$message}</div>";

                }

                //response messages
                $not_human       = "Human verification incorrect.";
                $missing_content = "Please supply all information.";
                $email_invalid   = "Email Address Invalid.";
                $message_unsent  = "Message was not sent. Try Again.";
                $message_sent    = "Thanks! Your message has been sent.";

                //user posted variables
                $name = $_POST['message_name'];
                $email = $_POST['message_email'];
                $phone = $_POST['message_phone'];
                $message = $_POST['message_text'];
                $human = $_POST['message_human'];

                //php mailer variables
                //$to = $contact_form_email_address;
                $subject = "Someone sent a message from touritllc.com";
                $headers = 'From: '. $email . "\r\n" .
                  'Reply-To: ' . $email . "\r\n";


                $email_message = "Name: ".$name."\n";

                $email_message .= "Email: ".$email."\n";

                $email_message .= "Phone: ".$phone."\n";

                $email_message .= "Message: ".$message."\n";

                if(!$human == 0){
                  if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
                  else {

                    //validate email
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                      my_contact_form_generate_response("error", $email_invalid);
                    else //email is valid
                    {
                      //validate presence of name and message
                      if(empty($name) || empty($message)){
                        my_contact_form_generate_response("error", $missing_content);
                      }
                      else //ready to go!
                      {
                        $sent = wp_mail($contact_form_email_address, $subject, strip_tags($email_message), $headers);
                        if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
                        else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
                      }
                    }
                  }
                }
                else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content); ?>

                <div id="respond">
                  <?php echo $response; ?>
                  <form action="<?php the_permalink(); ?>" method="post">
                    <div class="form-group">
                      <label for="name">Name <span>*</span></label>
                      <input type="text" class="form-control" name="message_name">
                    </div>
                    <div class="form-group">
                      <label for="message_email">Email <span>*</span></label>
                      <input type="text" class="form-control" name="message_email">
                    </div>
                    <div class="form-group">
                      <label for="message_phone">Phone</label>
                      <input type="tel" class="form-control" name="message_phone">
                    </div>
                    <div class="form-group">
                      <label for="message_text">Message <span>*</span></label>
                      <textarea type="text" class="form-control" rows="3" name="message_text"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="message_human">Human Verification <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label>
                    </div>
                    <input type="hidden" name="submitted" value="1">
                    <p><input class="btn buttonCustomPrimary" type="submit"></p>
                  </form>
                </div>
              </div>
            </div>

        </div>
      </div>
    </section>

    <!-- MAP AREA SECTION -->
    <section class="mapArea">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249308.73259913616!2d-122.99215547847739!3d38.41976630098476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808438101a8c054d%3A0xb642ee7a3ca98e23!2s1040+N+Dutton+Ave+g%2C+Santa+Rosa%2C+CA+95401!5e0!3m2!1sen!2sus!4v1485411274674" height="555" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

<?php get_footer(); ?>