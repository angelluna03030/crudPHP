<?php

$con = mysqli_connect('localhost', 'root', '', 'prubas2');
if (!$con) {
    exit('Error de conexión: '.mysqli_connect_error());
}

echo "Conexión exitosa a la base de datos '$dbname'";

// Check if the email and password exist in the "usuarios" table
if (isset($_POST['email']) && isset($_POST['contrasena'])) {
    $email = $_POST['email'];
    $password = $_POST['contrasena'];

    $query = "SELECT * FROM usuarios WHERE email='$email' AND contrasena='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        // Email and password are correct, create a session variable and redirect to "vista/index.php"
        $_SESSION['email'] = $email;
        header('location: vista/index.php');
    } else {
        // Email and password are incorrect, redirect to login page
        header('location: iniciodesecion.php?error=Credenciales incorrectas');
    }
}
