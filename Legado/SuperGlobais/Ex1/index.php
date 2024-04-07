<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        h1 {
            color: black;
        }
    </style>
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                echo "<h1>Super Global Get</h1>";
                var_dump($_GET);

                echo "<h1>Super Global Post</h1>";
                var_dump($_POST);

                echo "<h1>Super Global Request</h1>";
                var_dump($_REQUEST);

                echo "<h1>Super Global Cookie</h1>";
                var_dump($_COOKIE);

                echo "<h1>Super Global Session</h1>";
                var_dump($_SESSION);

                //Variaveis de ambiente

                echo "<h1>Super Global</h1>";
                var_dump($_ENV);
                // foreach (getenv() as $c => $v) {
                //     echo "<br> $c -> $v ";
                // }

                echo "<h1>Super Global Server</h1>";
                var_dump($_SERVER);

                echo "<h1>Super Global Globals</h1>";
                var_dump($GLOBALS);
            
            ?>
        </pre>
    </main>
    
</body>
</html>