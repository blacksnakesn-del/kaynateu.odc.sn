
<?php

class ErreurController extends controller {
    public function index() {
        $this->view("Error/404");
    }
}

?>