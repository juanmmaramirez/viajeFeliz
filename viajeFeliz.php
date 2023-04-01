<?php

class Viaje {
    private $codigo;
    private $destino;
    private $max_Pasajeros;
    private $pasajeros = array();

    // getters y setters
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
       return $this->codigo = $codigo;
    }
    public function getDestino()
    {
        return $this->destino;
    }
    public function setDestino($destino)
    {
        return $this->destino = $destino;
    }
    public function getMaxPasajeros()
    {
        return $this->max_Pasajeros;
    }   
    public function setMaxPasajeros($max_Pasajeros)
    {
        return $this->max_Pasajeros = $max_Pasajeros;
    }
    public function getPasajeros()
    {
        return $this->pasajeros;
    }
    public function setPasajeros($pasajeros){
        return $this->pasajeros=$pasajeros;
    }
    // métodos
    public function cargarPasajero($pasajero)
    {
        if (count($this->pasajeros) < $this->max_Pasajeros) {
            array_push($this->pasajeros, $pasajero);
        } else {
            echo "No se puede cargar el pasajero porque el viaje está completo.\n";
        }
    }
    public function mostrarDatos()
    {
        echo "Código: " . $this->codigo . "\n";
        echo "Destino: " . $this->destino . "\n";
        echo "Máximo de pasajeros: " . $this->max_Pasajeros . "\n";
        echo "Pasajeros: \n";
        foreach($this->pasajeros as $pasajero) {
            echo "Nombre: " . $pasajero["nombre"] ."\n";
            echo "Apellido: " . $pasajero["apellido"] ."\n";
            echo "Documento: " . $pasajero["documento"] ."\n";
        }
    }
}