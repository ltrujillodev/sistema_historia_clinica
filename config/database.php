<?php
// Configuración de la base de datos
define('DB_HOST', 'localhost');   // Host de la base de datos
define('DB_USER', 'root');        // Usuario de MySQL (en XAMPP el usuario por defecto es "root")
define('DB_PASS', '');            // Contraseña de MySQL (por defecto, XAMPP no tiene contraseña para root)
define('DB_NAME', 'sistema_historia_clinica'); // Nombre de la base de datos

// Conexión a la base de datos
function conectar()
{
  $conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  // Verificar si la conexión fue exitosa
  if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
  }

  return $conexion;
}
