<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Substitua "seu-estilo.css" pelo nome do seu arquivo CSS -->
    <title>Página de Contato</title>
</head>
<body>


    <?php include_once("templates/header.php"); ?>
<form class="form">
    <p class="title">Pagina de contato </p>
    <p class="message">Tem alguma pergunta ou comentário? Ficaremos felizes em ouvir de você. </p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input">
            <span>Nome</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input">
            <span>Sobrenome</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" class="input">
        <span>Email</span>
    </label> 

    <label>
            <input required="" placeholder="" type="text" class="input">
            <span>Mensagem</span>
        </label>
    </div> 
        
   
    <button class="submit">Submit</button>
 
</form>