<?php 
    namespace Controllers;

    class PostController extends \Apps\Base\Controller{

        private $postModel;
        public function __construct()
        {
            $this->postModel = $this->model("PostModel");
            // print_r($this->postModel->getPost());
        }

        public function index()
        {
            // print_r($this->postModel->getPost());

            $data = $this->postModel->getPost();
            $this->view('Post/index',$data);
        }

        public function about()
        {
            $this->view('Post/about');
        }

        public function add($id)
        {
            echo "<br>" . $id;
        }

        // public function getPost()
        // {
        //     // $post_M = new \Models\PostModel();
        //     $post_M = $this->model("PostModel");
        //     $data = $post_M->getPost();
        //     if($data){
        //         // require_once 'Views/PostView.php';
        //         // $post_V = new \Views\PostView();
        //         $post_V = $this->view("PostView",$data);

        //         // $post_V->showAllPost($data);
        //     }
        // }

    }


?>