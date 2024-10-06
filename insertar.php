<style>
    .correctamente {
        color: green;
        font-weight: bold;
        font-size: 1.2em;
        text-align: center;
        margin-top: 20px;
    }
    
    .Error {
        color: red;
        font-weight: bold;
        font-size: 1.2em;
        text-align: center;
        margin-top: 20px;
    }
</style>

<link rel="stylesheet" href="styles.css">

<?php

include("php/conexion.php");

$base = conectarDBS(); 

if ($base->connect_error) {
    die("Error de conexión: " . $base->connect_error);
}

// Verifica si se ha enviado el formulario
if (isset($_POST['insertar'])) {
    // Verifica si los campos están completos
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['ciudad']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['descripcion']) >= 1 

        

    ) {



        $nombre = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $ciudad = trim($_POST['ciudad']);
        $email = trim($_POST['email']);
        $descripcion = trim($_POST['descripcion']);
      




        // Consulta SQL
        $consulta = "INSERT INTO clientes (nombre,	telefono,	ciudad,	email,	descripcion) VALUES (?, ?, ?, ?, ?)";





        // Preparar la consulta
        if ($stmt = $base->prepare($consulta)) {





            // Vincular parámetros
            $stmt->bind_param('sssss', $nombre, $telefono, $ciudad, $email, $descripcion);







            // Ejecutar la consulta
            if ($stmt->execute()) {
                $stmt->close();
                $base->close();






                


                // Redirigir al usuario con un mensaje de éxito
                echo "<h3 class='correctamente'>Registrado Correctamente</h3>";
                echo "<script>
                    setTimeout(function() {
                        window.location.href = 'index.php'; // Cambia 'formulario.php' al nombre de tu formulario
                    }, 200); // Espera 2 segundos antes de redirigir
                </script>";
                exit;
            } else {
                echo "<h3 class='Error'>Error al registrar: " . $stmt->error . "</h3>";
            }
        } else {
            echo "<h3 class='Error'>Error al preparar la consulta: " . $base->error . "</h3>";
        }
    } else {
        echo "<h3 class='Error'>Campos incompletos. Registro No Registrado</h3>";
    }
} else {
    echo "<h3 class='Error'>No se ha enviado el formulario.</h3>";
}


$base->close();
