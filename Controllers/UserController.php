<?php 
    namespace Controllers;

    class UserController extends \Apps\Base\Controller{
        private $userModel;
        public function __construct()
        {
            $this->userModel = $this->model('UserModel');
        }

        public function register()
        {
            if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
                $data = array();

                // lấy dự liệu từ form

                // check username
                if (!empty($_POST['username']) || trim($_POST['username']) != null) {
                    if(!$this->userModel->findUserByUsername($_POST['username'])){
                        $data['username'] = $_POST['username'];
                    }else{
                        $data['username_err'] = 'Tên đăng nhập đã tồn tại';
                    }
                    
                } else {
                    $data['username_err'] = 'Mời nhập vào Tên đăng nhập';
                }

                // check password
                if (!empty($_POST['password']) || trim($_POST['password']) != null) {
                    $data['password'] = $_POST['password'];
                } else {
                    $data['password_err'] = 'Mời nhập vào Mật khẩu';
                }

                // check name
                if (!empty($_POST['name']) || trim($_POST['name']) != null) {
                    $data['name'] = $_POST['name'];
                }

                if (empty($data['username_err']) && empty($data['password_err'])) {

                    $data['password'] = md5($data['password']);

                    $time = new \DateTime();
                    $data['date'] = $time->format('Y-m-d H:i:s');

                    if($this->userModel->register($data)){
                        header("Location:" . URLROOT . "?url=User/login");
                    }else{
                        die("Wrong_C");
                    }
                }else{
                    $this->view('User/register', $data);                    
                }
                    // load view


            } else {
                $data =[
                    'username' => '',
                    'password'=> '',
                    'level' => '',
                    'creatdate'=> '',
                    'username_err' => '',
                    'password_err' => '',
                    'level_err' => '',
                    'creatdate_err' => ''
                ];

                // load view

                $this->view('User/register',$data);
            }
            
        }

        public function login()
        {
            if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
                    // check username
                    $data =[];
                if (!empty($_POST['username']) || trim($_POST['username']) != null) {
                    $data['username'] = $_POST['username'];
                } else {
                    $data['username_err'] = 'Mời nhập vào Tên đăng nhập';
                }

                    // check password
                if (!empty($_POST['password']) || trim($_POST['password']) != null) {
                    $data['password'] = $_POST['password'];
                } else {
                    $data['password_err'] = 'Mời nhập vào Mật khẩu';
                }

                if (empty($data['username_err']) && empty($data['password_err'])) {
                    // $this->userModel->login($data);
                    if ($this->userModel->login($data)) {
                        header("Location:" . URLROOT);
                    } else {
                        header("Location:" . URLROOT . "?url=User/login");
                    }
                    
                } else {
                    $this->view('User/login', $data);
                }
            } else {
                $data = [
                    'username' => '',
                    'password' => '',
                    'level' => '',
                    'creatdate' => '',
                    'username_err' => '',
                    'password_err' => '',
                    'level_err' => '',
                    'creatdate_err' => ''
                ];

                    // load view

                $this->view('User/login', $data);
            }

        }
    }
