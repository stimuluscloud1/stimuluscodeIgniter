<?php include('header.php'); ?>

<!--hero section start-->

<section class="position-relative">
  <div id="particles-js"></div>
  <div class="container">
    <div class="row  text-center">
      <div class="col">
        <h1>Our Blog</h1>
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
      <?php foreach ($resultB as $blog) { ?>
      <div class="col-12 col-lg-4 mb-6 mb-lg-0">
        
          
            <!-- Blog Card -->
            <div class="card border-0 bg-transparent">
              <div class="position-absolute bg-white shadow-primary text-center p-2 rounded ml-3 mt-3">
                <?php
                $dateData = $blog->created_at;
                $date = date('Y-M-d', strtotime($dateData));
                $splitTimeStamp = explode("-", $date);
                //$dateYear = $splitTimeStamp[0];
                $dateMonth = $splitTimeStamp[1];
                $dateDay = $splitTimeStamp[2];
                ?>

                <?php echo $dateDay; ?><br><?php echo $dateMonth; ?></div>
              <img class="card-img-top shadow rounded" src="<?php echo base_url('/admin/upload/icons/') ?><?php echo $blog->image; ?>" alt="Image">
              <div class="card-body pt-5"> <a class="d-inline-block text-muted mb-2" href="#"><?php echo $blog->category; ?></a>
                <h2 class="h5 font-weight-medium">
                  <a class="link-title" href="<?php echo base_Url('blog/') . $blog->slug; ?>"><?php echo $blog->blogTitle; ?></a>
                </h2>

              </div>
              <div class="card-footer bg-transparent border-0 pt-0">
                <ul class="list-inline mb-0">
                  <li class="product-link mt-3"> <a href="<?php echo base_Url('blog/') . $blog->slug; ?>" class="add-cart"> View More</a>
                  </li>
                </ul>
              </div>
              <div></div>
            </div>
            <!-- End Blog Card -->
            
          </div><br><br>
          <?php } ?>
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

  <!--blog end-->

</div>

<!--body content end-->

<?php include('footer.php'); ?>