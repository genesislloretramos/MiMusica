<?php
// RENOMBRADO DE TABLAS Y SUS COLUMNAS PARA PODER DESARROLLAR SIN TENER QUE CONSULTAR LA BASE DE DATOS
    // TABLA DE ALBUM
    $tb_Album = "album";
        // nombre de las columnas
        $tb_Album_IdAlbum = "AlbumId";
        $tb_Album_Titulo = "Title";
        $tb_Album_IdArtista = "ArtistId";

    // TABLA DE ARTISTA
    $tb_Artista = "artist";
        // nombre de las columnas
        $tb_Artista_IdArtista = "ArtistId";
        $tb_Artista_Nombre = "Name";

    // TABLA DE CLIENTE
    $tb_Cliente = "customer";
        // nombre de las columnas
        $tb_Cliente_Id = "CustomerId";
        $tb_Cliente_Nombre = "FistName";
        $tb_Cliente_Apellido = "LastName";
        $tb_Cliente_Empresa = "Company";
        $tb_Cliente_Direccion = "Address";
        $tb_Cliente_Ciudad = "City";
        $tb_Cliente_Estado = "State";
        $tb_Cliente_Pais = "Country";
        $tb_Cliente_CP = "PostalCode";
        $tb_Cliente_Tel = "Phone";
        $tb_Cliente_Fax = "Fax";
        $tb_Cliente_Correo = "Email";

    // TABLA DE EMPLEADOS
    $tb_Empleados = "employee";
        // nombre de las columnas
        $tb_Empleados_Id = "EmployeeId";
        $tb_Empleados_Apellido = "LastName";
        $tb_Empleados_Nombre = "FirstName";
        $tb_Empleados_Titulo = "Title";
        $tb_Empleados_Reportes = "ReportsTo";
        $tb_Empleados_Cumpleaños = "BirthDate";
        $tb_Empleados_Registro = "HireDate";
        $tb_Empleados_Direccion = "Address";
        $tb_Empleados_Ciudad = "City";
        $tb_Empleados_Estado = "State";
        $tb_Empleados_Pais = "Country";
        $tb_Empleados_CP = "PostalCode";
        $tb_Empleados_Tel = "Phone";
        $tb_Empleados_Fax = "Fax";
        $tb_Empleados_Correo = "Email";

    // TABLA DE GENERO
    $tb_Genero = "genre";
        // nombre de las columnas
        $tb_Genero_Id = "GenreId";
        $tb_Genero_Nombre = "Name";

    // TABLA DE FACTURA
    $tb_Factura = "invoice";
        // nombre de las columnas
        $tb_Factura_Id = "InvoiceId";
        $tb_Factura_IdCliente = "CustomerId";
        $tb_Factura_Id = "InvoiceDate";
        $tb_Factura_Facturacion_Direccion = "BillingAdress";
        $tb_Factura_Facturacion_Ciudad = "BillingCity";
        $tb_Factura_Facturacion_Estado = "BillingState";
        $tb_Factura_Facturacion_Pais = "BillingCountry";
        $tb_Factura_Facturacion_CP = "BillingPostalCode";
        $tb_Factura_Total = "Total";

    // TABLA DE FACTURACION
    $tb_LineaDeFactura = "invoiceline";
        // nombre de las columnas
        $tb_LineaDeFactura_Id = "InvoiceLineId";
        $tb_LineaDeFactura_IdFactura = "InvoiceId";
        $tb_LineaDeFactura_IdCancion = "TrackId";
        $tb_LineaDeFactura_PrecionUnidad = "UnitPrice";
        $tb_LineaDeFactura_Cantidad = "Quantity";

    // TABLA DE FORMATO AUDIO
    $tb_FormatoAudio = "mediatype";
        // nombre de las columnas
        $tb_FormatoAudio_Id = "MediaTypeId";
        $tb_FormatoAudio_Nombre = "Name";

    // TABLA DE LISTAS DE REPRODUCCION
    $tb_ListaReproduccion = "playlist";
        // nombre de las columnas
        $tb_ListaReproduccion_Id = "PlaylistId";
        $tb_ListaReproduccion_Nombre = "Name";

    // TABLA DE RELACION ENTRE LISTAS DE REPRODUCCION Y CANCIONES
    $tb_ListaReproduccionIdCancion = "playlisttrack";
        // nombre de las columnas
        $tb_ListaReproduccionIdCancion_IdListaReproduccion = "PlaylistId" ;
        $tb_ListaReproduccionIdCancion_IdCancion = "TrackId" ;

    // TABLA DE CANCIONES
    $tb_Cancion = "track";
        // nombre de las columnas
        $tb_Cancion_Id = "TrackId";
        $tb_Cancion_Nombre = "Name";
        $tb_Cancion_Album = "AlbumId";
        $tb_Cancion_TipoFichero = "MediaTypeId";
        $tb_Cancion_Genero = "GenreId";
        $tb_Cancion_Compositor = "Composer";
        $tb_Cancion_Milisegundos = "Milliseconds";
        $tb_Cancion_Bytes = "Bytes";
        $tb_Cancion_PrecioUnidad = "UnitPrice";
?>