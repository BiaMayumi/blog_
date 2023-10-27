<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="5ppontos.css">
    
</head>
<body>
    <?php include_once("header.php"); ?>
    <h1>5 pontos positivos e negativos de trabalhar em Home Office</h1>
    <h3>Trabalhar em regime de home office oferece diversos benefícios tanto para os funcionários quanto para as empresas. Aqui estão cinco vantagens desse modelo de trabalho:
</h3>
    <div class="homeoffice">
    <p>1. Flexibilidade no horário: Trabalhar em casa permite que os funcionários tenham mais controle sobre seu horário. Eles podem adaptar as horas de trabalho de acordo com suas necessidades pessoais, o que pode resultar em uma melhor conciliação entre trabalho e vida pessoal.<br>
    2. Redução do tempo de deslocamento: Ao eliminar a necessidade de se deslocar até o local de trabalho, os funcionários economizam tempo que poderia ser utilizado de maneira mais produtiva. Além disso, isso também pode reduzir os níveis de estresse associados ao trânsito e aos deslocamentos diários.<br>
    3. Aumento da produtividade: Para muitos funcionários, trabalhar em um ambiente familiar e confortável pode resultar em maior produtividade. A ausência de distrações comuns em ambientes de escritório, como conversas de colegas de trabalho ou reuniões improdutivas, pode levar a uma maior eficiência.<br>
    4. Economia de custos: Tanto os funcionários quanto as empresas podem economizar dinheiro com o trabalho remoto. Os funcionários gastam menos em deslocamento, alimentação fora de casa e roupas formais. Por outro lado, as empresas podem reduzir os custos associados ao espaço físico do escritório.<br>
    5. Acesso a um talento mais amplo: Com o home office, as empresas podem contratar talentos de todo o mundo, sem se limitar a uma localização geográfica específica. Isso pode resultar em uma equipe mais diversificada e com habilidades complementares, o que pode ser benéfico para o crescimento e inovação da empresa.
</p> 
    </div><br>
    <div class="imagem">
        <img src="img/ft3.webp">
    </div>
    <hr>
    <div class="homeoffice2">
        <p>1. Isolamento e falta de interação social: Trabalhar em casa pode levar a um maior isolamento social, especialmente para pessoas que vivem sozinhas. A falta de interação face a face com colegas de trabalho pode resultar em sentimentos de solidão e isolamento.<br>
        2. Dificuldade em estabelecer limites entre trabalho e vida pessoal: Em um ambiente de home office, pode ser mais desafiador definir e manter limites claros entre o tempo dedicado ao trabalho e o tempo para atividades pessoais. Isso pode levar a uma sobrecarga de trabalho e impactar negativamente a saúde mental.<br>
        3. Possíveis distrações em casa: O ambiente doméstico pode conter diversas distrações, como tarefas domésticas, familiares, animais de estimação, entre outras. Essas distrações podem prejudicar a produtividade e a qualidade do trabalho.<br>
        4. Dificuldade em manter a comunicação e colaboração eficientes: A comunicação e colaboração podem ser mais desafiadoras em um ambiente remoto, especialmente para equipes grandes ou projetos que requerem uma colaboração intensa. A dependência de ferramentas de comunicação online pode, em alguns casos, ser menos eficaz do que a interação cara a cara.<br>
        5. falta de supervisão e responsabilidade: Alguns funcionários podem sentir falta da supervisão direta e do senso de responsabilidade que vêm com um ambiente de escritório tradicional. Isso pode levar a uma sensação de falta de direção e, em alguns casos, a uma redução da produtividade.

</p>
    </div>
    <div class="imagem2">
        <img src="img/ft4.jpeg">
    </div>
    <br><br><br><br><br><br>
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