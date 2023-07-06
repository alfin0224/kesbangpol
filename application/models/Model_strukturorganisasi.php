<?php
    class Model_strukturorganisasi extends CI_Model{
        function __construct() {
            parent::__construct();
        }

        function get($table){
            return $this->db->get($table);
        }

        function get_where($table, $where){
            return $this->db->get_where($table, $where);   
        }

        public function get_duatable($select, $table1, $table2, $join, $where, $order)
        {
            $this->db->select($select);
            $this->db->from($table1);
            $this->db->join($table2, $join);
            $this->db->where($where);
            $this->db->order_by($order, "asc");
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