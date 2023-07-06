<?php
    class Model_pesanmasuk extends CI_Model{
        function __construct() {
            parent::__construct();
        }

        function get($table){
            return $this->db->get($table);
        }

        function insert($table, $object){
            $this->db->insert($table, $object);
        }

        function delete($table, $where){
            $this->db->where($where);
            $this->db->delete($table);
        }
    }