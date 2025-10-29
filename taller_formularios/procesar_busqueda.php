<?php
    if (isset($_GET['termino_busqueda'])) {
        $termino = htmlspecialchars($_GET['termino_busqueda']);
    }else {
        $termino = "Ningún termino introducido";
    }
    echo "El termino de búsqueda es: " . $termino;
?>