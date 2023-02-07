<?php
    $email="jeffersonrc2508@gmail.com"
    $nombres=$_POST["nombres"];
    $correo=$_POST["correo"];
    $celular=$_POST["celular"];
    $comentarios=$_POST["comentarios"];

    $contenido="Nombres y Apellidos: ".$nombres."\nCorreo:".$correo."\nCelular:".$celular."\nComentarios:".$comentarios;

    mail($email,"Mensaje",$contenido);
    echo "<script>alert('Gracias por su mensaje');</script>";
    echo "<script>window.location.href='index.html';</script>";
?>