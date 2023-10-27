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
        <script>
    const scrollToCategoriasButton = document.getElementById("scrollToCategoriasButton");
  
    scrollToCategoriasButton.addEventListener("click", () => {
      window.scrollTo({
        top: 1000,
        behavior: "smooth",
      });
    });
    </script>
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
                    <a href="5pontos.php" class="btn btn-primary">Ver</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/img3.jpg" class="card-img-top" alt="Card 3">
                <div class="card-body">
                    <h5 class="card-title">Estratégias para dominar o trabalho remoto</h5>
                    <br>
                    <p class="card-text">Através deste post fique por dentro das melhores dicas e curiosidades que irão te ajudar a se desenvolver como profissional.</p>
                    <a href="categoria3.php" class="btn btn-primary">Ver</a>
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
        <button class="btn2" id="scrollToTopButton">
    <div class="text2" >
        <span>Back</span>
        <span>to</span>
        <span>top</span>
    </div>
    <div class="clone2">
        <span>Back</span>
        <span>to</span>
        <span>top</span>
    </div>
    <svg width="20px" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
    </svg>
</button>
<script>
    const scrollToTopButton = document.getElementById("scrollToTopButton");
  
    scrollToTopButton.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
</script>
    </main>
    
      <style>
        /* Estilo para a aba de mensagem fechada */
        #mensagem {
            display: none;
            background-color: #333;
            color: #fff;
            position: fixed;
            bottom: 0;
            right: 20px;
            padding: 10px;
            border-radius: 5px 5px 0 0;
            cursor: pointer;
        }

        /* Estilo para o botão de fechar */
        #fechar {
            color: #fff;
            float: right;
            cursor: pointer;
        }
    </style>
</head>
<style>
    /* Estilo para a aba redonda fechada */
    .aba {
        width: 50px;
        height: 50px;
        background-color: #bdc5cf; /* Cor de fundo */
        color: #fff; /* Cor do texto */
        border-radius: 50%; /* Deixa a aba redonda */
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    /* Estilo para a caixa de mensagem */
    .mensagem-box {
        width: 300px;
        height: 200px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        position: fixed;
        bottom: 80px;
        right: 20px;
        display: none;
    }

    /* Estilo para o botão de fechar */
    .fechar {
        color: #000000;
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
</style>
<div class="aba" onclick="abrirMensagem()">M</div>
<!-- Caixa de mensagem -->
<div class="mensagem-box" id="caixaMensagem">
    <span class="fechar" onclick="fecharMensagem()">X</span>
    <p>Escreva sua mensagem aqui:</p>
    <form method="post" action="processar_mensagem.php">
        <textarea name="mensagem" rows="5" cols="30"></textarea>
        <br>
        <div class="enviar"></div>  <input type="submit" value="Enviar">
    </form>
</div>
<script>
    function abrirMensagem() {
        document.getElementById("caixaMensagem").style.display = "block";
    }

    function fecharMensagem() {
        document.getElementById("caixaMensagem").style.display = "none";
    }
</script>
    <style>
        /* Estilo para o footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 35px;
        }
    </style>
<footer>
    <p>&copy; 2023 Profissional de Pijama. Todos os direitos reservados.</p>

</footer>
</body>
</html>

