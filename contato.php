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
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];
    
        // Aqui você pode adicionar a lógica para processar os dados, enviar e-mails, salvar no banco de dados, etc.
    
        // Exemplo de exibição de mensagem de sucesso
        echo "Obrigado por entrar em contato, $nome $sobrenome! Sua mensagem foi enviada com sucesso para $email.";
    }
    
    ?>
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
        
   
    <button class="submit">Enviar</button>
 
</form>


