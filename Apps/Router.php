<?php
namespace Apps;
    class Router
    {
        protected $currentController = 'PostController';
        protected $currentMethod = 'index';
        protected $params = [];

        function __construct()
        {
            $url = $this->getUrl();

            if(file_exists("Controllers/" . ucwords($url[0]) . "Controller.php")){
                $this->currentController = ucwords($url[0]). "Controller";
                unset($url[0]);
            }
            
            $link_C = "\\" . "Controllers\\" . $this->currentController ;
            $this->currentController = new $link_C();

            if(isset($url[1])){
                if(method_exists($this->currentController,$url[1])){
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

            if($url){
                $this->params = array_values($url);
            }else{
                $this->params = [];
            }

            call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
        }


        public function getUrl()
        {
            if (isset($_GET['url'])) {
                $url = $_GET['url'];
                $url = rtrim($url,'/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }

        }
}
