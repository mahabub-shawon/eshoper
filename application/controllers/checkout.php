<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of checkout
 *
 * @author saidu_000
 */
class Checkout extends CI_Controller {

    public function index() {
        
        $customer_id = $this->session->userdata('customer_id');
        $shipping_id = $this->session->userdata('shipping_id');
        $data = array();
        if ($customer_id == NULL && $shipping_id == NULL) {
            redirect('welcome/login');
        } else if ($customer_id != NULL && $shipping_id == NULL) {
            redirect('checkout/show_shipping_form');
        } else if ($customer_id != NULL && $shipping_id != NULL) {
            redirect('checkout/show_payment_form');
        }
    }

    public function signup() {
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

        $data['cart_view'] = NULL;

        $data['category'] = $this->welcome_model->select_all_published_category();
        foreach ($data['category'] as $v_category) {
            $data['sub_category'][$v_category->category_id] = $this->welcome_model->select_all_published_sub_category_by_category_id($v_category->category_id);
        }
        $data['all_category'] = $this->welcome_model->select_all_published_category();
        $data['maincontent'] = $this->load->view('quick_signup', $data, true);
        $data['title'] = 'Cart';
        $this->load->view('master', $data);
    }

    public function check_out_view() {
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

        $data['cart_view'] = NULL;

        $data['category'] = $this->welcome_model->select_all_published_category();
        foreach ($data['category'] as $v_category) {
            $data['sub_category'][$v_category->category_id] = $this->welcome_model->select_all_published_sub_category_by_category_id($v_category->category_id);
        }
        $data['all_category'] = $this->welcome_model->select_all_published_category();

        $data['maincontent'] = $this->load->view('account', $data, true);
        $data['title'] = 'Cart';
        $this->load->view('master', $data);
    }

    public function register_account() {
        $data = array();
        $data['all_category'] = $this->welcome_model->select_all_published_category();
        $data['title'] = 'Register Account';
        $data['breadcrumb'] = '1';
        $data['maincontent'] = $this->load->view('checkout', $data, true);
        $this->load->view('master', $data);
    }

    public function save_customer() {
        $data = array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['password'] = md5($this->input->post('password', true));
        $data['mobile_number'] = $this->input->post('mobile_number', true);
        $data['company_name'] = $this->input->post('company_name', true);
        $data['address01'] = $this->input->post('address01', true);
        $data['address02'] = $this->input->post('address02', true);
        $data['city'] = $this->input->post('city', true);
        $data['country'] = $this->input->post('country', true);
        $data['zip_code'] = $this->input->post('zip_code', true);

        $customer_id = $this->checkout_model->save_customer_info($data);

        $sdata = array();
        $sdata['customer_id'] = $customer_id;
        $sdata['customer_name'] = $data['first_name'] . ' ' . $data['last_name'];
        $this->session->set_userdata($sdata);

        /* --------------Start Send Account Creation Email------------ */
        $mdata = array();
        $mdata['from_address'] = 'shafiul@shafiulalam.com';
        $mdata['admin_full_name'] = 'Ecommerce Batch13';
        $mdata['to_address'] = $data['email_address'];
        $mdata['subject'] = 'Ecommerce Batch13 - Account Created Successfully';
        $mdata['password'] = $this->input->post('password', true);
        $mdata['customer_id'] = $customer_id;
        $mdata['last_name'] = $this->input->post('last_name', true);
        $this->mailer_model->sendEmail($mdata, 'activation_email');

        /* --------------End Send Account Creation Email------------ */
        redirect('checkout/show_shipping_form');
    }

    public function show_shipping_form() {
        $data['all_category'] = $this->welcome_model->select_all_published_category();
        $data['title'] = 'Register Account';
        $data['breadcrumb'] = '1';
        $data['maincontent'] = $this->load->view('shipping_form', $data, true);
        $this->load->view('master', $data);
    }

    public function shipping_same_as_billing($customer_id) {
        $customer_info = $this->welcome_model->select_customer_info($customer_id);
        $data = array();
        $data['customer_id'] = $customer_id;
        $data['shipping_name'] = $customer_info->first_name . ' ' . $customer_info->last_name;
        $data['shipping_email_address'] = $customer_info->email_address;
        $data['company_name'] = $customer_info->company_name;
        $data['mobile_no'] = $customer_info->mobile_number;
        $data['address'] = $customer_info->address01;
        $data['city'] = $customer_info->city;
        $data['country'] = $customer_info->country;
        $data['zip_code'] = $customer_info->zip_code;
        $shipping_id = $this->checkout_model->save_shipping_info($data);
        $sdata = array();
        $sdata['shipping_id'] = $shipping_id;
        $this->session->set_userdata($sdata);
        redirect('checkout/show_payment_form');
    }

    public function show_payment_form() {

        $data['all_category'] = $this->welcome_model->select_all_published_category();
        $data['title'] = 'Register Account';
        $data['breadcrumb'] = '1';
        $data['maincontent'] = $this->load->view('payment_method', $data, true);
        $this->load->view('master', $data);
    }

    public function confirm_order() {
        //$data=array();
        $payment_method = $this->input->post('payment_method', true);
        if ($payment_method == 'cash_on_delivery') {
            $this->checkout_model->save_payment_info();
            $this->checkout_model->save_order_info();
            /* ---------Start Send Customer Invoice------------- */
            $mdata = array();
            $customer_id = $this->session->userdata('customer_id');
            $shipping_id = $this->session->userdata('shipping_id');
            $mdata['customer_info'] = $this->welcome_model->select_customer_info($customer_id);
            $mdata['shipping_info'] = $this->checkout_model->select_shipping_info($shipping_id);


            $mdata['from_address'] = 'shafiul@shafiulalam.com';
            $mdata['admin_full_name'] = 'Ecommerce Batch13';
            $mdata['to_address'] = $mdata['customer_info']->email_address;
            $mdata['subject'] = 'Ecommerce Batch13 - Order Invoice';
            $this->mailer_model->sendEmail($mdata, 'invoice');
            $mobile_no = '88' . $mdata['customer_info']->mobile_number;
            $this->load->model('sms_api_model');
            $customer_name = $mdata['customer_info']->first_name . ' ' . $mdata['customer_info']->last_name;
            $message = "Dear $customer_name, <br/> Your order Successfully Placed.Please check your email for details. your order total BDT :" . $this->cart->total();
            $this->sms_api_model->Sender("121.241.242.114", "8080", "talh-demo", "demo12", "Ecommerce13", "$message", "$mobile_no", "2", "1");
            $this->sms_api_model->Submit();

            redirect('checkout/order_complete');

            /* ---------End Send Customer Invoice------------- */
        } else if ($payment_method == 'paypal') {
            $this->checkout_model->save_payment_info();
            $this->checkout_model->save_order_info();
            /* ---------Start Send Customer Invoice------------- */
            $mdata = array();
            $customer_id = $this->session->userdata('customer_id');
            $shipping_id = $this->session->userdata('shipping_id');
            $mdata['customer_info'] = $this->welcome_model->select_customer_info($customer_id);
            $mdata['shipping_info'] = $this->checkout_model->select_shipping_info($shipping_id);


            $mdata['from_address'] = 'shafiul@shafiulalam.com';
            $mdata['admin_full_name'] = 'Ecommerce Batch13';
            $mdata['to_address'] = $mdata['customer_info']->email_address;
            $mdata['subject'] = 'Ecommerce Batch13 - Order Invoice';
            $this->mailer_model->sendEmail($mdata, 'invoice');

            /* ---------End Send Customer Invoice------------- */
            redirect('checkout/paypal_payment');
        }
    }

    public function paypal_payment() {
        $this->load->view('htmlWebsiteStandardPayment');
    }

    public function order_complete() {
        $data['all_category'] = $this->welcome_model->select_all_published_category();
        $data['title'] = 'Register Account';
        $data['breadcrumb'] = '1';
        $data['maincontent'] = $this->load->view('order_complete', $data, true);
        $this->load->view('master', $data);
    }

}
