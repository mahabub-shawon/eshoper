<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of super_admin
 *
 * @author saidu_000
 */
session_start();

class Super_Admin extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('administrator', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['admin_content'] = $this->load->view('admin/dashboard', '', true);
        $data['title'] = 'Dashboard';
        $this->load->view('admin/admin_master', $data);
    }

//Add Categroy, Save Category and Manage Category Begin
    public function add_category() {
        $data = array();
        $data['admin_content'] = $this->load->view('admin/add_category', '', true);
        $data['title'] = 'Add Category';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category() {

        $this->super_admin_model->save_category_info();
        $data = array();
        $data['publication_status'] = $this->input->post('publication_status', true);
        if ($data['publication_status'] == '1') {
            $sdata = array();
            $sdata['message'] = 'Category Published';
            $this->session->set_userdata($sdata);
        }
        if ($data['publication_status'] == '0') {
            $sdata = array();
            $sdata['message'] = 'Category Saved But Not Published';
            $this->session->set_userdata($sdata);
        }
        redirect('super_admin/add_category');
    }

    public function manage_category() {
        $data = array();
        /* -------Start Pagination-------------------- */
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'super_admin/manage_category/';

        $config['total_rows'] = $this->db->count_all('tbl_category');
        $config['per_page'] = '3';
        //$config['full_tag_open'] = "<ul class='pagination'>";
        //$config['full_tag_close'] = '</ul>';
        $this->pagination->initialize($config);
        $data['all_category'] = $this->super_admin_model->select_all_category($config['per_page'], $this->uri->segment(3));

        /* -------End Pagination-------------------- */
        //$data['all_category']=$this->super_admin_model->select_all_category();
        $data['admin_content'] = $this->load->view('admin/manage_category', $data, true);
        $data['title'] = 'Manage Category';
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_category($category_id) {
        $this->super_admin_model->unpublished_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    public function published_category($category_id) {
        $this->super_admin_model->published_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    public function delete_category($category_id) {
        $this->super_admin_model->delete_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

//Add Categroy, Save Category and Manage Category Section End
//Edit Category Section Begin
    public function edit_category($category_id) {
        $data = array();
        //$data['all_category']=$this->super_admin_model->select_all_published_category();    //Get Category Dynamically in Dropdown Box in Add News Page
        $data['category_info'] = $this->super_admin_model->select_category_by_id($category_id);
        $data['title'] = 'Edit category';
        $data['admin_content'] = $this->load->view('admin/edit_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_category($category_id) {
        $this->super_admin_model->update_category_by_id($category_id);
        $sdata=array();
        $sdata['message'] = 'Category '.$category_id.' Update is succesfully done';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_category');
    }
/////////////////////////End Category Management/////////////////////////////



/////////////////////////Start SubCategory Management/////////////////////////////
    
    public function add_sub_category() {
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_category();
        $data['admin_content'] = $this->load->view('admin/add_sub_category', $data, true);
        $data['title'] = 'Add Category';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_sub_category() {

        $this->super_admin_model->save_sub_category_info();
        $data = array();
        $data['publication_status'] = $this->input->post('publication_status', true);
        if ($data['publication_status'] == '1') {
            $sdata = array();
            $sdata['message'] = 'Sub Category Published';
            $this->session->set_userdata($sdata);
        }
        if ($data['publication_status'] == '0') {
            $sdata = array();
            $sdata['message'] = 'Sub Category Saved But Not Published';
            $this->session->set_userdata($sdata);
        }
        redirect('super_admin/add_sub_category');
    }

    public function manage_sub_category() {
        $data = array();
        /* -------Start Pagination-------------------- */
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'super_admin/manage_sub_category/';

        $config['total_rows'] = $this->db->count_all('tbl_sub_category');
        $config['per_page'] = '3';
        $this->pagination->initialize($config);
        $data['all_sub_category'] = $this->super_admin_model->select_all_sub_category($config['per_page'], $this->uri->segment(3));

        $data['admin_content'] = $this->load->view('admin/manage_sub_category', $data, true);
        $data['title'] = 'Manage Sub Category';
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_sub_category($sub_category_id) {
        $this->super_admin_model->unpublished_sub_category_by_id($sub_category_id);
        redirect('super_admin/manage_sub_category');
    }

    public function published_sub_category($sub_category_id) {
        $this->super_admin_model->published_sub_category_by_id($sub_category_id);
        redirect('super_admin/manage_sub_category');
    }

    public function delete_sub_category($category_id) {
        $this->super_admin_model->delete_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    public function edit_sub_category($sub_category_id) {
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_category();
        $data['sub_category_info'] = $this->super_admin_model->select_sub_category_by_id($sub_category_id);
        $data['title'] = 'Edit category';
        $data['admin_content'] = $this->load->view('admin/edit_sub_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_sub_category($sub_category_id) {
        $this->super_admin_model->update_sub_category_by_id($sub_category_id);
        $sdata=array();
        $sdata['message'] = 'Subcategory '.$sub_category_id.' Update is succesfully done';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_sub_category');
    }


/////////////////////////END SubCategory Management/////////////////////////////   

//Add Product, Save Product and Manage Product Section Begin
    public function add_product() {
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_sub_category'] = $this->super_admin_model->select_all_published_sub_category();
        $data['admin_content'] = $this->load->view('admin/add_product', $data, true);
        $data['title'] = 'Add Product';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_product() {
        $data = array();
        $data['product_name'] = $this->input->post('product_name', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['sub_category_id'] = $this->input->post('sub_category_id', true);
        $data['product_summary'] = $this->input->post('product_summary', true);
        $data['product_description'] = $this->input->post('product_description', true);
        $data['product_availability'] = $this->input->post('product_availability', true);
        $data['product_model'] = $this->input->post('product_model', true);
        $data['product_manufacturer'] = $this->input->post('product_manufacturer', true);
        $data['product_price_in_bdt'] = $this->input->post('product_price_in_bdt', true);
        $data['product_discount_price_in_bdt'] = $this->input->post('product_discount_price_in_bdt', true);
        $data['product_price_in_usd'] = $this->input->post('product_price_in_usd', true);
        $data['product_discount_price_in_usd'] = $this->input->post('product_discount_price_in_usd', true);
        $data['product_price_in_gbp'] = $this->input->post('product_price_in_gbp', true);
        $data['product_discount_price_in_gbp'] = $this->input->post('product_discount_price_in_gbp', true);
        $data['product_price_in_euro'] = $this->input->post('product_price_in_euro', true);
        $data['product_discount_price_in_euro'] = $this->input->post('product_discount_price_in_euro', true);
        $data['product_display_in_homepage'] = $this->input->post('product_display_in_homepage', true);
        $data['product_publication_status'] = $this->input->post('product_publication_status', true);
        
        
        $cnt = 1;
        foreach ($_FILES as $eachFile) {
            if ($eachFile['size'] > 0) {
                $config['upload_path'] = 'images/product_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['max_width'] = '2048';
                $config['max_height'] = '2048';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('product_image_' . $cnt)) {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } else {
                    $fdata = $this->upload->data();
                    $index = 'product_image_' . $cnt;
                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
                }
                
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'images/product_thumbnail/';
                $config['source_image'] = $data[$index];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = '100';
                $config['height'] = '100';
                $this->load->library('image_lib', $config);

                $this->image_lib->resize();

                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                } else {
                    $index2 = 'product_image_thumbnail_' . $cnt;
                    $data[$index2] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                }
                $cnt++;
            }
        }

        $this->super_admin_model->save_product_info($data);
        if ($data['publication_status'] == '1') {
            $sdata = array();
            $sdata['message'] = 'Product Added';
            $this->session->set_userdata($sdata);
        }
        if ($data['publication_status'] == '0') {
            $sdata = array();
            $sdata['message'] = 'product Info Saved But Not Published';
            $this->session->set_userdata($sdata);
        }
        redirect('super_admin/add_product');
    }

    public function manage_product() {
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_published_category();
        $data['all_sub_category'] = $this->super_admin_model->select_all_published_sub_category();
        $data['product_info'] = $this->super_admin_model->select_all_product();
        $data['admin_content'] = $this->load->view('admin/manage_product', $data, true);
        $data['title'] = 'Add Product';
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_book($book_id) {
        $this->super_admin_model->unpublished_book_by_id($book_id);
        redirect('super_admin/manage_book');
    }

    public function published_book($book_id) {
        $this->super_admin_model->published_book_by_id($book_id);
        redirect('super_admin/manage_book');
    }

    public function unfeatured_book($book_id) {
        $this->super_admin_model->unfeatured_book_by_id($book_id);
        redirect('super_admin/manage_book');
    }

    public function featured_book($book_id) {
        $this->super_admin_model->featured_book_by_id($book_id);
        redirect('super_admin/manage_book');
    }

    public function delete_book($book_id) {
        $this->super_admin_model->delete_book_by_id($book_id);
        redirect('super_admin/manage_book');
    }

//Add Product, Save Product and Manage Product Section End
//Edit Book Info section Begin
    public function edit_book_info($book_id) {
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_published_category();    //Get Category Dynamically in Dropdown Box in Add News Page
        $data['book_info'] = $this->super_admin_model->select_book_by_id($book_id);
        $data['admin_content'] = $this->load->view('admin/edit_book_info', $data, true);
        $data['title'] = 'Edit Book Info';
        $this->load->view('admin/admin_master', $data);
    }

    public function update_book_info($book_id) {
        $this->super_admin_model->update_book_by_id($book_id);
        redirect('super_admin/manage_book');
    }

//Edit Product Info Section End
//
//Manage Comment Section Begins

    public function manage_comments() {
        $data = array();
        $data['all_comments'] = $this->super_admin_model->select_all_comments();
        $data['admin_content'] = $this->load->view('admin/manage_comments', $data, true);
        $data['title'] = 'Manage Comments';
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_comments($comments_id) {
        $this->super_admin_model->unpublished_comments_by_id($comments_id);
        redirect('super_admin/manage_comments');
    }

    public function published_comments($comments_id) {
        $this->super_admin_model->published_comments_by_id($comments_id);
        redirect('super_admin/manage_comments');
    }

    public function archived_comments($comments_id) {
        $this->super_admin_model->archived_comments_by_id($comments_id);
        redirect('super_admin/manage_comments');
    }

//Manage Comment Section Ends
//Publisher Section Start

    public function add_publisher() {
        $data = array();
        $data['admin_content'] = $this->load->view('admin/add_publisher', '', true);
        $data['title'] = 'Add Publishers';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_publisher() {
        $this->super_admin_model->save_publisher_info();
        $data = array();
        $data['publication_status'] = $this->input->post('publication_status', true);
        if ($data['publication_status'] == '1') {
            $sdata = array();
            $sdata['message'] = 'Publisher Published';
            $this->session->set_userdata($sdata);
        }
        if ($data['publication_status'] == '0') {
            $sdata = array();
            $sdata['message'] = 'Publisher Info Saved But Not Published';
            $this->session->set_userdata($sdata);
        }
        redirect('super_admin/add_publisher');
    }

    public function manage_publishers() {
        $data = array();
        $data['all_publisher'] = $this->super_admin_model->select_all_publisher();
        $data['admin_content'] = $this->load->view('admin/manage_publishers', $data, true);
        $data['title'] = 'Manage publisher';
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_publisher($publisher_id) {
        $this->super_admin_model->unpublished_publisher_by_id($publisher_id);
        redirect('super_admin/manage_publisher');
    }

    public function published_publisher($publisher_id) {
        $this->super_admin_model->published_publisher_by_id($publisher_id);
        redirect('super_admin/manage_publisher');
    }

    public function delete_publisher($publisher_id) {
        $this->super_admin_model->delete_publisher_by_id($publisher_id);
        redirect('super_admin/manage_publisher');
    }

    public function edit_publisher($publisher_id) {
        $data = array();
        $data['publisher_info'] = $this->super_admin_model->select_publisher_by_id($publisher_id);
        $data['admin_content'] = $this->load->view('admin/edit_publisher', $data, true);
        $data['title'] = 'Edit publisher';
        $this->load->view('admin/admin_master', $data);
    }

    public function update_publisher($publisher_id) {
        $this->super_admin_model->update_publisher_by_id($publisher_id);
        redirect('super_admin/manage_publisher');
    }

//Publisher Section Start
//
//Order Manage Section Start

    public function manage_order() {
        $data = array();
        $data['all_order'] = $this->super_admin_model->select_all_order();
        $data['admin_content'] = $this->load->view('admin/manage_order', $data, true);
        $data['title'] = 'Manage Order';
        $this->load->view('admin/admin_master', $data);
    }

    public function view_invoice($order_id) {
        $data = array();
        $data['order_info'] = $this->super_admin_model->select_order_info_by_id($order_id);
        $customer_id = $data['order_info']->customer_id;
        $shipping_id = $data['order_info']->shipping_id;
        $data['customer_info'] = $this->welcome_model->select_customer_info($customer_id);
        $data['shipping_info'] = $this->checkout_model->select_shipping_info($shipping_id);
        $data['order_detail_info'] = $this->super_admin_model->select_order_detail_by_id($order_id);

        $data['from_address'] = 'shafiul@shafiulalam.com';
        $data['admin_full_name'] = 'Ecommerce Batch13';
        $data['to_address'] = $data['customer_info']->email_address;
        $data['subject'] = 'Ecommerce Batch13 - Order Invoice';
        $this->load->view('admin/invoice', $data);
    }

//Order Manage Section End
//Logout function
    public function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $sdata['message'] = 'You are successfully Logout!';
        $this->session->set_userdata($sdata);
        redirect('administrator');
    }

}

?>