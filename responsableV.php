<?php

class responsableV{

//atributos
    private $numeroEmpleado;
    private $numeroLicencia;
    private $nombreResponsable;
    private $apellidoResponsable;


    public function __construct($numeroEmpleado, $numeroLicencia, $nombreResponsable, $apellidoResponsable) {
        $this->numeroEmpleado=$numeroEmpleado;
        $this->numeroLicencia=$numeroLicencia;
        $this->nombreResponsable=$nombreResponsable;
        $this->apellidoResponsable=$apellidoResponsable;
    }
//metodos de acceso
    public function get_nombreResponsable(){
        return $this->nombreResponsable;
    }
    public function get_apellidoResponsable(){
        return $this->apellidoResponsable;
    }
    public function get_numeroEmpleado(){
        $this->numeroEmpleado;
    }
    public function get_numeroLicencia(){
        $this->numeroLicencia;
    }

    public function set_nombreResponsable($nombreResponsable){
        $this->nombreResponsable=$nombreResponsable;
    }
    public function set_apellidoResponsable($apellidoResponsable){
        $this->apellidoResponsable=$apellidoResponsable;
    }
    public function set_numeroEmpleado($numeroEmpleado){
        $this->numeroEmpleado=$numeroEmpleado;
    }
    public function set_numeroLicencia($numeroLicencia){
        $this->numeroLicencia=$numeroLicencia;
    }



}
