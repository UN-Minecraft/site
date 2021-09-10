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
    <title>Contacto</title>
    <style>
        input, textarea {
            width: 80%;
            margin: 2%;
            padding: 12px 20px;
            resize: none;
        }
    </style>
</head>
<body>
    <?php include("nav.php") ?>
    <div id="content">
        <h1>Contacto</h1>
        <p>¿Dudas? ¿sugerencias? ¿ideas? Llena el formulario para ponerte en contacto con el equipo de staff.</p>

        <form action="enviar.php" method="POST">
            <h3>Nombre/Nick</h3>
            <input type="text" name="name">

            <h3>Contacto</h3>
            <p>¿Cómo podemos contactarte? ¿Email? ¿WhatsApp? ¿Discord?</p>
            <input type="text" name="contact">

            <h3>Mensaje</h3>
            <textarea name="message" id="" cols="30" rows="10"></textarea>

            <h3>Tipo</h3>
            <select name="tipo" id="tipo">
                <option value="Sugerencia">Sugerencia</option>
                <option value="Queja">Queja</option>
                <option value="Reclamo">Reclamo</option>
                <option value="Otro">Otro</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php include("footer.php") ?>
</body>
</html>