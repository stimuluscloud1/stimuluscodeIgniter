<!DOCTYPE html>
<html lang="en">
<head>

<!-- meta tags -->
<meta charset="utf-8">
<!-- Title -->
<title><?php echo $resultB->blogTitle; ?></title>
<meta property="og:title" content="<?php echo $resultB->metaTitle; ?>" />

<meta property="og:description" content="<?php echo $resultB->metaDescription; ?>" />

<meta property="og:keywords" content="<?php echo $resultB->metaKeywords; ?>" />

<meta property="og:type" content="website" />

<meta property="og:locale" content="en_US" />

<meta property="og:site_name" content="Stimulus Cloud" />

<meta property="og:url" content="<?php echo base_Url('blog/') . $resultB->slug; ?>" />

<meta property="og:image" content="<?php echo base_url('/admin/upload/icons/') ?><?php echo $resultB->image; ?>">


<link rel="author" href="Stimulus Cloud" />

<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="@stimulus_cloud" />
<meta property="og:url" content="https://stimuluscloud.in" />

<meta property="twitter:title" content="<?php echo $resultB->metaTitle; ?>" />

<meta property="twitter:description" content="<?php echo $resultB->metaDescription; ?>" />

<meta property="twitter:image" content="<?php echo base_url('/admin/upload/icons/') ?><?php echo $resultB->image; ?>">

<!-- Share Button-->
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f9c015dd924480012e1d0b7&product=sticky-share-buttons' async='async'></script>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="classification" content="Web Development Company in Raipur">

<meta name="robots" content="index,follow" />

<meta name="googlebot" content="index,follow">

<meta name="YahooSeeker" content="index,follow" />

<meta name="msnbot" content="index,follow" />

<meta name="googlerank" content="all" />

<meta name="copyright" content=" Stimulus Cloud Services LLP Website Designing Company Raipur "/>

<meta name="author" content="Stimulus Cloud, Web Designer & Developer in  Korba, Raipur, Bilaspur, Bhilai, Durg, Rajnandgaon, Chhattisgarh India"/>

<meta name="expires" content="never">

<meta name="document-rating" content="safe for Kids">

<meta name="geography" content="India"/>

<meta name="distribution" content="global"/>

<meta name="language" content="en-us"/>

<meta name="revisit-after" content="7 Days"/>

<meta name="publisher" content="www.stimuluscloud.in">

<meta name="rating" content="general">

<meta name=geography content="Korba, Raipur, Bilaspur, Bhilai, Durg, Rajnandgaon, Chhattisgarh- India ">

<meta name="geo.region" content="IN-CG" />

<meta name="geo.placename" content="Raipur" />

<meta name="search engines" content="http://www.google.co.in/">



<!---Google Web Master --->
<meta name="google-site-verification" content="yEEIl5-cYJhXHyx7o8kXmN4KujvzxEh6mihaHYNI2Ts" />

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122348578-2"></script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122348578-2');
</script>

<!---Schema MarkUp --->
<script type="application/ld+json"> 
  { 
      "@context" : "http://schema.org",
          "@type" : "Corporation", 
              "description": "Stimulus Cloud is a Specialized IT Company with a Strong Global Presence. We Provide Web Development , Mobile App Development, Ecommerce Development, SEO & Digital Marketing Service. We Serve 5+ Countries.",
                  "address" : {
                      "@type": "PostalAddress",
                          "addressLocality": "KORBA", 
                              "addressRegion": "CHHATTISGARH", 
                                  "postalCode": "495677", 
                                      "streetAddress": "MIG-II/33, FIRST FLOOR, RP NAGAR, PHASE-I, NIHARIKA, KORBA, EAST, CHHATTISGARH" }, 
                                          "name":"STIMULUS CLOUD",
                                              "url":"https://www.stimuluscloud.in",
                                                  "logo": "http://www.stimuluscloud.in/images/logo01.png",
                                                          "email":"info@stimuluscloud.in",
                                                              "telephone":"+91-8982458982",
                                                                  "sameAs": [
              "https://www.facebook.com/Stimuluscloudservices",
              "https://www.instagram.com/stimulus_cloud",
              "https://twitter.com/stimulus_cloud",
              "https://www.linkedin.com/company/stimuluscloud"
                                                                  ]
  } 
</script>

<!-- Favicon Icon -->
<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>"/>

<!-- inject css start -->

<link href="<?php echo base_url('assets/css/theme-plugin.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/theme.min.css');?>" rel="stylesheet" />




<!-- inject css end -->



<style>
  @media only screen and (max-width: 600px) {
  .logo {
  width: 300px;
  }
}
</style>
</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">
  
<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader">
    <span></span>
  </div>
</div>

<!-- preloader end -->

<!--header start-->

<header class="site-header"> 
 <div id="header-wrap">  
    <div class="container">     
      <div class="row">
        <!--menu start-->
        <div class="col d-flex align-items-center justify-content-between">
          <a class="navbar-brand logo text-dark h2 mb-0" href="<?php echo base_url('index');?>">
              <img src="<?php echo base_url('assets/images/hero/logo.png');?>" style="width: 40% !important" alt="Stimulus Cloud">
             </a>
          <nav class="navbar navbar-expand-lg navbar-light ml-auto mr-auto">            
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="true" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link <?php if($this->uri->segment(1)=='index' OR $this->uri->segment(1)=='') { echo 'active';}?>" href="<?php echo base_url('index');?>">Home</a>
                </li>
                <li class="nav-item"> <a class="nav-link <?php if($this->uri->segment(1)=='about'){ echo 'active';}?>" href="<?php echo base_url('about');?>">About</a>
                </li>
                <li class="nav-item"> <a class="nav-link <?php if($this->uri->segment(1)=='our-services'){ echo 'active';}?>" href="<?php echo base_url('our-services');?>">Services</a>
                </li>
                <li class="nav-item"> <a class="nav-link <?php if($this->uri->segment(1)=='our-portfolio'){ echo 'active';}?>" href="<?php echo base_url('our-portfolio');?>">Portfolio</a>
                </li>
                <li class="nav-item"> <a class="nav-link <?php if($this->uri->segment(1)=='blogs' OR $this->uri->segment(1)=='blog'){ echo 'active';}?>" href="<?php echo base_url('blogs');?>">Blogs</a>
                </li>
                <li class="nav-item"> <a class="nav-link <?php if($this->uri->segment(1)=='contact-us'){ echo 'active';}?>" href="<?php echo base_url('contact-us');?>">Contact</a>
                </li>
              </ul>
            </div>
          </nav>  
          <a class="btn btn-primary ml-8 d-none d-lg-block" href="https://www.instamojo.com/@stimuluscloud" style="width: 185px;">Pay Now</a>                              
        </div>
        <!--menu end-->
      </div>
    </div>
  </div>
</header>

<!--header end-->

<!--hero section start-->

<section class="position-relative">
  <div id="particles-js"></div>
  <div class="container">
    <div class="row  text-center">
      <div class="col">
        <h1>Blog</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
            <li class="breadcrumb-item"><a class="text-dark" href="<?php echo base_url('index'); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Blog</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- / .row -->
  </div>
  <!-- / .container -->
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">

  <!--blog start-->

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Blog Card -->
          <div class="card border-0 bg-transparent">
            <div class="position-absolute bg-white shadow-primary text-center p-2 rounded ml-3 mt-3">
              <?php
              $dateData = $resultB->created_at;
              $date = date('Y-M-d', strtotime($dateData));
              $splitTimeStamp = explode("-", $date);
              //$dateYear = $splitTimeStamp[0];
              $dateMonth = $splitTimeStamp[1];
              $dateDay = $splitTimeStamp[2];
              ?>

              <?php echo $dateDay; ?><br><?php echo $dateMonth; ?></div>
            <img class="card-img-top shadow rounded" src="<?php echo base_url('/admin/upload/icons/') ?><?php echo $resultB->image; ?>" alt="Image" />

            <div class="card-body">
              <h1><?php echo $resultB->blogTitle; ?></h1>
              <p><?php echo $resultB->description; ?></p>
            </div>
            <div class="media d-block d-md-flex mt-8 ml-5 ml-md-8 bg-primary-soft rounded shadow p-5">
            <img class="img-fluid shadow rounded" style="width: 75px;" alt="nikhil_gupta" src="<?php echo base_url('assets/images/nikhil.jpg');?>">
              <div class="media-body mx-0 mx-md-5 mx-lg-8 my-5 my-md-0">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                  <h6>Nikhil Gupta</h6>
                </div>
                <p>Founder <a href="https://stimuluscloud.in">Stimulus Cloud</a> , <a href="#">Herbal Aushdhi</a>, <a href="#">2 Minutes</a>, <a href="https://chhollytube.com">Chhollytube</a>, State Co-ordinator <a href="https://inn24.today">INN24 Today</a>.</p>
              </div> <a class="align-items-center d-inline-block btn btn-primary align-self-center" href="https://wa.me/919669977751"><i class="ti-comments mr-2"></i> Let's Connect </a>
            </div>


<hr>  
<h3 class="mt-5" style="text-align: center">Share Your Experiance</h3>
            <!-- ShareThis BEGIN -->
            <div class="sharethis-inline-reaction-buttons"></div>
            <!-- ShareThis END -->
            <div class="d-md-flex justify-content-between mt-5 mb-5">
              <!-- ShareThis BEGIN -->
              <div class="sharethis-inline-follow-buttons"></div><!-- ShareThis END -->
              <div class="text-md-right mt-5 mt-md-0">

                <ul class="list-inline">
                  <?php foreach ($resultC as $category) { ?>
                    <li class="list-inline-item"><a class="btn btn-link text-dark btn-sm bg-primary-soft m-1" href="#"><?php echo $category->category; ?></a>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>

          <?php include('lead.php');?>
            <div></div>
          </div>
          <!-- End Blog Card -->
        </div>
      </div>
    </div>
  </section>

  <!--blog end-->

</div>

<!--body content end-->


<?php include('footer.php'); ?>