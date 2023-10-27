<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="categoria1.css">
    
</head>
<body>
    <?php include_once("header.php"); ?>
    <h1>O que é o Home Office?</h1>
    <h3>Afinal, o que seria o Home office e como ele funciona? venha descobrir!</h3>
    <div class="homeoffice">
    <p>O home office, também conhecido como teletrabalho, é uma modalidade de trabalho que permite aos funcionários realizar suas atividades profissionais a partir de suas próprias residências, utilizando tecnologias de comunicação e informação para manter a produtividade e colaborar com colegas e superiores. Nesse modelo, o ambiente doméstico substitui o local de trabalho tradicional, como um escritório físico, proporcionando flexibilidade de horários e maior autonomia na execução das tarefas.</p> 
    </div><br>
    <div class="imagem">
        <img src="img/ft2.jpeg">
    </div>
    <hr>
    <div class="homeoffice2">
        <p>O home office tem se popularizado, especialmente com os avanços tecnológicos e a necessidade de adaptação a novas formas de trabalho, oferecendo vantagens como a redução de deslocamentos, aumento da eficiência e a possibilidade de acessar talentos de diferentes localidades geográficas. No entanto, pode apresentar desafios como isolamento social, dificuldade em estabelecer limites entre vida pessoal e profissional, e possíveis distrações em casa. É fundamental adotar estratégias de gestão de tempo e autodisciplina para maximizar a produtividade no ambiente de trabalho remoto.</p>
    </div>
    <div class="imagem2">
        <img src="img/ft1.webp">
    </div>
    <hr>
    <div class="noticia-cat1">
    <h1>Pessoas que trabalham em regime de home office ganham 2,7 vezes mais que a média, diz IBGE</h1>
    <h3>O motivo é porque os trabalhadores remotos costumam ter mais escolaridade e cargos em empresas que pagam melhor.</h3>
    <p>"Um levantamento publicado pelo IBGE nesta quarta-feira (25) mostrou que as pessoas que trabalham em regime de home office foram remuneradas bem acima da média no último ano. O motivo, de acordo com a pesquisa, é porque os trabalhadores remotos costumam ter mais escolaridade e cargos em empresas que pagam melhor."</p>
    <p>"Os números, relacionados ao trabalho remoto de forma geral, indicaram que quem integra este grupo está ganhando quase três vezes mais que a média das pessoas empregadas. Os dados foram extraídos do PNAD (Pesquisa por Amostra de Domicílios).
    A modalidade remota de trabalho, que ganhou força desde o início da pandemia da Covid em 2020, continua sendo bastante utilizada: 9,5 milhões de pessoas trabalharam desta forma em 2022. Destes, quase 7,5 milhões realizam o teletrabalho."</p>
    <a href="https://g1.globo.com/jornal-hoje/noticia/2023/10/25/pessoas-que-trabalham-em-regime-de-home-office-ganham-27-vezes-mais-que-a-media-diz-ibge.ghtml">Leia mais</a>
</div>
<hr>
<div class="explicacao">
    <h2>Para te ajudar a controlar seus gastos com o Home Office, preparamos uma calculadora para te auxiliar nessa jornada!</h2>
    <h3>Para utiliza-la só clicar nesse botão a direita do site</h3>
</div>
    <button class="Btn" onclick="abrirComoAplicacao();">
        <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
        <div class="text">Calcular Gastos</div>
    </button>
    </body>
</html>

<script>
    const scrollToTopButton = document.getElementById("scrollToTopButton");
  
    scrollToTopButton.addEventListener("click", () => {
      // Role suavemente para o topo da página
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
</script>

<script>
    function abrirComoAplicacao() {
    window.open('http://localhost/blog_/calculadora.php', 'Calculadora', 'width=300,height=400,location=no,menubar=no,toolbar=no');
    }
</script>