

<?php 

class App {
        public function run() {
            $url = isset($_GET['url']) ? trim($_GET['url'], '/') : '';
            $router = new Router();
            $router->dispatch($url);
        }
    }


?>




