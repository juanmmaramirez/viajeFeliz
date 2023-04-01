<?php
include_once 'viajeFeliz.php';

$viaje = new Viaje(0,0," ");


function MenuPrincipal(){
    echo "         MENÚ           \n";
    echo "Seleccione una opción: \n";
    echo "1. Cargar datos del viaje\n";
    echo "2. Modificar datos del viaje\n";
    echo "3. Ver datos del viaje\n";
    echo "5. Salir\n";
    $opcion=trim(fgets(STDIN));
    return $opcion ;
}

do{
    $opcion= MenuPrincipal();

    switch($opcion){ 
        case 1:
            echo "Ingrese el código del viaje: ";
            $codigo=trim(fgets(STDIN));
            $viaje->setCodigo($codigo);
            echo "Ingrese el destino del viaje: ";
            $destino=trim(fgets(STDIN));
            $viaje->setDestino($destino);
            echo "Ingrese el máximo de pasajeros del viaje: ";
            $max_Pasajeros=trim(fgets(STDIN));
            $viaje->setMaxPasajeros($max_Pasajeros);
            echo "desea cargar los pasajeros ahora?\n";
            $respuestaDif = trim(fgets(STDIN));
            $i=0;
            if ($respuestaDif == 'si'){
                while($i<$max_Pasajeros){
                echo "Ingrese el nombre del pasajero: ";
                $nombre=trim(fgets(STDIN));
                echo "Ingrese el apellido del pasajero: ";
                $apellido=trim(fgets(STDIN));
                echo "Ingrese el documento del pasajero: ";
                $documento=trim(fgets(STDIN));
                $pasajero = array(
                    "nombre" => $nombre,
                    "apellido" => $apellido,
                    "documento" => $documento
                );
                $viaje->cargarPasajero($pasajero);
                $i++; 
                echo "INFORMACION CARGADA CORRECTAMENTE\n\n";
                echo "¿Desea volver al menú principal? (si/no)\n";
            $respuesta = trim(fgets(STDIN)); 
                }           
            break;
            }
        case 2: 
            echo "¿Qué desea modificar?\n";
            echo "1-Codigo del viaje\n";
            echo "2-Cantidad de pasajeros\n";
            echo "3-Destino del viaje\n";
            echo "4-Datos de los pasajeros\n";
            $modificacion = trim(fgets(STDIN));
            if($modificacion==1){
                echo "Ingrese el nuevo código del viaje:\n";
                $codigo = trim(fgets(STDIN));
                $viaje->setCodigo($codigo);
            }
            elseif($modificacion==2){
                echo "Ingrese la nueva cantidad máxima de pasajeros:\n";
                $max_Pasajeros = trim(fgets(STDIN));
                $viaje->setMaxPasajeros($max_Pasajeros);
            }
            elseif($modificacion==3){
                echo "Ingrese el nuevo destino:\n";
                $destino = trim(fgets(STDIN));
                $viaje->setDestino($destino);
            }
            elseif($modificacion==4){
                echo "Ingrese el número de pasajero que desea modificar:\n";
                $nroPasajero = trim(fgets(STDIN));
                if ($nroPasajero < 1 || $nroPasajero > $viaje->setMaxPasajeros($max_Pasajeros)) {
                    echo "Número de pasajero inválido.\n";                
                }else{
                    echo "Ingrese el nuevo nombre del pasajero:\n";
                    $nombre= trim(fgets(STDIN));
                    echo "Ingrese el nuevo apellido del pasajero:\n";
                    $apellido = trim(fgets(STDIN));
                    echo "Ingrese el nuevo número de documento del pasajero:\n";
                    $documento = trim(fgets(STDIN));
                    $viaje->setPasajeros($nombre, $apellido, $documento);     
                } 
                echo "Información modificada con éxito.\n";
            }
            else{
                echo "Opción inválida.\n";
            }             
           
            echo "¿Desea volver al menú principal? (si/no)\n";
            $respuesta=trim(fgets(STDIN));
            break;   
        case 3:
            $viaje->mostrarDatos();
            echo "¿Desea volver al menú principal? (si/no)\n";
            $respuesta = trim(fgets(STDIN));
            break; 
        case 5:
            if($opcion==5){
                $respuesta='no';
            }

        }
       

    } while ($respuesta === 'si');
echo "FIN DEL PROGRAMA";