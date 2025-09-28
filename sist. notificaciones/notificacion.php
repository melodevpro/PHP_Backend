<?php
function enviarNotificacion($mensaje, $destinatario) {
    // Aquí iría la lógica para enviar la notificación (email, SMS, etc.)
    $fecha = date()"Y-m-d H:i:s");
    $estado = "enviada";

    //Conectarse a la base de datos (suponiendo que ya tienes una conexión establecida)
    $sql = "INSERT INTO notificaciones (mensaje, destinatario, fecha, estado
    VALUES ($mensaje, $destinatario, $fecha, $estado);

    // Ejecutar la consulta
    if ($conn -> query($sql) === TRUE) {
        //Enviar correo electronico al destinatario con la notificacion
        
}