<?php
class Lead{

   public function sendMail($data){
    
    $firstName = $data['fName'];
    $lastName = $data['lName'];
    $emailUser = $data['email'];
    $mobile = $data['mobile'];
    $services = $data['services'];
    $subject = $data['subject'];
    $clientMessage = $data['message'];

    $message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Booking Information</p>
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
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";
    $this->load->library('email');

    $this->email->from('info@stimuluscloud.in', 'Stimulus Cloud');
    $this->email->to('stimuluscloud@gmail.com');
    $this->email->cc('saurabhstimulus@gmail.com');


    $this->email->subject('Lead Form');
    $this->email->message($message);

    $this->email->send();
    return true;
   }    
   
}
