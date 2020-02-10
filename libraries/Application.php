<?php 

class Application {

    public static function process() {
        
        $controllerName = "Article";
        $task = "index";

        if(!empty($_GET['controller'])) {
            $controllerName = ucfirst($_GET['controller']);
        }

        if(!empty($_GET['task'])) {
            $task = $_GET['task'];
        }

        $controllerName ="\Controllers\\" . $controllerName; // Double \\ pour échapper

        $controller = new $controllerName(); // Dans index, cela équivaudra à $controller = new \Controllers\Article
        $controller->$task(); // Appel des méthodes pour chaque controller, ici la méthode index() spécifiée dans la class Article sera appelée


    }
}

?>