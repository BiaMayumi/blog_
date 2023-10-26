<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PROFISSIONAL DE PIJAMA</title>
</head>
<body>


<?php include_once("header.php"); 
    
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
    <!-- Título e Subtítulo -->
    <section id="title-container">
        <h1>Profissional de Pijama</h1>
        <p>Vista o pijama da produtividade através do home office.</p>
    </section>
    <main>
        <!-- Imagem grande no início da página -->
        <section id="hero-image">
            <img src="img/destaque.jpg" alt="Hero Image">
        </section>
        <div>
            <h1>CATEGORIAS</h1>
        </div>
        <!-- Três cards -->
        <section id="card-container">
            <div class="card" style="width: 18rem;">
                <img src="img/img1.jpg" class="card-img-top" alt="Card 1">
                <div class="card-body">
                    <h5 class="card-title">O que é o home office?</h5>
                    <br>
                    <p class="card-text">Você conhece essa modalidade? Através desse post venha descobrir tudo sobre o home office.</p>
                    <a href="categoria1.php" class="btn btn-primary">Ver</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/img2.jpg" class="card-img-top" alt="Card 2">
                <div class="card-body">
                    <h5 class="card-title">5 pontos positivos e negativos do home office</h5>
                    <br>
                    <p class="card-text">Como nem tudo são flores, trabalhar remotamente tem seus malefícios (e seus benefícios também), venha descobrir quais são!</p>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/img3.jpg" class="card-img-top" alt="Card 3">
                <div class="card-body">
                    <h5 class="card-title">Estratégias para dominar o trabalho remoto</h5>
                    <br>
                    <p class="card-text">Através deste post fique por dentro das melhores dicas e curiosidades que irão te ajudar a se desenvolver como profissional.</p>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </section>
        <!-- Seção de Depoimentos lado a lado -->
        <section id="testimonials">
            <h2>Depoimentos</h2>
            <div class="testimonial-container">
                <!-- Primeiro depoimento -->
                <div class="testimonial">
                    <div class="card" style="width: 18rem;">
                        <img src="img/testemunho1.jpg" class="card-img-top" alt="Testemunho 1">
                        <div class="card-body">
                            <p class="card-text">"O Profissional de Pijama mudou minha vida. Através das informações do blog eu conheci o home office e agora eu trabalho com muito mais conforto e produtividade!"</p>
                        </div>
                    </div>
                </div>
                <!-- Segundo depoimento -->
                <div class="testimonial">
                    <div class="card" style="width: 18rem;">
                        <img src="img/testemunho2.jpg" class="card-img-top" alt="Testemunho 2">
                        <div class="card-body">
                            <p class="card-text">"O Profissional de Pijama me mostrou um novo mundo de oportunidades. Nunca mais quero voltar ao escritório!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p><?php echo "© " . date("Y") . " - Profissional de Pijama"; ?></p>
    </footer>
</body>
</html>
