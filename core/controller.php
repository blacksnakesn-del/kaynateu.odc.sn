
<?php

class controller {
    protected function view($view, $data = []) {
        $templatePath = ROOT . "/app/views/" . $view . ".php";

        if (!is_file($templatePath)) {
            throw new RuntimeException("View not found: " . $templatePath);
        }

        // Safer alternative to extract($data): expose the array as $data.
        // Templates can use $data['key'].
        require $templatePath;
    }



    protected function model($model) {
        require_once ROOT."/app/models/".$model.".php";
        return new $model();
    }

    protected function redirect($url) {
        header("Location: index.php?url=".$url);
        exit;
    }
}

?>

