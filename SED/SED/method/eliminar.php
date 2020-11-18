<?php
    include('funciones.php');

    if(isset( $_GET["id"])){
        $id = $_GET["id"];
        delete($id);
    }
    header("Refresh: 2; url=../pages/mostrar.php");
?>