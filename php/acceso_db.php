 <?php
    $host_db = "localhost"; // Host de la BD
    $usuario_db = "layanos"; // Usuario de la BD
    $clave_db = "layanos"; // Contraseña de la BD
    $nombre_db = "layanos"; // Nombre de la BD

    //conectamos y seleccionamos db
    mysql_connect($host_db, $usuario_db, $clave_db);
    mysql_select_db($nombre_db);
?>
