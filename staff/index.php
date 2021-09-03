<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/89178b42f5.js" crossorigin="anonymous"></script>
    <title>Staff</title>
</head>
<body>
    <?php include("../nav.php");
    $data = file_get_contents("staff.json");
    $data = json_decode($data, true);
    ?>
    <div id="content">
        <h1>Staff</h1>

        <h2>Programadores <i class="fas fa-code"></i></h2>
        <p>Son aquellos que por su conocimiento mantienen operando el server.</p>
            <?php      
        foreach ($data["programadores"] as $programador) {
            echo "
            <h3>".$programador["name"]."</h3>
            <ul>
                <li>Discord: ".$programador["discord"]."</li>
            </ul>";
        }
            ?>
        <hr>

        <h2>Creadores <i class="fab fa-redhat"></i></h2>
        <p>Es uno de los roles máximos y son aquellos que arreglan los problemas del servidor, tienen el poder de la consola.</p>
        <?php      
        foreach ($data["creadores"] as $creador) {
            echo "
            <h3>".$creador["name"]."</h3>
            <ul>
                <li>Discord: ".$creador["discord"]."</li>
            </ul>";
        }
            ?>

        <h2>Administradores <i class="fas fa-balance-scale"></i></h2>
        <p>Son aquellos que atienden tus dudas y moderan en el servidor.</p>
        <?php      
        foreach ($data["administradores"] as $administrador) {
            echo "
            <h3>".$administrador["name"]."</h3>
            <ul>
                <li>Discord: ".$administrador["discord"]."</li>
            </ul>";
        }
            ?>
        <hr>
        
        <h2>Ayudantes <i class="fas fa-tools"></i></h2>
        <p>Son aquellos que orientan a los usuarios que tengan dudas en el servidor.</p>
        <?php      
        foreach ($data["ayudantes"] as $ayudante) {
            echo "
            <h3>".$ayudante["name"]."</h3>
            <ul>
                <li>Discord: ".$ayudante["discord"]."</li>
            </ul>";
        }
            ?>

    </div>
    <?php include("../footer.php") ?>
</body>
</html>