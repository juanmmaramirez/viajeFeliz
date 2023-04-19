<?php

include_once("pasajero.php");
include_once("responsableV.php");

class  Viaje{



    //Atributos
    public $Viajee;
    public $destino;
    public $cantidadMaxPasajeros;
    public $pasajeros = [];
    public $responsableViaje;



    //Propiedades: caracteristicas de nuestros objetos
    //Metodos
    public function __construct($Viajee, $destino, $cantidadMaxPasajeros, $pasajeros, $responsableViaje)
    {
        $this->Viajee = $Viajee;
        $this->destino = $destino;
        $this->cantidadMaxPasajeros = $cantidadMaxPasajeros;
        $this->pasajeros = $pasajeros;
        $this->responsableViaje = $responsableViaje;
    }


    public function get_destino()
    {
        return $this->destino;
    }

    public function set_destino($destino)
    {
        $this->destino = $destino;
    }

    public function get_viaje()
    {
        return $this->Viajee;
    }

    public function get_maximoPasajeros()
    {
        return $this->cantidadMaxPasajeros;
    }

    public function set_maximoPasajeros($cantidadMaxPasajeros)
    {
        $this->cantidadMaxPasajeros = $cantidadMaxPasajeros;
    }

    public function get_pasajeros()
    {
        return $this->pasajeros;
    }

    public function set_pasajeros($pasajeros)
    {
        $this->pasajeros = $pasajeros;
    }

    public function get_ResponsableViaje(){
        return $this->responsableViaje;
    }

    public static function chequeoDeCodigo($codigo, $viajes)
    {
        $retorno = false;
        foreach ($viajes as $viaje) {
            if ($viaje->Viajee == $codigo) {
                $retorno = true;
            }

            return $retorno;
        }
    }
}