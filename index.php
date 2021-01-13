<?php

   if( isset($_GET['controller']) ){

        // get controller name and route name

        $controller = $_GET['controller'];

        if(isset($_GET['route'])){
            $route = $_GET['route'];
        }else{
            $route = "index";
        }

        // create and transform controller name

        $controllerClassName = ucfirst($controller) . 'Controller' ;


        $controllerfile = $controllerClassName . ".php";

        if(file_exists($controllerfile)){
            
            // load controller from path or file

            require_once $controllerfile;

            // create new instance of the controller

            $controller = new $controllerClassName();

            // call route function

            try {
                $controller->$route();
            } catch (\Throwable $th) {
                // echo $th->getMessage();
                echo "no route found 404";
            }

        }else{
            echo "no controller found 404";
        }

   }else{
       echo "aucun page d'accueil";
   }
