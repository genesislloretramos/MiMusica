<?php
    $titulo = "Consultar Musicas";
    $urlFotos = "./img/avatar.png";
    $urlArtista = "#!";
    $urlArtistaCaniones = "";
    $urlArtistaAlbums  = "";
?>
<!-- MOSTRAR CANCIONES DEL ARTISTA -->
<?php
    // CONEXION A LA BASE DE DATOS
    include("/include/conndb.php");
    // CONEXION A LAS VARIABLES DE LA BASE DE DATOS TANTO DE TABLAS COMO DE COLUMNAS
    include("/includes/conn/variables.php");
?>