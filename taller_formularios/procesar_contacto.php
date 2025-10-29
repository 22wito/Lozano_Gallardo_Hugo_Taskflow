<?php
    if (isset($_POST['nombre_contacto'])) {
        $termino_nombre = htmlspecialchars($_POST['nombre_contacto']);
    }else {
        $termino_nombre = "Ningún termino introducido";
    }

    if (isset($_POST['email_contacto'])) {
        $termino_email = htmlspecialchars($_POST['email_contacto']);
    }else {
        $termino_email = "Ningún termino introducido";
    }

    if (isset($_POST['mensaje_contacto'])) {
        $termino = htmlspecialchars($_POST['mensaje_contacto']);
    }else {
        $termino = "Ningún termino introducido";
    }

    echo "Gracias por tu mensaje " . $termino_nombre . ", te contactaremos pronto a tu email: " . $termino_email;


?>