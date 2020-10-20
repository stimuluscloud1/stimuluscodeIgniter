<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
Public Function index : View, Insert and Delete Category 
Public Function check_duplicate_category : Check the duplicate entry in deatebase 
*/

class Web extends CI_Controller
{


  public function index()
  {

    $this->load->view('index');
  }

  public function services()
  {

    $this->load->view('services');
  }

  public function about()
  {

    $this->load->view('about');
  }

  public function portfolio()
  {

    $this->load->view('portfolio');
  }

  public function contact()
  {

    $this->load->view('contact');
  }

  public function blog()
  {

    $this->load->view('blog');
  }
  
  public function form()
  {

    $this->load->view('contact-form');
  }
  
  public function career()
  {

    $this->load->view('career');
  }
  

}
