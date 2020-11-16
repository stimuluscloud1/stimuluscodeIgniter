<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
Public Function index : View, Insert and Delete Category 
Public Function check_duplicate_category : Check the duplicate entry in deatebase 
*/

class Blog extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common');
    $this->load->helper('text');
    if ($this->session->userdata('admin_session') != true) {      /* Admin Session */
      redirect("login");
    }
  }

  public function newBlog()
  {
    if($this->input->post('submit')){
      
      //*=============icon upload=======================*//
      $new_image_name = "imgName" . time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['icon']['name']);
      $config = array();
      $config['upload_path'] = 'upload/icons/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['file_name'] = $new_image_name;
      $config['overwrite'] = false;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->upload->do_upload('icon');
      $data = $this->upload->data()['file_name'];
      //*=============icon upload=======================*//
 

      $table= 'blog';
      $dataI['blogTitle'] = $this->input->post('blogTitle');
      $dataI['metaTitle'] = $this->input->post('metaTitle');
      $lowerSlug = strtolower($this->input->post('metaTitle'));
      $dataI['slug'] =  url_title(convert_accented_characters($lowerSlug, 'dash', true));
      $dataI['metaDescription'] = $this->input->post('metaDescription');
      $dataI['metaKeywords'] = $this->input->post('metaKeywords');
      $dataI['category'] = $this->input->post('category');
      $dataI['image'] = $data;
      $dataI['description'] = $this->input->post('description');
      $dataI['created_by'] = $this->session->userdata('admin_id');
 
      $dataI['status'] = '1';
      $this->common->insertData($table, $dataI);
    }
    $table = 'category';
    $condition = array(                   //get category list
      'status' => '1'
    );
    $order1 = 'id';
    $order2 = 'DESC';
    $resultF['resultC'] = $this->common->dataListF($table, $condition, $order1, $order2)->result();

    $this->load->view('blog-add', $resultF);
  }

  public function listBlog()
  {
    $table = 'category';
    $table1 = 'blog';
    $condition = array(                   //get category list
      'status' => '1'
    );
    $order1 = 'id';
    $order2 = 'DESC';
    $resultF['resultC'] = $this->common->dataListF($table, $condition, $order1, $order2)->result();
    $resultF['resultB'] = $this->common->dataListF($table1, $condition, $order1, $order2)->result();  

    $this->load->view('blog-list', $resultF);
  }

  public function listDelete(){
    if($this->uri->segment(2)=='delete')
    {
      $table1='blog';
      $condition=array(
        'id' => $this->uri->segment(3)
      );
      $set['status'] = '0';
      $this->common->dataUpdate($table1,$condition,$set);
    }

    $table = 'category';
    $table1 = 'blog';
    $condition = array(                   //get category list
      'status' => '1'
    );
    $order1 = 'id';
    $order2 = 'DESC';
    $resultF['resultC'] = $this->common->dataListF($table, $condition, $order1, $order2)->result();
    $resultF['resultB'] = $this->common->dataListF($table1, $condition, $order1, $order2)->result();  

    $this->load->view('blog-list', $resultF);
  }

  public function blogDetail($id)
  {
    $table1 = 'blog';
    $condition = array(                   //get category list
      'id' => $id
    );
    $order1 = '';
    $order2 = '';
    $resultF['resultB'] = $this->common->dataList($table1, $condition, $order1, $order2);  

    $this->load->view('blog-detail', $resultF);
  }

  public function blogEdit($id)
  {
    if($this->input->post('submit'))
    {
      $table= 'blog';
      $condition=array(
        'id' => $this->uri->segment(2)
      );

      //*=============icon upload=======================*//
      $new_image_name = "imgName" . time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['icon']['name']);
      $config = array();
      $config['upload_path'] = 'upload/icons/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['file_name'] = $new_image_name;
      $config['overwrite'] = false;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->upload->do_upload('icon');
      $data = $this->upload->data()['file_name'];
      //*=============icon upload=======================*//

      
      $set['blogTitle'] = $this->input->post('blogTitle');
      $set['metaTitle'] = $this->input->post('metaTitle');
      $lowerSlug = strtolower($this->input->post('metaTitle'));
      $set['slug'] =  url_title(convert_accented_characters($lowerSlug, 'dash', true));
      $set['metaDescription'] = $this->input->post('metaDescription');
      $set['metaKeywords'] = $this->input->post('metaKeywords');
      $set['category'] = $this->input->post('category');
      $set['image'] = $data;
      $set['description'] = $this->input->post('description');
      $set['created_by'] = $this->session->userdata('admin_id');
      $set['status'] = '1';
      $this->common->dataUpdate($table,$condition,$set);
      
    }

    $table = 'category';
    $table1 = 'blog';
    $condition = array(                   //get category list
      'id' => $id
    );
    $order1 = '';
    $order2 = '';
    $resultF['resultB'] = $this->common->dataList($table1, $condition, $order1, $order2);  

    
    $condition1 = array(                   //get category list
      'status' => '1'
    );
    $order1 = 'id';
    $order2 = 'DESC';
    $resultF['resultC'] = $this->common->dataListF($table, $condition1, $order1, $order2)->result();

    $this->load->view('blog-edit', $resultF);
  }
  
}
