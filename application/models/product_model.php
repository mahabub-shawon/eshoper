<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product_model
 *
 * @author SHAWON
 */
class product_model extends CI_Model {

    //put your code here

    public function select_product_by_id($product_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id);
        $result = $this->db->get()->row();
        
        return $result;
    }

    public function select_all_product_by_category_id($category_id) {
        $sql = "SELECT * FROM tbl_product as p ,tbl_category as c WHERE p.category_id = c.category_id AND c.category_id = $category_id";
        $result = $this->db->query($sql)->result();
        return $result;
    }
    public function select_all_product_by_sub_category_id($sub_category_id) {
        $sql = "SELECT * FROM tbl_product as p ,tbl_sub_category as sc WHERE p.sub_category_id = sc.sub_category_id AND sc.sub_category_id = $sub_category_id";
        $result = $this->db->query($sql)->result();
        return $result;
    }
    
    public function update_product_hit_count($hit_count, $product_id){
        $data['product_hit'] = $hit_count;
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product', $data);
    }

}

?>
