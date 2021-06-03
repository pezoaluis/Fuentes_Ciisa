<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of myUsuariosControlador
 *
 * @author Florencio
 */
class myUsuariosControlador {
    
    public function index(){
        
        require_once "modelo/myUsuariosModelo.php";
        $usuarios = new myUsuariosModelo();
        $data["Titulo"] = "Usuarios";
        $data["usuarios"] = $usuarios->getmyUsuarios();
        
        require_once "vista/myusuarios/myusuarios.php";
        
    }
        
    
    public function FormCrearUsuarios(){
        $data["Titulo"] = "Usuarios";
        
        require_once "vista/myUsuarios/newCrearUsuarios.php";
        
    }
    
}
