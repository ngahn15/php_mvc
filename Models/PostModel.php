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
            $sql = "SELECT * FROM $this->table ORDER BY time DESC";
            $this->db->query($sql);
            return ($this->db->resultArray());        
        }

        public function getPostByID($id)
        {
            $sql = "SELECT * FROM $this->table WHERE id = $id";
            $this->db->query($sql);
            $post =  ($this->db->resultSingle());
            return $post;
        }

        public function addPost($data)
        {
            $sql = "INSERT INTO $this->table(title,content,time) values('$data[title]','$data[content]','$data[time]')";

            $this->db->query($sql);
            if ($this->db->execute()) {
                return $last_id = $this->db->lastInsertId();
            } else {
                return false;
            }
        }

        public function editPost($data)
        {
            $sql = "UPDATE $this->table 
                    SET title = '$data[title]', content = '$data[content]',time = '$data[time]'
                    WHERE id = '$data[id]'";
            $this->db->query($sql);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function deletePost($id)
        {
            $sql = "DELETE FROM $this->table WHERE id = '$id'";
            // die($sql);
            $this->db->query($sql);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>