<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Quick Red Cargo Link Inc.</title>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
  <link href="<?php  base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Flaticon CSS -->
  <link href="<?php  base_url();?>assets/fonts/flaticon/flaticon.css" rel="stylesheet">
  <!-- font-awesome CSS -->
  <link href="<?php  base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
  <!-- Offcanvas CSS -->
  <link href="<?php  base_url();?>assets/css/hippo-off-canvas.css" rel="stylesheet">
  <!-- animate CSS -->
  <link href="<?php  base_url();?>assets/css/animate.css" rel="stylesheet">
  <!-- language CSS -->
  <link href="<?php  base_url();?>assets/css/language-select.css" rel="stylesheet">
  <!-- owl.carousel CSS -->
  <link href="<?php  base_url();?>assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- magnific-popup -->
  <link href="<?php  base_url();?>assets/css/magnific-popup.css" rel="stylesheet">
  <!-- Main menu -->
  <link href="<?php  base_url();?>assets/css/menu.css" rel="stylesheet">
  <!-- Template Common Styles -->
  <link href="<?php  base_url();?>assets/css/template.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?php  base_url();?>assets/css/override.css" rel="stylesheet">
  <link href="<?php  base_url();?>assets/css/style.css" rel="stylesheet">
  <!-- Responsive CSS -->
  <link href="<?php  base_url();?>assets/css/responsive.css" rel="stylesheet">

  <script src="<?php  base_url();?>assets/js/vendor/modernizr-2.8.1.min.js"></script>
  <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="js/vendor/html5shim.js"></script>
        <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
      </head>


      <body id="page-top">
    <div class="overlay-bg">
      <div id="st-container" class="st-container">
       <div class="st-pusher">
         <div class="st-content">
          <header class="header">
           <nav class="top-bar">
            <div class="overlay-bg">
             <div class="container">
              <div class="row">
               
               <div class="col-sm-6 col-xs-12">
                <div class="call-to-action">
                 <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-phone"></i> (02)519-3391</a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i>admin@quickredcargo.com</a></li>
                </ul>
              </div><!-- /.call-to-action -->
            </div><!-- /.col-sm-6 -->

            <div class="col-sm-6 hidden-xs">
              <div class="topbar-right">
                <div class="lang-support pull-right">
                <!-- <select class="cs-select cs-skin-elastic">
                 <option value="" disabled selected>Language</option>
                 <option value="united-kingdom" data-class="flag-uk">English</option>
                 <option value="france" data-class="flag-france">French</option>
                 <option value="spain" data-class="flag-spain">Spanish</option>
                 <option value="south-africa" data-class="flag-bd">Bengali</option>
               </select> -->
             </div>

           <!-- <ul class="social-links list-inline pull-right">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
          </ul> -->
        </div><!-- /.social-links -->
      </div><!-- /.col-sm-6 -->
      
    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.overlay-bg -->
</nav><!-- /.top-bar -->

  <!-- <div id="search">
   <button type="button" class="close">×</button>
   <form>
     <input type="search" value="" placeholder="type keyword(s) here" />
     <button type="submit" class="btn btn-primary">Search</button>
   </form>
 </div> -->

 <nav class="navbar navbar-default" role="navigation">
  
  <div class="container mainnav">
   <div class="navbar-header">
    <h1 class="logo">
      <a class="navbar-brand" href="<?php site_url();?>home"><img src="<?php  base_url();?>assets/img/logo.png" alt=""></a>
    </h1>
    <!-- offcanvas-trigger -->

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    
  </button>

</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-collapse">

  

  <span class="search-button pull-right"><!-- <a href="#search"><i class="fa fa-search"></i></a> --></span>

  <ul class="nav navbar-nav navbar-right">
   <!-- Home -->
   <li class="<?php if($this->uri->segment(1)=="home"){echo "active";}?>"><a href="<?php site_url();?>home">Home</a></li>
   <!-- /Home -->

   <!-- Pages -->
   <li class="dropdown <?php if($this->uri->segment(1) == "about" || $this->uri->segment(1) == "service" || $this->uri->segment(1) == "career"){echo "active";}?>"><a href="#">Pages <span class="fa fa-angle-down"></span></a>
    <!-- submenu-wrapper -->
    <div class="submenu-wrapper">
      <div class="submenu-inner">
        <ul class="dropdown-menu">
         <li><a href="<?php  site_url();?>about">About</a></li>
         <li><a href="<?php  site_url();?>service">Service</a></li>
         <!-- <li><a href="<?php site_url();?>our_people">Our people</a></li> -->
         <!-- <li><a href="<?php site_url();?>career">Career</a></li> -->
         <!-- <li><a href="<?php site_url();?>faq">FAQ Page</a></li> -->
       </ul>
     </div>
   </div>
   <!-- /submenu-wrapper -->
 </li>
 <!-- /Pages -->

 <!-- Services -->
 <li class="dropdown <?php if($this->uri->segment(1) == "air" || $this->uri->segment(1) == "marine" || $this->uri->segment(1) == "moving" || $this->uri->segment(1) == "shipping" || $this->uri->segment(1) == "transportation" || $this->uri->segment(1) == "trucking" || $this->uri->segment(1) == "brokerage" || $this->uri->segment(1) == "domestic" || $this->uri->segment(1) == "international" || $this->uri->segment(1) == "land" || $this->uri->segment(1) == "warehouse"|| $this->uri->segment(1) == "packing" || $this->uri->segment(1) == "special_cargo" || $this->uri->segment(1) == "project_cargo"){echo "active";}?>""><a href="#">Services <span class="fa fa-angle-down"></span></a>
  <!-- submenu-wrapper -->
  <div class="submenu-wrapper">
    <div class="submenu-inner">
      <ul class="dropdown-menu">
           <!-- <li><a href="<?php site_url();?>air">Air transportation</a></li>
           <li><a href="<?php site_url();?>marine">Marine transportation</a></li>
           <li><a href="<?php site_url();?>moving">Moving & storage</a></li>
           <li><a href="<?php site_url();?>shipping">Shipping & operations</a></li>
           <li><a href="<?php site_url();?>transportation">Transportation logistics</a></li>
           <li><a href="<?php site_url();?>trucking">Trucking</a></li> -->
           <li><a href="<?php site_url();?>brokerage">Customs Brokerage</a></li>
           <li><a href="<?php site_url();?>domestic">Domestic</a></li>
           <li><a href="<?php site_url();?>international">International</a></li>
           <li><a href="<?php site_url();?>land">Land Transport</a></li>
           <li><a href="<?php site_url();?>warehouse">Warehouse</a></li>
           <li><a href="<?php site_url();?>packing">Packing and Crating</a></li>
           <li><a href="<?php site_url();?>special_cargo">Special Cargo Transfer</a></li>
           <li><a href="<?php site_url();?>project_cargo">Project Cargo Consultation</a></li>
         </ul>
       </div>
     </div>
     <!-- /submenu-wrapper -->
   </li>
   <!-- MEGA MENU -->
   
   <li class="<?php if($this->uri->segment(1)=="contact"){echo "active";}?>"><a href="<?php site_url();?>contact">Contact</a></li>
 </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container -->


</nav>
</header>
