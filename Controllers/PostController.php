<?php 
    namespace Controllers;

    class PostController extends \Apps\Base\Controller{

        private $postModel;
        public function __construct()
        {
            $this->postModel = $this->model("PostModel");
        }

        public function index()
        {
            $data = $this->postModel->getPost();
            $this->view('Post/index',$data);
        }

        public function show($id)
        {
            $data = $this->postModel->getPostByID($id);
            $this->view('Post/show',$data);
        }

        public function add()
        {
            $data = [];
            if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
                // check Title
                if (!empty($_POST['title']) || trim($_POST['title']) != null) {
                    $data['title'] = $_POST['title'];
                } else {
                    $data['title_err'] = 'Input Title';
                }

                // check Content
                if (!empty($_POST['content']) || trim($_POST['content']) != null) {
                    $data['content'] = $_POST['content'];
                } else {
                    $data['content_err'] = 'Input content';
                }

                if (empty($data['title_err']) && empty($data['content_err'])) {
                    $time = new \DateTime();
                    $data['time'] = $time->format('Y-m-d H:i:s');
                    $data['id'] = $this->postModel->addPost($data);
                    if($data['id']){
                        header("Location:" . URLROOT . "?url=post/show/" . $data['id']);
                    }else{
                        $this->view("Post/add", $data);
                    }
                } else {
                    $this->view("Post/add", $data);
                }
                
                
            } else {
                $this->view("Post/add",$data);
            }
        }

        public function edit($id)
        {
            $data = $this->postModel->getPostByID($id);
            if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
                    // check Title
                if (!empty($_POST['title']) || trim($_POST['title']) != null) {
                    $data['title'] = $_POST['title'];
                } else {
                    $data['title_err'] = 'Input Title';
                }

                    // check Content
                if (!empty($_POST['content']) || trim($_POST['content']) != null) {
                    $data['content'] = $_POST['content'];
                } else {
                    $data['content_err'] = 'Input content';
                }

                if (empty($data['title_err']) && empty($data['content_err'])) {
                    $time = new \DateTime();
                    $data['time'] = $time->format('Y-m-d H:i:s');
                    if ($this->postModel->editPost($data)) {
                        header("Location:" . URLROOT . "?url=post/show/" . $data['id']);
                    } else {
                        $this->view("Post/edit", $data);
                    }
                } else {
                    $this->view("Post/edit", $data);
                }
            } else {
                $this->view("Post/edit", $data);
            }
        }

        public function delete($id)
        {
            if($this->postModel->deletePost($id)){
                header("Location:" . URLROOT);
            }
        }
    }


?>