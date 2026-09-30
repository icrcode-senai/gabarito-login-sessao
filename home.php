<?php

session_start();


if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once 'botoes.php';
    ?>
    <table border="1">
        <tr>
            <th>Email</th>
            <th>Cargo</th>
        </tr>
        <?php
        require_once 'connect.php';
        $sql = "SELECT email, cargo FROM usuarios WHERE email = '{$_SESSION['usuario']}'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['email'] . "</td><td>" . $row['cargo'] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Nenhum usuário encontrado</td></tr>";
        }
        ?>
    <a href="logout.php">Sair</a>
</body>
</html>