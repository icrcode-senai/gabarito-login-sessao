<?php

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}


if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'adm') {
    header('Location: home.php');
    exit();
}

require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios(email, senha, cargo) VALUES ('$email', '$senha', 'comum')";
    $conn->query($sql);
    if ($conn->affected_rows > 0) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }
    header('Location: adm.php');
    exit();
}


?>