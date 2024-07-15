<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Slick -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" href="assets/lib/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="assets/lib/slick-1.8.1/slick/slick-theme.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<section class="banner">
        <div class="banner-responsive banner-slider">
            <div>
                <div class="banner-slide">
                    <picture>
                        <img src='assets/images/print.jpg' alt='imagem' />
                    </picture>
                </div>
            </div>
            <div>
                <div class="banner-slide">
                    <picture>
                        <img src='assets/images/print.jpg' alt='imagem' />
                    </picture>
                </div>
            </div>
            <div>
                <div class="banner-slide">
                    <picture>
                        <img src='assets/images/print.jpg' alt='imagem' />
                    </picture>
                </div>
            </div>
        </div>
        <i class="fas fa-chevron-left prev-banner"></i>
        <i class="fas fa-chevron-right next-banner"></i>
</section>


<section class="linhas">
        <div class="container">
            <div class="linhas-content">
                <div class="linhas-slider">
                    <div>
                        <div class="linha-slide">
                            <img src="assets/images/print.jpg">
                            
                        </div>
                    </div>
                    <div>
                        <div class="linha-slide">
                            <img src="assets/images/print.jpg">
                            
                        </div>
                    </div>
                    <div>
                        <div class="linha-slide">
                            <img src="assets/images/print.jpg">
                            
                        </div>
                    </div>
                    <div>
                        <div class="linha-slide">
                            <img src="assets/images/print.jpg">
                            
                        </div>
                    </div>
                    <div>
                        <div class="linha-slide">
                            <img src="assets/images/print.jpg">
                            
                        </div>
                    </div>
                </div>
                <span class="prev-linhas"><i class="fa-solid fa-circle-left"></i></span>
                <span class="next-linhas"><i class="fa-solid fa-circle-right"></i></span>
            </div>
        </div>
    </section>


    <section class="clientes d-flex">
        <div class="container d-flex">
            <div class="titulo d-flex">
                <span class="span-titulo">principais clientes</span>
                <h3 class="roxo">Quem confia na Maieutics.ai</h3>
            </div>
            <div class="clientes-div d-flex">
                <span class="prev-cli"><i class="fas fa-chevron-left"></i></span>
                <div class="clientes-slider">
                    <?php foreach($parceiros as $key => $pas): ?>
                    <div>
                        <div class="box">
                            <img src="admin/files/parceiros/<?= $pas['imagem'] ?>" alt="imagem">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <span class="next-cli"><i class="fas fa-chevron-right"></i></span>
            </div>
        </div>
    </section>




<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="assets/lib/slick-1.8.1/slick/slick.js"></script>
<script src="assets/js/functions.js"></script>

</html>