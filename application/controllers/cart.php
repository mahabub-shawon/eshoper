<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart
 *
 * @author saidu_000
 */
class Cart extends CI_Controller {

    public function add_to_cart($product_id) {
//        $product_id = $this->input->post('product_id', true);
        $product_quentity = 1; //$this->input->post('product_quentity', true);
        $product_info = $this->product_model->select_product_by_id($product_id);

        $data = array(
            'id' => $product_info->product_id,
            'qty' => $product_quentity,
            'price' => $product_info->product_price_in_bdt,
            'name' => $product_info->product_name,
            'image' => $product_info->product_image_thumbnail_1,
        );

        $this->cart->insert($data);
        redirect('cart/show_cart');
    }

    public function show_cart() {
        $total_item = $this->cart->total_items();
        if ($total_item) {
            $sdata = array();
            $data['incart'] = '1';
            $this->session->set_userdata($data);
        }else{
            $this->session->unset_userdata('incart');
        }

        $data = array();
        $data['title'] = 'Home | E-Shopper';
        $data['header'] = '1';
        $data['slider'] = NULL;
        $data['sidebar'] = NULL;
        $data['recommand'] = NULL;
        $data['category_product_view'] = NULL;
        $data['product_detail'] = NULL;
        $data['featured'] = NULL;
        $data['tab_product'] = NULL;
        $data['footer'] = '1';

//       start category and brands 
        $data['category'] = $this->welcome_model->select_all_published_category();
        foreach ($data['category'] as $v_category) {
            $data['sub_category'][$v_category->category_id] = $this->welcome_model->select_all_published_sub_category_by_category_id($v_category->category_id);
        }
//        $data['sidebar'] = $this->load->view('sidebar', $data, TRUE);
        $data['all_category'] = $this->welcome_model->select_all_published_category();

        $data['maincontent'] = $this->load->view('cart_view', $data, true);
        $data['title'] = 'Cart';
//echo '<pre>';
//        print_r($data['cart_view']);
//        exit();
        $this->load->view('master', $data);
    }

    public function update_cart() {
        $qty = $this->input->post('qty', true);
        $rowid = $this->input->post('rowid', true);
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );
        $this->cart->update($data);
        redirect('cart/show_cart');
    }

    public function remove($rowid) {

        $data = array(
            'rowid' => $rowid,
            'qty' => '0'
        );
        $this->cart->update($data);
        redirect('cart/show_cart');
    }

}

?>