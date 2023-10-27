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
    <h1>Estratégias para dominar o trabalho remoto</h1>
    <h3>As melhores estratégia para seu Home Office! Venha descobrir!</h3>
    <div class="homeoffice">
    <p>Ter estratégias de trabalho é de extrema importância, pois auxilia na produtividade, comunicação, equilíbrio entre o trabalho e a vida pessoal, saúde mental e bem-estar, economia de recursos, adaptação ao mundo digital e assim por diante. Ter estratégias para o trabalho remoto é importante para garantir que as operações de negócios continuem a funcionar sem problemas, que os funcionários se mantenham motivados e saudáveis, e que as empresas estejam preparadas para as demandas do ambiente de trabalho em constante evolução.</p> 
    </div><br>
    <div class="imagem">
        <img src="img/c3.jpeg">
    </div>
    <hr>
    <div class="homeoffice2">
        <p>Dominar o trabalho remoto requer a adoção de várias estratégias para manter a produtividade, a comunicação eficaz e o equilíbrio entre trabalho e vida pessoal. Aqui estão algumas dicas para ajudá-lo a ter sucesso no trabalho remoto! <br>

Estabeleça um espaço de trabalho dedicado, crie um ambiente de trabalho separado em sua casa, longe de distrações, onde você possa se concentrar nas tarefas. Isso ajuda a separar o trabalho da vida pessoal. <br>

Defina uma rotina, mantenha uma programação consistente, com horários regulares de trabalho, pausas e momentos de desconexão. Isso ajuda a manter a disciplina e a previsibilidade. <br>

Estabeleça limites, defina limites claros entre o trabalho e a vida pessoal. Desligue-se do trabalho quando terminar o expediente para evitar a sensação de estar "sempre ligado".
<a href="https://santodigital.com.br/saiba-quais-estrategias-adotar-para-implementar-o-trabalho-remoto-na-sua-empresa/">Leia mais</a>

</p>
    </div>
    <div class="imagem2">
        <img src="img/ft4.j.jpeg">
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