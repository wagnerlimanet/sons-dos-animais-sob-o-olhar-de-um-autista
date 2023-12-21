<!-- 
    » Wagner Lima | www.wagnerlima.net | @wagnerlimaNET «
    Professor de desenvolvimento web e design na escola iwtraining, especialista em mecanismos de
    buscas (SEO) e graduando em Sistemas e Mídias Digitais na Universidade Federal do Ceará (UFC).
-->
<?
    // início do e-mail destinatário //
    $destinatario = "soboolhardeumautista@wagnerlima.net";
    // fim do e-mail destinatário //

    // início dos requests (chamadas do form) //
    $nome = $_REQUEST['nome'];
    $idade = $_REQUEST['idade'];
    $estado = $_REQUEST['estado'];
    $email = "ideias@wagnerlima.net";
    $mensagem = $_REQUEST['mensagem'];
    $assunto = "CADASTRO (SOM DOS ANIMAIS)";
    // fim dos requests (chamadas do form) //

    // início do corpo do e-mail //
    $body = "Me chamo " . $nome . ", tenho " . $idade . " anos e moro no " . $estado . "." . "\n";
    $body = $body . "" . "\n";
    $body = $body . "===================================" . "\n";
    $body = $body . "Nome: " . $nome . ";" . "\n";
    $body = $body . "Idade: " . $idade . " anos;" . "\n";
    $body = $body . "Estado: " .$estado . "." . "\n";
    $body = $body . "===================================" . "\n";
    // fim do corpo do e-mail //

    // início da variável global email com destinatário, assunto e nome //
    mail($destinatario, $assunto , $body, "From: $nome\r\n");
    // fim da variável global email com destinatário, assunto e nome //

    // início da chamada para a página de sucesso (página de resposta) //    
    header( "Location: https://wagnerlima.net/projetos/soboolhardeumautista/sons-dos-animais" );
    // fim da chamada para a página de sucesso (página de resposta) //
?>
