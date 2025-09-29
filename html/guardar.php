<?php
$archivo = "respuestas.txt";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $direccion = $_POST['direccion'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $email = $_POST['email'] ?? '';
    $genero = $_POST['genero'] ?? '';
    $asunto = $_POST['asunto'] ?? '';

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Dirección: $direccion\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Correo: $email\n";
    $contenido .= "Género: $genero\n";
    $contenido .= "Asunto: $asunto\n";
    $contenido .= "--------------------------\n";

    if(file_put_contents($archivo, $contenido, FILE_APPEND | LOCK_EX)) {
        echo "Datos guardados correctamente.";
    } else {
        echo "Error al guardar los datos. Revisa permisos del archivo.";
    }
}
?>
