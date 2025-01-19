<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Verifica si el valor 'valor' está presente en la solicitud
    if (isset($_POST['valor'])) {
        $valor = $_POST['valor'];
        // Puedes hacer lo que quieras con el valor recibido, como guardarlo en una base de datos o mostrarlo
        echo "Valor recibido: " . $valor;
    } else {
        echo "No se ha recibido ningún valor.";
    }
}

echo "prueba de conexión";
?>