
<?php

class View
{
    /**
     * Render a PHP view.
     *
     * @param string $view  View path relative to app/views (without .php)
     * @param array  $data  Variables to expose in the template
     */
    public static function render(string $view, array $data = []): void
    {
        $templatePath = ROOT . "/app/views/" . $view . ".php";

        if (!is_file($templatePath)) {
            throw new RuntimeException("View not found: " . $templatePath);
        }

        require $templatePath;
    }
}


