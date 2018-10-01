<?php 
    require_once 'vendor/autoload.php';
    require_once 'Apps/config.php';

    // require_once "Controllers/PostController.php";

    
    // if(isset($_GET['action'])){
    //     $action = $_GET['action'];
    // }else{
    //     $action = 'list';
    // }

    // $post_c = new Controllers\PostController();

    // if($action == 'list'){
    //     $post_c->getPost();
    // }else if($action == 'add'){
    //     $post_c->addPost();
    // }

    $router = new Apps\Router();
    // print_r($router);
    



?>