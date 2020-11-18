<?php 
    function getCnx(){
        $host = "localhost";
        $port = "5432";
        $dbname = "proyecto_sed";
        $user = "dev";
        $password = "F688A45C";
        $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
        $dbconn = pg_connect($connection_string); 

        return $dbconn;
       /* $result = pg_query($dbconn, "SELECT * FROM personas");

        if (!$result) {
            echo "Something went wrong.";
            exit;
        }else{
            $arr = pg_fetch_all($result);
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
        }*/
    }
?>