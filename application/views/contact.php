<?php include('header.php');


if(isset($_POST['submit'])){
  $firstName = $_POST['fName'];
  $lastName = $_POST['lName'];
  $emailUser = $_POST['email'];
  $mobile = $_POST['mobile'];
  $services = $_POST['services'];
  $subject = $_POST['subject'];
  $clientMessage = $_POST['message'];

  $message = "
<html>
<head>
<title>Lead Form- Contact Page</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<p>Lead Form- Contact Page</p>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Services</th>
<th>Mobile</th>
<th>Subject</th>
<th>Message</th>
</tr>
<tr>
<th>".$firstName." ".$lastName."</th>
<th>".$emailUser."</th>
<th>".$services."</th>
<th>".$mobile."</th>
<th>".$subject."</th>
<th>".$clientMessage."</th>
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


<!--hero section start-->

<section class="position-relative">
  <div id="particles-js"></div>
  <div class="container">
    <div class="row  text-center">
      <div class="col">
        <h1>Contact Us</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
            <li class="breadcrumb-item"><a class="text-dark" href="<?php echo base_url('index')?>">Home</a>
            </li>
            <li class="breadcrumb-item active text-primary" aria-current="page">Contact Us</li>
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

<section>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-4 col-md-12">
        <div>
          <svg class="feather feather-map-pin" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#1360ef" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          <h4 class="mt-5">Address:</h4>
            <span class="text-black">203, Block-A, RDA Colony, Indraprasth, Raipur, CG, India</span>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div>
          <svg class="feather feather-mail" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#1360ef" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          <h4 class="mt-5">Email Us</h4>
         <a href="mailto:nikhil@stimuluscloud.in"> nikhil@stimuluscloud.in</a>
         <a href="mailto:saurabh@stimuluscloud.in"> saurabh@stimuluscloud.in</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div>
          <svg class="feather feather-phone-call" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#1360ef" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <h4 class="mt-5">Phone Number</h4>
         <a href="tel:+918982458982">+91-898-245-8982</a><br>
         <a href="tel:+91-9669977751">+91-966-997-7751</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row justify-content-center mb-5 text-center">
      <div class="col-12 col-lg-8">
        <div> <span class="badge badge-primary-soft p-2">
                  <i class="la la-bold ic-3x rotation"></i>
              </span>
          <h2 class="mt-4 mb-0">Drop A Line</h2>
          <p class="lead mb-0">Get in touch and let us know how we can help. Fill out the form and we’ll be in touch as soon as possible.</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-12 col-lg-10">
          <form class="row" method="POST" action="">
            <div class="messages"></div>
            <div class="form-group col-md-6">
              <input id="form_name" type="text" name="fName" class="form-control" placeholder="First Name" required="required" data-error="Name is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-6">
              <input id="form_name1" type="text" name="lName" class="form-control" placeholder="Last Name" required="required" data-error="Name is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-12">
              <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-12">
              <input id="form_phone" type="tel" name="mobile" class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-6">
              <select class="form-control" name="services" required>
              <option>- Select Service</option>
                <option value="IT Consulting">IT Consulting</option>
                <option value="Website Development">Website Development</option>
                <option value="Mobile App Development">Mobile App Development</option>
                <option value="API Integration">API Integration</option>
                <option value="Software Development">Software Development</option>
                <option value="Hosting">Hosting</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <input id="form_subject" type="tel" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-12">
              <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-12 text-center mt-4">
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
             
            </div>
          </form>
    </div>
    </div>
    
  </div>
</section>



</div>

<!--body content end--> 

<?php include('footer.php');?>