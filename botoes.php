
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
        if($_SESSION['tipo'] == 'adm') {
            echo "<button>Adm</button>
                    <button>Comum</button>";
        } else {
            echo "<button>Comum</button>";
        }
        
    
    ?>  
</body>
</html>