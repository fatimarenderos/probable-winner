<?php 
    include('coneccion.php');

    function mostrar(){
        $conx = getCnx();
        $result = pg_query( $conx, "SELECT * FROM personas");

        if (!$result) {
           $arr = [];
            exit;
        }else{
            $arr = pg_fetch_all($result);
        }
        pg_close($conx);

        return $arr;
    }


    function buscar($id){
        $conx = getCnx();
        $result = pg_query( $conx, "SELECT * FROM personas where id = $id");

        if (!$result) {
           $arr = [];
            exit;
        }else{
            $arr = pg_fetch_all($result);
        }
        pg_close($conx);

        return $arr[0];
    }

    
    function insert($nombre,$apellido,$dui,$numero_tarjeta,$tipo_cuenta,$saldo){
        //abrir la conexion
        $conx = getCnx();
        //crear la sql
        $sql = "insert into personas(nombre,apellido, dui, numero_tarjeta, tipo_cuenta, saldo) values('$nombre','$apellido','$dui','$numero_tarjeta','$tipo_cuenta','$saldo')";
        
        $result = pg_query($conx,$sql);

        if($result){
            echo "Persona guardada con exito";
        } 

        pg_close($conx);

    }

    function update($id,$nombre,$apellido,$dui,$numero_tarjeta,$tipo_cuenta,$saldo){
        //abrir la conexion
        $conx = getCnx();
        //crear la sql
        $sql = "update personas set nombre = '$nombre', apellido='$apellido' , dui='$dui', numero_tarjeta='$numero_tarjeta', tipo_cuenta='$tipo_cuenta', saldo='$saldo' where id=$id";
        
        $result = pg_query($conx,$sql);

        if($result){
            echo "Persona guardada con exito";
        } 

        pg_close($conx);

    }

    function delete($id){
        //abrir la conexion
        $conx = getCnx();
        //crear la sql
        $sql = "delete from personas where id=$id";
        
        $result = pg_query($conx,$sql);

        if($result){
            echo "Persona eliminada con exito";
        } 

        pg_close($conx);

    }

?>