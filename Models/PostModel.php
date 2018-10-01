<?php
    namespace Models;
    // require_once 'Apps/db.php';
    class PostModel {
        private $table = 'post';
        private $db;

        public function __construct()
        {
            $this->db = new \Apps\DB();
        }

        public function getPost()
        {
            $sql = "SELECT * FROM $this->table";
            $this->db->query($sql);
            return ($this->db->resultArray());        
            // print_r( $this->db->resultArray());
        }
    }
// $m = new PostModel();
// print_r($m->getPost());