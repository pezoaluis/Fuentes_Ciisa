<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of myUsuariosModelo
 *
 * @author Florencio
 */
class myUsuariosModelo {
    private $db;
    private $usuarios;
    
    public function __construct(){
        
        $this->db = Conectar::conexion();
        $this->usuarios = array();
    }
    
    public function getmyUsuarios(){
        
        $sql = "select * from usuarios";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc())
        {
            $this->myusuarios[] = $row;
        }
        
        return $this->myusuarios;
    }
    
    
}
