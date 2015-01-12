<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {

        $data = array();
        $data['title'] = 'Home | E-Shopper';
        $data['header'] = '1';
        $data['slider'] = NULL;
        $data['sidebar'] = '1';
        $data['category_product_view'] = NULL;
        $data['product_detail'] = NULL;
        $data['cart_view'] = NULL;
        $data['footer'] = '1';

        $data['slider_product'] = $this->welcome_model->select_all_slider_product();
        $data['slider'] = $this->load->view('slider', $data, TRUE);

//       start category and brands 
        $data['category'] = $this->welcome_model->select_all_published_category();
        foreach ($data['category'] as $v_category) {
            $data['sub_category'][$v_category->category_id] = $this->welcome_model->select_all_published_sub_category_by_category_id($v_category->category_id);
            
        }
        
        
        
        $data['sidebar'] = $this->load->view('sidebar', $data, TRUE);
//       end category and brands         

        $data['featured_product'] = $this->welcome_model->select_all_featured_product();
        $data['featured'] = $this->load->view('featured_product', $data, TRUE);

        foreach ($data['category'] as $v_category) {
            $data['tab_product'][$v_category->category_id] = $this->welcome_model->select_all_published_tab_product_by_category_id($v_category->category_id);
        }
        $data['tab_product'] = $this->load->view('tab_product', $data, TRUE);

        $data['maincontent'] = $this->load->view('home_content', $data, TRUE);

        $this->load->view('master', $data);
    }

    public function login() {
        $data = array();
        $data = array();
        $data['title'] = 'Home | E-Shopper';
        $data['header'] = '1';
        $data['slider'] = NULL;
        $data['sidebar'] = NULL;
        $data['category_product_view'] = NULL;
        $data['product_detail'] = NULL;
        $data['cart_view'] = NULL;
        $data['featured'] = NULL;
        $data['tab_product'] = NULL;
        $data['footer'] = '1';
        $data['title'] = 'Login';

        $data['category'] = $this->welcome_model->select_all_published_category();
        foreach ($data['category'] as $v_category) {
            $data['sub_category'][$v_category->category_id] = $this->welcome_model->select_all_published_sub_category_by_category_id($v_category->category_id);
        }
        $data['all_category'] = $this->welcome_model->select_all_published_category();
        $data['maincontent'] = $this->load->view('account', '', true);
        $this->load->view('master', $data);
    }

    public function signup() {
        $data = array();
        $data = array();
        $data['title'] = 'Home | E-Shopper';
        $data['header'] = '1';
        $data['slider'] = NULL;
        $data['sidebar'] = NULL;
        $data['category_product_view'] = NULL;
        $data['product_detail'] = NULL;
        $data['cart_view'] = NULL;
        $data['featured'] = NULL;
        $data['tab_product'] = NULL;
        $data['footer'] = '1';
        $data['title'] = 'Login';

        $data['category'] = $this->welcome_model->select_all_published_category();
        foreach ($data['category'] as $v_category) {
            $data['sub_category'][$v_category->category_id] = $this->welcome_model->select_all_published_sub_category_by_category_id($v_category->category_id);
        }
        $data['all_category'] = $this->welcome_model->select_all_published_category();
        $data['maincontent'] = $this->load->view('signup', '', true);
        $this->load->view('master', $data);
    }

}

