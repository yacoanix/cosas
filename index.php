<!DOCTYPE html>
<html>
<head>

    <title>Jugadores</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

</head>
<body>

<?php

    class Persona{
        //Definir propiedades

        private $nif;
        private $nombre;
        private $fecha;
        private $sexo;

        //Creacion del constructor
        /*function __construct(){
            $this->nif="45364867N";
            $this->nombre = "Marcos";
            $this->fecha = "19931111";
            $this->sexo = "M";
        }*/

        //Segundo constructor sobrecarga hay que darle unos parametros por defecto,
        //Si no se le pasan los parametros en la instancia, usara estos por defecto.
        function __construct($nif = "12345678A", $nombre = "AAAAA", $fecha = "19010101", $sexo="M"){
            $this->nif = $nif;
            $this->nombre = $nombre;
            $this->fecha = $fecha;
            $this->sexo = $sexo;
        }

        function get_Nif(){
            return $nif;
        }

        function get_Nombre(){
            return $nombre;
        }

        function get_Fecha(){
            return $fecha;
        }

        function get_Sexo(){
            return $sexo;
        }
    }

    $persona1 = new Persona();

    $persona2 = new Persona("42876979B", "Sonia", "19700509", "F");

    $persona3 = new Persona("12345678Z",null,null,null);

    echo (gettype($persona2-> $nombre));

    var_dump($persona1);

    echo "-----------------------------------------------------------";

    var_dump( $persona2);

    echo "-----------------------------------------------------------";

    var_dump($persona3);

?>


</body>


</html>