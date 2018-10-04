<?php
    namespace Models;
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
            return ($this->db->resultArray());        
        }

        public function register($data)
        {
            $sql = "INSERT INTO $this->table(username,password,name,level,creatdate) values ('$data[username]','$data[password]','$data[name]','$data[level]','$data[date]') ";
            $this->db->query($sql);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function login($username,$password)
        {
            $sql = "SELECT * FROM $this->table WHERE username = '$username'";
            
            $this->db->query($sql);
            $user = $this->db->resultSingle();
            $password = md5($password);
            if (strcmp($password,$user['password']) == 0) {
                return $user;
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
