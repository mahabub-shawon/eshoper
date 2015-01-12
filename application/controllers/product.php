<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author SHAWON
 */
class Product extends CI_Controller {

    //put your code here

    public function product_detail($product_id) {
        $data = array();
        $data['title'] = 'Home | E-Shopper';
        $data['header'] = '1';
        $data['slider'] = NULL;
        $data['category_product_view'] = NULL;
        $data['sidebar'] = '1';
        $data['recommand'] = '1';
        $data['cart_view'] = NULL;
        $data['footer'] = '1';

//       start category and brands 
        $data['category'] = $this->welcome_model->select_all_published_category();
        foreach ($data['category'] as $v_category) {
            $data['sub_category'][$v_category->category_id] = $this->welcome_model->select_all_published_sub_category_by_category_id($v_category->category_id);
        }
        $data['sidebar'] = $this->load->view('sidebar', $data, TRUE);
//       end category and brands         

        $data['product_info'] = $this->product_model->select_product_by_id($product_id);

        $hit_count = $data['product_info']->product_hit + 1;
        $this->product_model->update_product_hit_count($hit_count, $product_id);
        $data['product_info'] = $this->product_model->select_product_by_id($product_id);
        $data['product_detail'] = $this->load->view('product_details', $data, TRUE);
        $data['featured'] = '';
        $data['tab_product'] = '';

        $this->load->view('master', $data);
    }

    public function category_product($category_id) {
        $data = array();
        $data['title'] = 'Home | E-Shopper';
        $data['header'] = '1';
        $data['slider'] = NULL;
        $data['sidebar'] = '1';
        $data['recommand'] = '1';
        $data['footer'] = '1';
        $data['product_detail'] = '';
        $data['cart_view'] = NULL;
        $data['featured'] = '';
        $data['tab_product'] = '';

//       start category and brands 
        $data['category'] = $this->welcome_model->select_all_published_category();
        foreach ($data['category'] as $v_category) {
            $data['sub_category'][$v_category->category_id] = $this->welcome_model->select_all_published_sub_category_by_category_id($v_category->category_id);
        }
        $data['sidebar'] = $this->load->view('sidebar', $data, TRUE);
//       end category and brands         

        $data['category_product'] = $this->product_model->select_all_product_by_category_id($category_id);
        $data['category_product_view'] = $this->load->view('category_product', $data, TRUE);

        $this->load->view('master', $data);
    }

    public function sub_category_product($sub_category_id) {
        $data = array();
        $data['title'] = 'Home | E-Shopper';
        $data['header'] = '1';
        $data['slider'] = NULL;
        $data['sidebar'] = '1';
        $data['recommand'] = '1';
        $data['footer'] = '1';
        $data['product_detail'] = '';
        $data['cart_view'] = NULL;
        $data['featured'] = '';
        $data['tab_product'] = '';

//       start category and brands 
        $data['category'] = $this->welcome_model->select_all_published_category();
        foreach ($data['category'] as $v_category) {
            $data['sub_category'][$v_category->category_id] = $this->welcome_model->select_all_published_sub_category_by_category_id($v_category->category_id);
        }
        $data['sidebar'] = $this->load->view('sidebar', $data, TRUE);
//       end category and brands         

        $data['category_product'] = $this->product_model->select_all_product_by_sub_category_id($sub_category_id);
        $data['category_product_view'] = $this->load->view('category_product', $data, TRUE);

        $this->load->view('master', $data);
    }

}

?>
