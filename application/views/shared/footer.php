
<!-- cta start -->
<section class="cta-section">
  <div class="container text-center">
    <a data-toggle="modal" data-target="#quoteModal" href="#" class="btn btn-primary quote-btn">Get a Quote</a>

    <!-- Modal -->
    <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="quoteModalLabel">Request a rate for the shipping of your goods.</h4>
          </div>
          <div class="modal-body">
            <form id="contactForm" action="sendemail.php" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="company">Company Name</label>
                    <input id="company" name="company" type="text" class="form-control" placeholder="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input id="phone" name="phone" type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input id="email" name="email" type="email" class="form-control" required="" placeholder="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="city">City Name</label>
                    <input id="city" name="city" type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="">
                  </div>
                </div>
              </div>
              <div class="form-group text-area">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.container -->
</section><!-- /.cta-section -->
<!-- cta end -->

<!-- footer-widget-section start -->
<section class="footer-widget-section section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-offset-1 col-sm-4">
        <div class="footer-widget">
          <h3>Place &amp; Contact</h3>

          <address>
            U-b OCS Building L-6<br>
            Sta. Agueda Avenue<br>
            Pascor Drive Santo Niño<br>
            Parañaque City, Metro Manila 1704 <br>
            <!-- Google Map Modal Trigger -->
            <button type="button" class="modal-map" data-toggle="modal" data-target="#cssMapModal">Location  Map</button>

            <span class="tel">(02) 519-3391</span>
          </address>


          <!-- Modal -->
          <div class="modal fade" id="cssMapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Our Location</h4>
                </div>
                <div class="modal-body">

                  <div id="googleMap"></div>

                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- End Modal -->
        </div><!-- /.footer-widget -->
      </div><!-- /.col-md-4 -->

      <div class="col-md-3 col-sm-4">
        <div class="footer-widget">
          <h3>About Transport</h3>

          <ul>
            <li><a href="<?php  site_url();?>about">About</a></li>
           <li><a href="<?php  site_url();?>service">Service</a></li>
           <!-- <li><a href="<?php  site_url();?>our_people">Our people</a></li> -->
           <li><a href="<?php  site_url();?>career">Career</a></li>
           <!-- <li><a href="<?php site_url();?>faq">FAQ Page</a></li> -->
          </ul>
        </div><!-- /.footer-widget -->
      </div><!-- /.col-md-4 -->

      <div class="col-md-4 col-sm-4">
        <div class="footer-widget">
          <h3>Stay in Touch</h3>
          <p>Enter your email address to receive news &amp; offers from us</p>

          <form class="newsletter-form">
            <div class="form-group">
              <label class="sr-only" for="InputEmail1">Email address</label>
              <input type="email" class="form-control" id="InputEmail1" placeholder="Your email address">
              <button type="submit" class="">Send &nbsp;<i class="fa fa-angle-right"></i></button>
            </div>
          </form>                   
        </div><!-- /.footer-widget -->
      </div><!-- /.col-md-4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.cta-section -->
<!-- footer-widget-section end -->

<!-- copyright-section start -->
<footer class="copyright-section">
  <div class="container text-center">
    <!-- <div class="footer-menu">
      <ul>
        <li><a href="#">Privacy &amp; Cookies</a></li>
        <li><a href="#">Terms &amp; Conditions</a></li>
        <li><a href="#">Accessibility</a></li>
      </ul>
    </div> -->

    <div class="copyright-info">
      <span>Copyright © 2017.Quick Red Cargo Link, Inc. All Rights Reserved. Designed by <a href="https://uicookies.com">uiCookies</a>
    </div>
  </div><!-- /.container -->
</footer>
<!-- copyright-section end -->
</div> <!-- .st-content -->
</div> <!-- .st-pusher -->

<!-- OFFCANVAS MENU -->
<div class="offcanvas-menu offcanvas-effect">
  <div class="offcanvas-wrap">
    <div class="off-canvas-header">
      <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
    </div>
    <ul id ="offcanvasMenu" class="list-unstyled visible-xs visible-sm">
      <li><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
      <li>
        <a href="#">Pages</a>
        <ul>
          <li class="active"><a href="about.html">About</a></li>
          <li><a href="service.html">Service</a></li>
          <li><a href="our-people.html">Our people</a></li>
          <li><a href="career.html">Career</a></li>
          <li><a href="faq.html">FAQ Page</a></li>
          <li><a href="typography.html">Typography</a></li>
        </ul>

      </li>
      <li>
        <a href="#">Services</a>
        <ul>
          <li><a href="air.html">Air transportation</a></li>
          <li><a href="marine.html">Marine transportation</a></li>
          <li><a href="moving.html">Moving &amp; storage</a></li>
          <li><a href="shipping.html">Shipping &amp; operations</a></li>
          <li><a href="transportation.html">Transportation logistics</a></li>
          <li><a href="trucking.html">Trucking</a></li>
        </ul>

      </li>
      <!-- <li>
        <a href="#">Blog</a>
        <ul>
          <li>
            <a href="blog.html">Standard blog</a>
          </li>
          <li>
            <a href="blog-single.html">Single blog</a>
          </li>
        </ul> -->
      </li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="typography.html">Typography</a></li>
    </ul>
    <div class="offcanvas-widgets hidden-sm hidden-xs">
      <div id="twitterWidget">
        <h2>Tweeter feed</h2>             
        <div class="twitter-widget"></div>
      </div>
      <div class="newsletter-widget">
        <h2>Stay in Touch</h2>
        <p>Enter your email address to receive news &amp; offers from us</p>

        <form class="newsletter-form">
          <div class="form-group">
            <label class="sr-only" for="InputEmail1">Email address</label>
            <input type="email" class="form-control" id="InputEmail2" placeholder="Your email address">
            <button type="submit" class="btn">Send &nbsp;<i class="fa fa-angle-right"></i></button>
          </div>
        </form>   

      </div><!-- newsletter-widget -->
    </div>

  </div>
</div><!-- .offcanvas-menu -->
</div><!-- /st-container -->


<!-- Preloader -->
<div id="preloader">
  <div id="status">
    <div class="status-mes"></div>
  </div>
</div>

<!-- jQuery -->
<script src="<?php  base_url();?>assets/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php  base_url();?>assets/js/bootstrap.min.js"></script>
<!-- owl.carousel -->
<script src="<?php  base_url();?>assets/owl.carousel/owl.carousel.min.js"></script> 
<!-- Magnific-popup -->
<script src="<?php  base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- Offcanvas Menu -->
<script src="<?php  base_url();?>assets/js/hippo-offcanvas.js"></script>
<!-- inview -->
<script src="<?php  base_url();?>assets/js/jquery.inview.min.js"></script>
<!-- stellar -->
<script src="<?php  base_url();?>assets/js/jquery.stellar.js"></script>
<!-- countTo -->
<script src="<?php  base_url();?>assets/js/jquery.countTo.js"></script>
<!-- classie -->
<script src="<?php  base_url();?>assets/js/classie.js"></script>
<!-- selectFx -->
<script src="<?php  base_url();?>assets/js/selectFx.js"></script>
<!-- sticky kit -->
<script src="<?php  base_url();?>assets/js/jquery.sticky-kit.min.js"></script>
<!-- GOGLE MAP -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!--TWITTER FETCHER-->
<script src="<?php  base_url();?>assets/js/twitterFetcher_min.js"></script>
<!-- Custom Script -->
<script src="<?php  base_url();?>assets/js/scripts.js"></script>
</body>
</html>