<?php
include 'index.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Verifica se o arquivo foi enviado e se não houve erro durante o upload
        if (in_array($_FILES['image']['type'], array('image/jpeg', 'image/jpg', 'image/png'))) {
            $name = md5(time(). rand(0,1000)).'.jpg';
            $destination = 'images/' . $name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
                // O arquivo foi movido com sucesso
                $submitHeight = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_INT);
                $submitWidth = filter_input(INPUT_POST, 'largura', FILTER_VALIDATE_INT);

                if ($submitHeight && $submitWidth) {
                    // Se altura e largura forem válidos
                    $archive = $destination; // Caminho completo do arquivo
                    $width = $submitWidth;
                    $height = $submitHeight;

                    list($originalWidth, $originalHeight) = getimagesize($archive);

                    $ratio = $originalWidth / $originalHeight;
                    $ratioDest = $width / $height;

                    $finalWidth = 0;
                    $finalHeight = 0;
                    $finalX = 0;
                    $finalY = 0;

                    if ($ratioDest > $ratio) {
                        $finalWidth = $height * $ratio;
                        $finalHeight = $height;
                    } else {
                        $finalHeight = $width / $ratio;
                        $finalWidth = $width;
                    }

                    if ($finalWidth < $width) {
                        $finalWidth = $width;
                        $finalHeight = $width / $ratio;
                        $finalY = -(($finalHeight - $height) / 2);
                    } else {
                        $finalHeight = $height;
                        $finalWidth = $height * $ratio;
                        $finalX = -(($finalWidth - $width) / 2);
                    }

                    $img = imagecreatetruecolor($width, $height);
                    $originalImg = imagecreatefromjpeg($archive); // Lê a imagem baseado no tipo

                    imagecopyresampled(
                        $img,
                        $originalImg,
                        $finalX,
                        $finalY,
                        0,
                        0,
                        $finalWidth,
                        $finalHeight,
                        $originalWidth,
                        $originalHeight
                    );

                    // Salvar imagem redimensionada
                    $resizedImagePath = 'images/resized_' . $name;
                    imagejpeg($img, $resizedImagePath, 100);

                    // Liberar memória
                    imagedestroy($img);
                    imagedestroy($originalImg);

                    // Exibir a imagem redimensionada no HTML
                    echo '<img src="' . $resizedImagePath . '" alt="Imagem Redimensionada">';
                } else {
                    // Se altura ou largura forem inválidos
                    header('Location: index.php');
                    exit; // Encerrar a execução do script
                }
            } else {
                // Falha ao mover o arquivo
                header('Location: index.php');
                exit; // Encerrar a execução do script
            }
        } else {
            // Arquivo não é uma imagem válida
            header('Location: index.php');
            exit; // Encerrar a execução do script
        }
    } else {
        // Se o arquivo não foi enviado ou houve erro durante o upload
        header('Location: index.php');
        exit; // Encerrar a execução do script
    }
} else {
    header('Location: index.php');
    exit; // Encerrar a execução do script
}
?>
