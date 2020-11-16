<?php include('header.php');?>

<!--hero section start-->

<section class="position-relative">
  <div id="particles-js"></div>
  <div class="container">
    <div class="row  text-center">
      <div class="col">
        <h1>Portfoilo</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
            <li class="breadcrumb-item"><a class="text-dark" href="<?php echo base_url('index')?>">Home</a>
            </li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Portfoilo</li>
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

<!--portfolio start-->

<section>
  <div class="container">
    <div class="row align-items-end mb-8">
      <div class="col-12 col-md-12 col-lg-5">
        <div> <span class="badge badge-primary-soft p-2 font-w-6">
                  Portfolio
              </span>
          <h2 class="mt-3">We’ve done lot’s of work, Let’s Check some from here</h2>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-6 ml-auto">
        <div>
          <p class="lead mb-0">All types of businesses need access to development resources, so we give you the option to decide how much you need to use.</p>
        </div>
      </div>
    </div>
    <!-- / .row -->
    <div class="row">
      <div class="col text-center">
        <div class="portfolio-filter">
          <button data-filter="" class="is-checked mb-3 mb-sm-0">All Work</button>
          <button data-filter=".cat1" class="mb-3 mb-sm-0">Design</button>
          <button data-filter=".cat2" class="mb-3 mb-sm-0">Marketing</button>
          <button data-filter=".cat3">Branding</button>
          <button data-filter=".cat4">Development</button>
        </div>
      </div>
    </div>
  </div> 
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="grid columns-3 row popup-gallery">
          <div class="grid-sizer"></div>
          <div class="grid-item col-lg-4 col-md-6 mb-5 cat3">
            <div class="portfolio-item position-relative overflow-hidden">
              <img class="img-center w-100" src="<?php echo base_url('assets/images/portfolio/01.jpg')?>" alt="">
              <div class="portfolio-title d-flex justify-content-between align-items-center">
                <div> <small class="text-light mb-2">Branding</small>
                  <h6><a class="btn-link text-white" href="#">Web Development</a></h6>
                </div>
                <a class="popup-img h2 text-white" href="<?php echo base_url('assets/images/portfolio/large/01.jpg')?>"> <i class="la la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="grid-item col-lg-4 col-md-6 mb-5 cat3">
            <div class="portfolio-item position-relative overflow-hidden">
              <img class="img-center w-100" src="<?php echo base_url('assets/images/portfolio/02.jpg')?>" alt="">
              <div class="portfolio-title d-flex justify-content-between align-items-center">
                <div> <small class="text-light mb-2">Branding</small>
                  <h6><a class="btn-link text-white" href="#">Web Development</a></h6>
                </div>
                <a class="popup-img h2 text-white" href="<?php echo base_url('assets/images/portfolio/large/02.jpg')?>"> <i class="la la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="grid-item col-lg-4 col-md-6 mb-5 cat4 cat2">
            <div class="portfolio-item position-relative overflow-hidden">
              <img class="img-center w-100" src="<?php echo base_url('assets/images/portfolio/03.jpg')?>" alt="">
              <div class="portfolio-title d-flex justify-content-between align-items-center">
                <div> <small class="text-light mb-2">Branding</small>
                  <h6><a class="btn-link text-white" href="#">Web Development</a></h6>
                </div>
                <a class="popup-img h2 text-white" href="<?php echo base_url('assets/images/portfolio/large/03.jpg')?>"> <i class="la la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="grid-item col-lg-4 col-md-6 mb-5 mb-lg-0 cat2 cat3">
            <div class="portfolio-item position-relative overflow-hidden">
              <img class="img-center w-100" src="<?php echo base_url('images/portfolio/04.jpg')?>" alt="">
              <div class="portfolio-title d-flex justify-content-between align-items-center">
                <div> <small class="text-light mb-2">Branding</small>
                  <h6><a class="btn-link text-white" href="#">Web Development</a></h6>
                </div>
                <a class="popup-img h2 text-white" href="<?php echo base_url('assets/images/portfolio/large/04.jpg')?>"> <i class="la la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="grid-item col-lg-4 col-md-6 mb-5 mb-md-0 cat1 cat4">
            <div class="portfolio-item position-relative overflow-hidden">
              <img class="img-center w-100" src="<?php echo base_url('assets/images/portfolio/05.jpg')?>" alt="">
              <div class="portfolio-title d-flex justify-content-between align-items-center">
                <div> <small class="text-light mb-2">Branding</small>
                  <h6><a class="btn-link text-white" href="#">Web Development</a></h6>
                </div>
                <a class="popup-img h2 text-white" href="<?php echo base_url('assets/images/portfolio/large/05.jpg')?>"> <i class="la la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="grid-item col-lg-4 col-md-6 cat1 cat3">
            <div class="portfolio-item position-relative overflow-hidden">
              <img class="img-center w-100" src="<?php echo site_url('assets/images/portfolio/06.jpg');?>" alt="">
              <div class="portfolio-title d-flex justify-content-between align-items-center">
                <div> <small class="text-light mb-2">Branding</small>
                  <h6><a class="btn-link text-white" href="#">Web Development</a></h6>
                </div>
                <a class="popup-img h2 text-white" href="<?php echo site_url('assets/images/portfolio/large/06.jpg');?>"> <i class="la la-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-11">
      <div class="col-12">
        <nav aria-label="...">
          <ul class="pagination">
            <li class="page-item mr-auto"> <a class="page-link" href="#">Previous</a>
            </li>
            <li class="page-item"><a class="page-link border-0 rounded text-dark" href="#">1</a>
            </li>
            <li class="page-item active" aria-current="page"> <a class="page-link border-0 rounded" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link border-0 rounded text-dark" href="#">3</a>
            </li>
            <li class="page-item"><a class="page-link border-0 rounded text-dark" href="#">...</a>
            </li>
            <li class="page-item"><a class="page-link border-0 rounded text-dark" href="#">5</a>
            </li>
            <li class="page-item ml-auto"> <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--portfolio end-->

</div>

<!--body content end--> 


<?php include('footer.php');?>