<?php

class Dpmptsp_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function select($table, $order){
        $this->db->order_by($order,'desc');
        return $this->db->get($table);
    }
    
    function select_limit($t, $o, $l){
        $sl = $this->db->query("SELECT * FROM $t WHERE $o = (SELECT $o FROM $t ORDER BY $o desc) LIMIT = '".$l."'");
        return $sl;
    }
    
    function get_last_id($ta){
        $b = $this->db->query("SELECT MAX(id) as id_akhir FROM $ta");
        return $b;
    }
    
    function select_where($tablename, $field, $s){
        $a = $this->db->query("SELECT*FROM $tablename WHERE $field = '".$s."'");
        return $a;
    }
    
    function select_where_order($tablename, $field, $s, $order){
        $this->db->where($field, $s);
        $this->db->order_by($order,'asc');
        return $this->db->get($tablename);
    }
    
    function update($tablename, $field, $id, $data){
        $this->db->where($field, $id);
        $this->db->update($tablename, $data); 
    }
    
    function select_like($tablename, $field, $s){
        $a = $this->db->query("SELECT*FROM $tablename WHERE $field LIKE '%".$s."%'");
        return $a;
    }
    
    function sum_skm(){
        $r = $this->db->query("SELECT SUM(pertanyaan_1) as sq1, SUM(pertanyaan_2) as sq2, SUM(pertanyaan_3) as sq3, SUM(pertanyaan_4) as sq4, SUM(pertanyaan_5) as sq5,
                 SUM(pertanyaan_6) as sq6, SUM(pertanyaan_7) as sq7, SUM(pertanyaan_8) as sq8, SUM(pertanyaan_9) as sq9 FROM t_skm");
        return $r;
    }
    
    function add($tablename, $data){
        $this->db->insert($tablename, $data);
    }
    
    function update_user($tablename, $id, $data){
        $this->db->where('id', $id);
        $this->db->update($tablename, $data); 
    }
    
    function delete($table, $id){
        $this->db->where('id', $id);
        $this->db->delete($table);
    }
    
    function login($u, $p){
        $q = $this->db->query("select * from t_users WHERE username= ".$this->db->escape($u)." and pass = ".$this->db->escape($p)." and status=1");
        return $q;
    }
}