<?php
    //obtener variables de index.html
    $nombre = $_POST['name'];
    $correo = $_POST['correo'];
    $tel = $_POST['tel'];
    $cantidad = $_POST['cantidad'];
    $edad = $_POST['edad'];

    //mostrar variables
    echo $nombre;
    echo $correo;
    echo $tel;
    echo $cantidad;
    echo $edad;

    //regresar al home
    echo("<button onclick=\"location.href='index.html'\">Back to Home</button>");
?>