<?php get_header('inner');?>
<section id="contact_services">
      <div class="img-overlay">
      </div><!-- img-overlay-->
      <div class="container container-md">
        <div class="row">
          <div class="service-wrap">
            <div class="col-sm-4 text-center">
              <div class="services-content content-1">
                <div class="icon-wrap">
                  <img src="<?php bloginfo('template_url'); ?>/images/contact-service-1.jpg" alt="service">
                </div><!--icon-wrap-->
                <div class="text-wrap">
                  <h3>Let's Have A Chat</h3>
                  <p>Reach out to Essential Solutions and learn how we can help your organisation.</p>
                  <a href="tel:(435) 817-9471" class="service__btn">Schedule A Call</a>
                </div><!--text-wrap-->
              </div><!--services-content-->
            </div><!--col-sm-4-->
            <div class="col-sm-4 text-center">
              <div class="services-content">
                  <div class="icon-wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/contact-service-2.jpg" alt="service">
                    </div><!--icon-wrap-->
                    <div class="text-wrap">
                      <h3>Book A Meeting</h3>
                      <p>Ready to speak with one of our IT service professionals about our services?</p>
                      <a href="#" data-toggle="modal" data-target="#myModal" class="service__btn">Book A Meeting</a>
                    </div><!--text-wrap-->
              </div><!--services-content-->
            </div><!--col-sm-4-->
            <div class="col-sm-4 text-center">
              <div class="services-content content-3">
                  <div class="icon-wrap">
                    <img src="<?php bloginfo('template_url'); ?>/images/contact-service-3.jpg" alt="service">
                    </div><!--icon-wrap-->
                    <div class="text-wrap">
                      <h3>Client Support</h3>
                      <p>Are you a client needing help? Connect with our team <span>right away.</span></p>
                      <a href="<?php bloginfo('url'); ?>/contact-us" class="service__btn">Open Service Request</a>
                  </div><!--text-wrap-->
              </div><!--services-content-->
            </div><!--col-sm-4-->
          </div><!-- service-wrap -->
        </div><!--row-->
      </div><!--container-->
    </section><!--contact__services-->
     <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
        <div class="container popup_container">
        <button type="button" class="close" data-dismiss="modal">×</button>
            <div id="popup_wrapper">
                <div class="popupbody text-center">
                    <h2>Fill in your information below to schedule a consultation with your {company} Mining IT Professionals.</h2>
                     <div class="form_wrap">
                       <div class="contact_form_wrap">
                         <script type="text/javascript" src="https://Ulistic3.formstack.com/forms/js.php/access_systems_contact_popup_form"></script>
                     </div>
                     </div><!--form_wrap-->
                </div><!--popupbody-->
            </div><!--popup_wrapper-->
        </div><!--container-->
    </div><!--modal-dialog-->
</div><!--myModal-->
<div id="contact">
      <div class="container contact-container">
        <div class="row">
          <div class="col-sm-5">
            <div class="contact-content">
                <?php dynamic_sidebar('Inner Footer Contact'); ?>              
            </div><!-- contact-content -->
                <?php dynamic_sidebar('Footer Social Media'); ?>
          </div><!-- col-sm-5 -->
          <div class="col-sm-7">
              <div class="maps">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2653.7948054617427!2d-113.06251311399049!3d37.72175127016789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80b5612ffe4dbff3%3A0xd43379ecd8758b7!2sSymTec+LLC!5e0!3m2!1sen!2snp!4v1564134712279!5m2!1sen!2snp" frameborder="0" style="border:0" allowfullscreen></iframe>

              </div>
          </div><!-- col-sm-7 -->
        </div><!-- row -->
      </div><!-- container-sm -->
    </div><!-- contact -->
    <div id="copy-right-text">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="copyright-content">
                        <p>Copyright &copy;<?php echo the_date('Y');?>&nbsp;{company}&nbsp; All Rights Reserved.&nbsp;<a href="<?php bloginfo('url'); ?>/sitemap.xml" target="_blank">Sitemap</a>  &nbsp;  |  &nbsp;  <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a> &nbsp;  |  &nbsp;  <a href="<?php bloginfo('url'); ?>/website-accessibility-statement" target="_blank">Website Accessibility Statement</a> </p>
                    </div><!-- copyright content -->
                </div><!-- col sm 12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- copyright text -->
    
<?php wp_footer();?>
