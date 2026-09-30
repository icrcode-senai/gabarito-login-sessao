
<?php

session_start();

if(isset($_SESSION['usuario'])) {
    
    if($_SESSION['tipo'] == 'adm') {
        header('Location: adm.php');
    } else {
        header('Location: home.php');
    }
    exit();

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <form action="login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        
        <input type="submit" value="Login">
    </form>
    
</body>
</html>