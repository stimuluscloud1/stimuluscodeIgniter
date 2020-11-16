<?php 

if(isset($_POST['submit'])){
  $emailUser = $_POST['emailNews'];

  $message = "
<html>
<head>
<title>News Letter Subscription</title>
</head>
<body>
<p>News Letter Subscription</p>
<table>
<tr>
<th>".$emailUser."</th>
</tr>
<tr>
</tr>
</table>
</body>
</html>
";
  $this->load->library('email');
  $this->email->set_header('Content-Type', 'text/html');

  $this->email->from('info@stimuluscloud.in', 'Stimulus Cloud');
  $this->email->to('stimuluscloud@gmail.com');
  $this->email->cc('saurabhstimulus@gmail.com');


  $this->email->subject('Lead Form');
  $this->email->message($message);

  $this->email->send();
  }


?>


<!--footer start-->
 
<footer class="py-11 bg-primary position-relative" data-bg-img="<?php echo site_url('assets/images/bg/03.png');?>">
    <div class="shape-1" style="height: 150px; overflow: hidden;">
      <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C150.00,150.00 271.49,-50.00 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #fff;"></path>
      </svg>
    </div>
    <div class="container mt-11">
      <div class="row">
        <div class="col-12 col-lg-5 col-xl-4 mr-auto mb-6 mb-lg-0">
          <div class="subscribe-form bg-warning-soft p-5 rounded">
            <h5 class="mb-4 text-white">Newsletter</h5>
            <h6 class="text-light">Subscribe Our Newsletter</h6>
            <form id="mc-form" class="group" method="POST" action="">
              <input type="email" value="" name="emailNews" class="email form-control" id="mc-email" placeholder="Email Address" required="" style="height: 60px;">
              <input class="btn btn-outline-light btn-block mt-3 mb-2" type="submit" name="submit" value="Subscribe">
            </form> <small class="text-light">Get started for 1 Month free trial No Purchace required.</small>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-7">
          <div class="row">
            <div class="col-12 col-sm-4 navbar-dark">
              <h5 class="mb-4 text-white">Pages</h5>
              <ul class="navbar-nav list-unstyled mb-0">
                <li class="mb-3 nav-item"><a class="nav-link <?php if($this->uri->segment(1)=='about'){ echo 'active';}?>" href="<?php echo base_url('about');?>">About</a>
                </li>
                </li>
                <li class="mb-3 nav-item"><a class="nav-link <?php if($this->uri->segment(1)=='about'){ echo 'active';}?>" href="<?php echo base_url('career');?>">Career</a>
                </li>
                <li class="mb-3 nav-item"><a class="nav-link <?php if($this->uri->segment(1)=='our-portfolio'){ echo 'active';}?>" href="<?php echo base_url('our-portfolio');?>">Portfolio</a>
                </li>
                <li class="mb-3 nav-item"><a class="nav-link <?php if($this->uri->segment(1)=='contact-us'){ echo 'active';}?>" href="<?php echo base_url('contact-us');?>">Contact</a>
                </li>

              </ul>
            </div>
            <div class="col-12 col-sm-4 mt-6 mt-sm-0 navbar-dark">
              <h5 class="mb-4 text-white">Services</h5>
              <ul class="navbar-nav list-unstyled mb-0">
                <li class="mb-3 nav-item"><a class="nav-link" href="#">Website</a>
                </li>
                <li class="mb-3 nav-item"><a class="nav-link" href="#">Mobile App</a>
                </li>
                <li class="mb-3 nav-item"><a class="nav-link" href="#">Software</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">API</a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-sm-4 mt-6 mt-sm-0 navbar-dark">
              <h5 class="mb-4 text-white">Other</h5>
              <ul class="navbar-nav list-unstyled mb-0">
                <li class="mb-3 nav-item"><a class="nav-link" href="#">Term Of Service</a>
                </li>
                <li class="mb-3 nav-item"><a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="mb-3 nav-item"><a class="nav-link" href="#">Support</a>
                </li>
                <li class="mb-3 nav-item"><a class="nav-link" href="https://us04web.zoom.us/j/5170895113?pwd=VEoyVlVvYjFiRmIwSWZQSnROa2dPUT09">Zoom Meeting</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-12 col-sm-6">
              
            </div>
            <div class="col-12 col-sm-6 mt-6 mt-sm-0">
              <ul class="list-inline mb-0">
                <li class="list-inline-item"><a class="text-light ic-2x" href="https://www.facebook.com/Stimuluscloudservices" target="_blank"><i class="la la-facebook"></i></a>
                </li>
                <li class="list-inline-item"><a class="text-light ic-2x" href="https://dribbble.com/stimulus_cloud/about" target="_blank"><i class="la la-dribbble"></i></a>
                </li>
                <li class="list-inline-item"><a class="text-light ic-2x" href="https://www.instagram.com/stimulus_cloud/" target="_blank"><i class="la la-instagram"></i></a>
                </li>
                <li class="list-inline-item"><a class="text-light ic-2x" href="https://twitter.com/stimulus_cloud" target="_blank"><i class="la la-twitter"></i></a>
                </li>
                <li class="list-inline-item"><a class="text-light ic-2x" href="https://www.linkedin.com/company/stimuluscloud/" target="_blank"><i class="la la-linkedin"></i></a>
                <li class="list-inline-item"><a class="text-light ic-2x" href="https://join.skype.com/invite/FKkqI6Ejb5dU" target="_blank"><i class="la la-skype"></i></a>
                
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-white text-center mt-8">
        <div class="col">
          <hr class="mb-8">Copyright 2020 Designed & Developed by <u><a class="text-white" href="https://stimuluscloud.in">Stimulus Cloud</a></u> | All Rights Reserved</div>
      </div>
    </div>
  </footer>
  
  <!--footer end-->
  
  </div>
  
  <!-- page wrapper end -->
  
   
  <!--back-to-top start-->
  
  <div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-angle-up"></i></a></div>
  
  <!--back-to-top end-->
  
  <!-- inject js start -->
  
  <script src="<?php echo site_url('assets/js/theme-plugin.js');?>"></script>
  <script src="<?php echo site_url('assets/js/theme-script.js');?>"></script>
  
  <!-- inject js end -->
  
  </body>
  
  
  <!-- Mirrored from themeht.com/bootsland/html/index-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Oct 2020 08:26:53 GMT -->
  </html>
  