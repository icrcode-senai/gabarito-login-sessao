<?php

session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'adm') {
    header('Location: home.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de ADM</title>
</head>

<body>
    <?php
    include_once 'botoes.php';
    ?>
    <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>

    <table border="1">
        <tr>
            <th>Email</th>
            <th>Cargo</th>
        </tr>
        <?php
        require_once 'connect.php';
        $sql = "SELECT email, cargo FROM usuarios";
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