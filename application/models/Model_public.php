<?php
    class Model_public extends CI_Model{
        function __construct() {
            parent::__construct();
        }

        function get($table){
            return $this->db->get($table);
        }

        function get_where($table, $where){
            return $this->db->get_where($table, $where);   
        }

        function get_like($table, $column, $column2, $like, $where, $colorder, $order){
            $this->db->like($column, $like);
            $this->db->or_like($column2, $like);
            $this->db->where($where);
            $this->db->order_by($colorder, $order);
            return $this->db->get($table);
        }

        function get_limit($table, $limit, $start){
            return $this->db->get($table, $limit, $start);
        }

        function get_limit_where($halaman, $where, $limit, $start, $column, $order)
        {
            $this->db->limit($limit, $start);
            $this->db->order_by($column, $order);
            return $this->db->get_where($halaman, $where);
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

        function get_duatable($select, $table1, $table2, $join, $where, $colorder, $order)
        {
            $this->db->select($select);
            $this->db->from($table1);
            $this->db->join($table2, $join);
            $this->db->where($where);
            $this->db->order_by($colorder, $order);
            $query = $this->db->get();
            return $query->result();
        }

        function insert($table, $object){
            $this->db->insert($table, $object);
        }
    }