<!--header start-->

<header class="site-header"> 
 <div id="header-wrap">  
    <div class="container">     
      <div class="row">
        <!--menu start-->
        <div class="col d-flex align-items-center justify-content-between">
          <a class="navbar-brand logo text-dark h2 mb-0" href="<?php echo base_url('index');?>">
              <img src="assets/images/hero/logo.png" style="width: 40% !important" alt="Stimulus Cloud">
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
                <li class="nav-item"> <a class="nav-link <?php if($this->uri->segment(1)=='blogs'){ echo 'active';}?>" href="<?php echo base_url('blogs');?>">Blogs</a>
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