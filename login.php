<?php

session_start();

require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        $_SESSION['usuario'] = $usuario['email'];
        $_SESSION['tipo'] = $usuario['cargo'];

        if ($usuario['cargo'] === 'adm') {
            header('Location: adm.php');
        } else {
            header('Location: home.php');
        }
        exit();
    } else {
        echo "Email ou senha incorretos.";
    }
}






?>