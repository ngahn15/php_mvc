<?php
    namespace Models;
    // require_once 'Apps/db.php';
    class UserModel
    {
        private $table = 'users';
        private $db;

        public function __construct()
        {
            $this->db = new \Apps\DB();
        }

        public function getUser()
        {
            $sql = "SELECT * FROM $this->table";
            $this->db->query($sql);
            // return ($this->db->resultArray());        
                print_r( $this->db->resultArray());
        }

        public function register($data)
        {
            $sql = "INSERT INTO $this->table(username,password,name,creatdate) values ('$data[username]','$data[password]','$data[name]','$data[date]') ";
            $this->db->query($sql);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function login($data)
        {
            $data['password'] = md5($data['password']);
            $sql = "SELECT * FROM $this->table WHERE username = '$data[username]' AND password = '$data[password]' ";
            // echo $sql;
            $this->db->query($sql);

            if ($this->db->countRow() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function findUserByUsername($username)
        {
            $sql = "SELECT username FROM $this->table WHERE username = '$username'";
            // echo $sql;
            $this->db->query($sql);

            if($this->db->countRow()> 0){
                return true;
            }else{
                return false;
            }            
        }
    }
