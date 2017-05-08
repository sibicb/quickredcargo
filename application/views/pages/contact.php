  <section class="page-title-section">
    <div class="container">
      <div class="page-header-wrap">
        <div class="page-header">
          <h1>Contact us</h1>
        </div>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Contact</li>
        </ol>
      </div>
    </div>
  </section>


  <section class="contact-info-section">
    <div class="container">
      <div class="text-center">
        <h2 class="section-title">Get in Touch</h2>
        <span class="section-sub">We Are Ready to Help You 24/7</span>
      </div>

      <div class="row content-row">

        <div class="col-md-7">
          <div class="contact-map">
            <h3>Contact Form</h3>
            <?php $this->session->flashdata('success');?>
            <form id="mainContact" action="<?php echo site_url();?>pages/sendemail" method="POST">
              <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control"  required="" placeholder="">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" required="" placeholder="">
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input name="subject" type="text" class="form-control" required="" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input name="phone" type="text" class="form-control" placeholder="">
                  </div>
                </div>
              </div>
              <div class="form-group text-area">
                <label for="message">Your Message</label>
                <textarea name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
          </div>
        </div>

        <div class="col-md-5">
          <div class="contact-info">
            <h3>Head Office</h3>
            <address>
            U-b OCS Building L-6<br>
            Sta. Agueda Avenue<br>
            Pascor Drive Santo Niño<br>
            Parañaque City, Metro Manila 1704 <br>
            Phone: +63 02 5193391<br>
            Mobile: +63 917 854 8368<br>
            Email: admin@quickredcargo.com<br>
            </address>

          </div><!-- /.contact-info -->

          <div class="contact-map">
            <h3>Location Map</h3>

            <div id="contactMap"></div>
          </div><!-- /.contact-info -->


        </div>
      </div>
    </div>
  </section>
