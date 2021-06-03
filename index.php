<?php

    require_once "config/database.php";
    require_once "controlador/myUsuariosControlador.php";

    $controlador = new myUsuariosControlador();
    $controlador->index();
    //call_user_func(array($controlador, "index"));

    if (!isset($_GET['path'])){
        
        require_once "config/database.php";
        require_once "controlador/myUsuariosControlador.php";

        $controlador = new myUsuariosControlador();
        $controlador->index();
        //call_user_func(array($controlador, "index"));
        
    }else {
        
        $controlador = $_GET['path'];
        $accion = $_GET['accion'];
        require_once "controlador/$controlador.php";
        $controlador = ucwords($controlador);
        $controlador = new $controlador;
        $metodo = isset($_GET['path']) ? $_GET['path'] : "Inicio";
        call_user_func(array($controlador, $accion));
        
    }




