<!--form start-->
<?php

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
<title>Lead Form- Lead Page</title>
</head>
<body>
<p>Lead Form- Lead Page</p>
<table>
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

<style>

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}


input[type=number] {
  -moz-appearance: textfield;
}

</style>




<section>
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-lg-6 col-xl-6 mb-8 mb-lg-0 order-lg-1">
        <div> <span class="badge badge-primary-soft p-2">
                  <i class="la la-exclamation ic-3x rotation"></i>
              </span>
          <h2 class="mt-3">Professional IT Services For Individual And Companies</h2>
          <p class="lead mb-0">We have refined the business and project development model to a reliable technology that can still be tweaked per specific client needs.</p>
        </div>
        <div class="mt-5">
          <div class="mb-3">
            <div class="d-flex align-items-center">
              <div class="badge-primary-soft rounded p-1">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <p class="mb-0 ml-3">Complete Business Solution</p>
            </div>
          </div>
          <div class="mb-3">
            <div class="d-flex align-items-center">
              <div class="badge-primary-soft rounded p-1">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <p class="mb-0 ml-3">Fit Your Needs At Your Budget</p>
            </div>
          </div>
          <div>
            <div class="d-flex align-items-center">
              <div class="badge-primary-soft rounded p-1">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <p class="mb-0 ml-3">Best Industry Solutions</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-5">
        <div class="shadow rounded p-5">
          <img class="img-fluid mb-8" src="<?php echo site_url('assets/images/about/03.png');?>" alt="Image">
          <form class="row" method="POST" action="">
            <div class="messages"></div>
            <div class="form-group col-sm-6">
              <input type="text" class="form-control input-1" id="InputName1" name="fName" placeholder="First Name" required="required" data-error="Firstname is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
              <input type="text" class="form-control input-1" id="InputName2" name="lName" placeholder="Last Name" required="required" data-error="Lastname is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-12">
              <input type="email" class="form-control input-1" id="InputEmail1" name="email" placeholder="Enter email" required="required" data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-12">
              <input type="number" class="form-control input-1" id="InputMobile" name="mobile" placeholder="Enter mobile number" required="required" data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-12">
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
            <div class="form-group col-md-12">
              <input id="form_subject" type="tel" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-12">
              <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-12 mt-5">
<input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </div>
          </form>
        </div>
      </div>      
    </div>
  </div>
</section>

<!--form end-->