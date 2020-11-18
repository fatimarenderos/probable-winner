<?php
    include('funciones.php');
    $nombre = $_POST["name"];
    $apellido = $_POST["apellido"];
    $dui = $_POST["dui"];
    $numero_tarjeta = $_POST["numero_tarjeta"];
    $tipo_cuenta = $_POST["tipo_cuenta"];
    $saldo = $_POST["saldo"];

    if(isset($_POST["id"]))
    {
        $id = $_POST["id"];
        update($id,$nombre,$apellido,$dui,$numero_tarjeta,$tipo_cuenta,$saldo);
    }else{
        insert($nombre,$apellido,$dui,$numero_tarjeta,$tipo_cuenta,$saldo);
    } 
    
    header("Refresh: 2; url=../pages/mostrar.php");
    
?>