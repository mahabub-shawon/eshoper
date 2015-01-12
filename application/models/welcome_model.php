<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome_model
 *
 * @author SHAWON
 */
class Welcome_model extends CI_Model {
    //put your code here
    
    public function save_image($data){
        $this->db->insert('tbl_images', $data);
    }
    
    
    public function select_all_slider_product(){
        $sql = "SELECT * FROM tbl_slider_product as sp, tbl_product as p WHERE sp.product_id = p.product_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }   

    public function select_product_categories(){
        $sql = "SELECT * FROM tbl_sub_category as sc, tbl_category as c WHERE sc.category_id = c.category_id ORDER BY c.category_name";
        $query_result = $this->db->query($sql);
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
    
    public function select_all_published_sub_category_by_category_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_sub_category');
        $this->db->where('sub_category_status', '1');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_published_tab_product_by_category_id($category_id) {
        $sql = "SELECT * FROM tbl_product as p, tbl_category as c WHERE p.category_id = c.category_id ORDER BY p.product_name LIMIT 4";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function select_all_featured_product(){
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_feature_status', '1');   
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    
}

?>
