

<?php

class Response {
    public function redirect($url) {
        header("Location: index.php?url=".$url);
        exit;
    }
}

?>