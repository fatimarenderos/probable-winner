<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
        include('funciones.php');
        $id = $_GET["id"];
        $persona = buscar($id);
        
    ?>
    <form method="post" action="form.php">
        <input type="hidden" value="<?=$persona['id']?>" name="id"/>
        <div class="form-group">
            <label>Nombre: </label>
            <input type="text" name="name" value="<?=$persona['nombre']?>" />
        </div>
        <div class="form-group">
            <label>Apellido: </label>
            <input type="text" name="apellido" value="<?=$persona['apellido']?>" />
        </div>
        <div class="form-group">
            <label>DUI:  </label>
            <input type="text" name="dui" value="<?=$persona['dui']?>" />
        </div>
        <div class="form-group">
            <label>Numero de tarjeta: </label>
            <input type="text" name="numero_tarjeta" value="<?=$persona['numero_tarjeta']?>" />
        </div>
        <div class="form-group">
            <label>Tipo de cuenta </label>
            <input type="text" name="tipo_cuenta" value="<?=$persona['tipo_cuenta']?>" />
        </div>
        <div class="form-group">
            <label>Saldo: </label>
            <input type="text" name="saldo" value="<?=$persona['saldo']?>" />
        </div>
        <input type="submit" value="Enviar" />
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>  