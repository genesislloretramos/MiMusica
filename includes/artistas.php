<?php
// AGREGANDO CONEXIONES A LA BASE DE DATOS
    include("conn/variables.php");
    include("conndb.php");

// VARIABLE TEMPORAL QUE NO AYUDARIA A SU ESCAVILIDAD DEL PROYECTO
    $idArtista=1;

// MOSTRAR LOS ARTISTAS
    $selcionArtista = mysqli_query($conexion , "SELECT * FROM " . $tb_Artista);

    while ($mostrarArtista=mysqli_fetch_array($selcionArtista)) {       
        echo "
            <div class='card'>
                <div class='card-img'>
                    <div class='overlay btn'>
                        <div class='overlay-content'>
                        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#mostrarAlbumsCanciones" . $idArtista . "'>Ver los Albums del Artista</button>
                            <img class='avatar' src='./includes/variables/img/artista.png'>
                            <div class='modal fade' tabindex='-1' id='mostrarAlbumsCanciones" . $idArtista . "' role='dialog'>
                                <div class='modal-dialog modal-dialog-scrollable' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h4 class='modal-title'>" . $mostrarArtista[$tb_Artista_Nombre] . "</h4>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'> 
        ";

// MOSTRAR LOS ALBUMS DE LOS ARTISTAS
        $selecionAlbum = mysqli_query($conexion, "SELECT * FROM " . $tb_Album . " WHERE " . $tb_Album . "." . $tb_Album_IdArtista . " = " . $mostrarArtista[$tb_Artista_IdArtista] );  
        while($mostrarAlbum=mysqli_fetch_array($selecionAlbum)){
            echo "
                                            <details>
                                                <summary>
                                                    <h5>" . $mostrarAlbum[$tb_Album_Titulo] . " </h5>
                                                </summary>
            ";

// MOSTRAR LAS CANCIONES DE LOS ALBUMS DE LOS ARTISTAS
            $selecionCancion = mysqli_query($conexion, "SELECT * FROM " . $tb_Cancion . " WHERE " . $tb_Cancion . "." . $tb_Cancion_Album . " = " . $mostrarAlbum[$tb_Album_IdAlbum] );
            while($mostrarCancion=mysqli_fetch_array($selecionCancion)){
                echo "<p>" . $mostrarCancion[$tb_Cancion_Nombre] ."</p>";
            }
            
            echo"</details>";
        }

        echo"
                                        </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class='card-content'>
                    <h2 class='titularNombreArtista'>" . $mostrarArtista[$tb_Artista_Nombre] . "</h2>
                </div>
            </div>
        </div>
        ";

        $idArtista++;
    }
?>