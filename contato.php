<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contato.css"> <!-- Substitua "seu-estilo.css" pelo nome do seu arquivo CSS -->
    <title>Página de Contato</title>
</head>
<body>


    <?php include_once("header.php"); 
    
    
    ?>
    
    <form class="form" method="POST" action="processar_formulario.php">
        <p class="title">Página de Contato</p>
        <p class="message">Tem alguma pergunta ou comentário? Ficaremos felizes em ouvir de você.</p>
        <div class="flex">
            <label>
                <input required="" placeholder="" type="text" class="input" name="nome">
                <span>Nome</span>
            </label>
    
            <label>
                <input required="" placeholder="" type="text" class="input" name="sobrenome">
                <span>Sobrenome</span>
            </label>
        </div>
    
        <label>
            <input required="" placeholder="" type="email" class="input" name="email">
            <span>Email</span>
        </label>
    
        <label>
            <input required="" placeholder="" type="text" class="input" name="mensagem">
            <span>Mensagem</span>
        </label>
        </div>
    
        <button class="submit">Enviar</button>
    </form>
    
    </body>
    </html>
    
    
    
    
    
    
    
   

    