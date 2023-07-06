<?php 
    class Model_berita extends CI_Model{	

        function __construct() {
            parent::__construct();
        }

        function get($table){
            return $this->db->get($table);
        }


        function get_where($table, $where)
        {
            return $this->db->get_where($table, $where);
             
        }

        public function get_duatable($select, $table1, $table2, $join, $where, $column, $order)
        {
            $this->db->select($select);
            $this->db->from($table1);
            $this->db->join($table2, $join);
            $this->db->where($where);
            $this->db->order_by($column, $order);
            $query = $this->db->get();
            return $query->result();
        }

        function get_tigatable($select, $table1, $table2, $table3, $join1, $join2, $where, $order){
            $this->db->select($select);    
            $this->db->from($table1);
            $this->db->join($table2, $join1);
            $this->db->join($table3, $join2);
            $this->db->where($where);
            $this->db->order_by($order, "asc");
            $query = $this->db->get();
            return $query->result();
        }
    
        function get_empattable($select, $table1, $table2, $table3, $table4, $join1, $join2, $join3, $where, $order){
            $this->db->select($select);    
            $this->db->from($table1);
            $this->db->join($table2, $join1);
            $this->db->join($table3, $join2);
            $this->db->join($table4, $join3);
            $this->db->where($where);
            $this->db->order_by($order, "asc");
            $query = $this->db->get();
            return $query->result();
        }

        function get_order_by($select, $table, $where, $kolom, $orderby, $nilai)
        {
            $this->db->select($select);
            $this->db->from($table);
            $this->db->where($where);
            $this->db->order_by($kolom, $orderby);
            $this->db->limit($nilai);
            $query = $this->db->get();
            return $query->result();
        }

        function insert($table, $object){
            $this->db->insert($table, $object);
        }

        function update($table, $where, $object){
            $this->db->where($where);
            $this->db->update($table, $object);
        }

        function delete($table, $where){
            $this->db->where($where);
            $this->db->delete($table);
        }
        
    }
