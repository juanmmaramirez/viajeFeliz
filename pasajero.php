<?php
class pasajero{

private $nombre;
private $apellido;
private $num_doc;
private $telefono;

public function __construct($nombre,$apellido,$num_doc,$telefono)
{
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->num_doc = $num_doc;
    $this->telefono = $telefono;
}
//metodos de accesos
public function getNombre () {
    return $this->nombre;
}
public function setNombre($nombre){
     $this->nombre = $nombre;
}
public function getApellido (){
    return $this->apellido;
}
public function setApellido($apellido){
    $this->apellido = $apellido;
}
public function getNum_doc (){
    return $this->num_doc;
}
public function setNum_doc($num_doc){
     $this->num_doc = $num_doc;
}
public function getTelefono (){
    return $this->telefono;
}
public function setTelefono($telefono){
    $this->telefono = $telefono;
}

}
?>

