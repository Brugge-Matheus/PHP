<?php 
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
        $num = filter_input(INPUT_POST, 'number');
        $mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);

        if($name && $age && $num && $mail || $name || $age || $num || $mail) {
            $expiraton = time() + (86400 * 30);
            setcookie('nome', $name, $expiraton);

            echo "<p>Name: <strong>$name</strong></p>";
            echo "<p>Idade: <strong>$age</strong></p>";
            echo "<p>Number: <strong>$num</strong></p>";
            echo "<p>E-mail: <strong>$mail</strong></p>";
        } else {
            $_SESSION['alert'] = 'Preencha os itens corretamente';

            header("Location: index.php");
            exit;
        }  
    }
?>