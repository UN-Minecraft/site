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
</head>
<body>
    <?php include("nav.php") ?>
    <div id="content">
        <h1>Contacto</h1>
        <?php
            if($_POST["name"] == null || $_POST["contact"] == null || $_POST["message"] == null || $_POST["tipo"] == null) {
                echo "<p> Uno o  más valores están incompletos.</p>";
            } else {
                $webhookurl = "https://discord.com/api/webhooks/885875881044758548/oCV2SxbZDMiannuhMLts3eOitdtLXQlcpetdN3IwYn5XhqZ1HDvxi-3idYndLgpuT-Cp";
                $timestamp = date("c", strtotime("now"));
                $json_data = json_encode([
                    "username" => $_POST["name"],
                    "embeds" => [
                        [
                            "title" => "Tipo: ".$_POST["tipo"],
                            "type" => "rich",
                            "description" => $_POST["message"],
                            "timestamp" => $timestamp,
                            "color" => hexdec( "3366ff" ),
                            "footer" => [
                                "text" => $_SERVER['REMOTE_ADDR'],
                            ],                    
                            "fields" => [
                                [
                                    "name" => "Contacto",
                                    "value" => $_POST["contact"],
                                    "inline" => false
                                ],
                            ]
                        ]
                    ]

            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


            $ch = curl_init( $webhookurl );
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
            curl_setopt( $ch, CURLOPT_POST, 1);
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
            curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt( $ch, CURLOPT_HEADER, 0);
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

            $response = curl_exec( $ch );

            curl_close( $ch );
            echo '<script>alert("Tu respueta ha sido enviada, gracias por tu tiempo.");</script>';
            echo '<a href="/">Volver</a>';
            }
    
        ?>
    </div>
    <?php include("footer.php") ?>
</body>
</html>