<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author Florencio
 */
class Conectar {
    public static function conexion(){
        
        $conexion = new mysqli("localhost", "root", "", "mysql");
        return $conexion;
        
        
    }
}
