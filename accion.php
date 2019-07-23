<?php
    $destino= "federicofrsosa@gmail.com ";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $comentario = $_POST["comentario"];
    $contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nComentario: " . $comentario;
    mail ($destino,"Contacto", $contenido);
    header ("Location:index.html");
?>
