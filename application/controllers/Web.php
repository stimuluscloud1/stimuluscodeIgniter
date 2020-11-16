<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
Public Function index : View, Insert and Delete Category 
Public Function check_duplicate_category : Check the duplicate entry in deatebase 
*/

class Web extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('text');
  }

  public function index()
  {
    $table1 = 'blog';
    $condition = array(
      'id' => $this->uri->segment(2)
    );
    $order1 = '';
    $order2 = '';
    $this->load->model('common');
    $resultF['resultB'] = $this->common->dataList($table1, $condition, $order1, $order2);

    $this->load->view('index', $resultF);
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
    $table = 'blog';
    $condition = array(                   //get category list
      'status' => '1'
    );
    $order1 = 'id';
    $order2 = 'DESC';
    $this->load->model('common');
    $resultF['resultB'] = $this->common->dataListF($table, $condition, $order1, $order2)->result();

    $this->load->view('blog', $resultF);
  }

  public function form()
  {

    $this->load->view('contact-form');
  }

  public function career()
  {

    $this->load->view('career');
  }

  public function detailedView()
  {
    $table1 = 'blog';
    $table = 'category';
    $condition = array(
      'slug' => $this->uri->segment(2)
    );
    $order1 = '';
    $order2 = '';
    $this->load->model('common');
    $resultF['resultB'] = $this->common->dataList($table1, $condition, $order1, $order2);

    $condition1 = array(                   //get category list
      'status' => '1'
    );
    $resultF['resultC'] = $this->common->dataListF($table, $condition1, $order1, $order2)->result();

    $this->load->view('blog-detail', $resultF);
  }

  public function ecommerce()
  {

    $this->load->view('ecommerce');
  }

  public function website()
  {

    $this->load->view('website-development');
  }

  public function mobileApp()
  {

    $this->load->view('app-development');
  }

  public function software()
  {

    $this->load->view('software-development');
  }

  public function cloud()
  {

    $this->load->view('cloud-support');
  }

  public function api()
  {

    $this->load->view('api-integration');
  }

  public function link1()
  {

    $this->load->view('link1');
  }

  public function link2()
  {

    $this->load->view('link2');
  }
  public function link3()
  {

    $this->load->view('link3');
  }
  public function link4()
  {

    $this->load->view('link4');
  }
  public function link5()
  {

    $this->load->view('link5');
  }
  public function link6()
  {

    $this->load->view('link6');
  }
}
