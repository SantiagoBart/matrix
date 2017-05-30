<?php

class conexion {
    var $usu;
    var $pwd;
    var $bd;
    var $host;
    var $link;
    
    
    function conectar(){
        $this->link=  mysql_connect($this->host,  $this->usu,  $this->pwd) or die("error en la conexion". mysql_error());
        mysql_select_db($this->bd,  $this->link) or die("error en a seleccion de bd".mysql_error($this->link));
        if(!($pepe)){
            return $this->link;
        }
        else{
            return -1;
        }
    }
}
