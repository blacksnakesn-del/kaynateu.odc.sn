
<?php

class Request {
    public function get($key) {
        return $_GET[$key] ?? null;
    }

    public function post($key) {
        return $_POST[$key] ?? null;
    }

    public function allPost() {
        return $_POST;
    }

    public function allGet() {
        return $_GET;
    }
}

?>

 