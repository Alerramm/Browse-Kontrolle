<?php
class RandomTable{
     function conectarBD(){ 

        
           $mysqli= new mysqli("localhost","root","","id3763537_comentarios");

    if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}

 return $mysqli; 
    } 

 function getArraySQL($sql){
        //Creamos la conexión
        $conexion = $this->conectarBD();
        //generamos la consulta
        if(!$result = mysqli_query($conexion, $sql)) die();

        $rawdata = array();
        //guardamos en un array multidimensional todos los datos de la consulta
        $i=0;
        while($row = mysqli_fetch_array($result))
        {   
            //guardamos en rawdata todos los vectores/filas que nos devuelve la consulta
            $rawdata[$i] = $row;
            $i++;
        }
        return $rawdata;
    }

    function getAllInfo(){
        //Creamos la consulta
        $sql = "SELECT * FROM consumos;";
        //obtenemos el array con toda la información
        return $this->getArraySQL($sql);
    }
}


?>