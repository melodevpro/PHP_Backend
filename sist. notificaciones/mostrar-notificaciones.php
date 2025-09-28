<?php
//Conectarse a la base de datos (suponiendo que ya tienes una conexión establecida)
echo "<h2>Notificaciones</h2>";
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<p><strong>Mensaje:</strong> " . $row['mensaje'] . "</p>";
        echo "<p><strong>Destinatario:</strong> " . $row['destinatario'] . "</p>";
        echo "<p><strong>Fecha:</strong> " . $row['fecha'] . "</p>";
        echo "<p><strong>Estado:</strong> " . $row['estado'] . "</p>";
        echo "</div><hr>";
    }
} else {
    echo "<p>No hay notificaciones.</p>";
}

// funcion para marcar las notificaciones como leidas
function marcarComoLeida($id){
    $sql = "UPDATE notificaciones SET estado = 'leido' WHERE ID $id";
    if ($conn->query($sql) === TRUE) {
        return "Notificación marcada como leída.";
    } else {
        return "Error al actualizar la notificación: " . $conn->error;
    }
}