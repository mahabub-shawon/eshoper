<?php

class Super_Admin_Model extends CI_Model {

//////////////////////Start Catgegory Model/////////////////////////////
    public function save_category_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_short_description'] = $this->input->post('category_short_description', true);
        $data['category_full_description'] = $this->input->post('category_full_description', true);
        $data['category_status'] = $this->input->post('category_status', true);
        $this->db->insert('tbl_category', $data);
    }

    public function select_all_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_status', '1');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_category_by_id($category_id) {
        $this->db->set('category_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function published_category_by_id($category_id) {
        $this->db->set('category_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function select_category_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_by_id($category_id) {
        $data = array();
        $data['category_id'] = $this->input->post('category_id', true);
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_short_description'] = $this->input->post('category_short_description', true);
        $data['category_full_description'] = $this->input->post('category_full_description', true);
        $data['category_status'] = $this->input->post('category_status', true);
        $category_id = $this->input->post('category_id', true);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }

    public function delete_category_by_id($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');
    }

/////////////////////// End Category Model//////////////////////////////////
//
//
/////////////////////// Start SubCategory Model//////////////////////////////

    public function save_sub_category_info() {
        $data = array();
        $data['sub_category_name'] = $this->input->post('sub_category_name', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['sub_category_short_description'] = $this->input->post('sub_category_short_description', true);
        $data['sub_category_full_description'] = $this->input->post('sub_category_full_description', true);
        $data['sub_category_status'] = $this->input->post('sub_category_status', true);

        $this->db->insert('tbl_sub_category', $data);
    }

    public function select_all_sub_category($per_page, $offset) {
        if ($offset == NULL) {
            $offset = 0;
        }

        $sql = "SELECT * FROM tbl_sub_category as sc, tbl_category as c WHERE sc.category_id = c.category_id LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_sub_category() {
        $this->db->select('*');
        $this->db->from('tbl_sub_category');
        $this->db->where('sub_category_status', '1');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_sub_category_by_id($sub_category_id) {
        $this->db->set('sub_category_status', 0);
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->update('tbl_sub_category');
    }

    public function published_sub_category_by_id($sub_category_id) {
        $this->db->set('sub_category_status', 1);
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->update('tbl_sub_category');
    }

    public function select_sub_category_by_id($sub_category_id) {
        $this->db->select('*');
        $this->db->from('tbl_sub_category');
        $this->db->where('sub_category_id', $sub_category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_sub_category_by_id($sub_category_id) {
        $data = array();
        $data['category_id'] = $this->input->post('category_id', true);
        $data['sub_category_name'] = $this->input->post('sub_category_name', true);
        $data['sub_category_short_description'] = $this->input->post('sub_category_short_description', true);
        $data['sub_category_full_description'] = $this->input->post('sub_category_full_description', true);
        $data['sub_category_status'] = $this->input->post('sub_category_status', true);
        $sub_category_id = $this->input->post('sub_category_id', true);
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->update('tbl_sub_category', $data);
    }

    public function delete_subcategory_by_id($sub_category_id) {
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->delete('tbl_sub_category');
    }

    public function select_all_customer() {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_customer_by_id($customer_id) {
        $this->db->set('customer_activation_status', 0);
        $this->db->where('customer_id', $customer_id);
        $this->db->update('tbl_customer');
    }

    public function published_customer_by_id($customer_id) {
        $this->db->set('customer_activation_status', 1);
        $this->db->where('customer_id', $customer_id);
        $this->db->update('tbl_customer');
    }

    public function delete_customer_by_id($customer_id) {
        $this->db->where('customer_id', $customer_id);
        $this->db->delete('tbl_customer');
    }

    public function select_customer_by_id($customer_id) {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_id', $customer_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function save_product_info($data) {
        $this->db->insert('tbl_product', $data);
    }

    public function select_all_product() {
        $sql = "SELECT * FROM tbl_category AS c, tbl_sub_category AS s, tbl_product AS p WHERE c.category_id = s.category_id AND s.sub_category_id = p.sub_category_id";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    public function select_product_by_id($product_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function not_availabe_product_by_id($product_id) {
        $this->db->set('product_availability', 0);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function availabe_product_by_id($product_id) {
        $this->db->set('product_availability', 1);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function not_special_product_by_id($product_id) {
        $this->db->set('product_display_in_homepage', 0);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function special_product_by_id($product_id) {
        $this->db->set('product_display_in_homepage', 1);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function unpublished_product_by_id($product_id) {
        $this->db->set('product_publication_status', 0);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function published_product_by_id($product_id) {
        $this->db->set('product_publication_status', 1);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function update_product_info() {
        $data = array();
        $data['product_name'] = $this->input->post('product_name', true);
        $data['product_summary'] = $this->input->post('product_summary', true);
        $data['product_description'] = $this->input->post('product_description', true);
        $data['product_photo'] = $this->input->post('product_photo', true);
        $data['product_photo_1'] = $this->input->post('product_photo_1', true);
        $data['product_photo_2'] = $this->input->post('product_photo_2', true);
        $data['product_photo_3'] = $this->input->post('product_photo_3', true);
        $data['product_photo_4'] = $this->input->post('product_photo_4', true);
        $data['product_availability'] = $this->input->post('product_availability', true);
        $data['product_model'] = $this->input->post('product_model', true);
        $data['product_manufacturer'] = $this->input->post('product_manufacturer', true);
        $data['product_quantity'] = $this->input->post('product_quantity', true);
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
        $product_id = $this->input->post('product_id', true);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product', $data);
    }

    public function delete_product_by_id($product_id) {
        $this->db->where('product_id', $product_id);
        $this->db->delete('tbl_product');
    }

}