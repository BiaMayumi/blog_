<?php
// Obtém a data atual
$dataAtual = date('d/m/Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sobre.css">
    <title>Sobre Nós</title>
</head>
<body>
    <?php include_once("header.php"); ?>
    
    <div class="container">
        <h1>Sobre Nós</h1>
        <br>        <br>
        
        <p>No mundo em constante evolução em que vivemos, o local de trabalho também está passando por mudanças significativas. O conceito de trabalhar em um escritório tradicional das 9h às 17h está cedendo espaço para uma forma de trabalho mais flexível, que oferece liberdade, autonomia e a oportunidade de criar seu próprio ambiente de trabalho. Bem-vindo ao nosso blog de Home Office, um espaço criado para explorar e celebrar a revolução do trabalho remoto e oferecer a você todas as ferramentas e conhecimentos necessários para ter sucesso nessa jornada.</p>
       
        <!-- Exibindo a data atual -->
        <p>Data atual: <?php echo $dataAtual; ?></p>
    
    </div>
</body>
</html>
