 <?php

    require("Template.class.php");

    $tpl = new Template("hello.html");
    
    // Vamos supor que esta quantidade veio do banco de dados
    $quantidade = 5;
    
    // Se existem produtos cadastrados, vamos exibir a quantidade
    if($quantidade > 0){
        $tpl->QUANTIDADE = $quantidade;
        $tpl->block("BLOCK_QUANTIDADE");

    }
    
    // Caso não exista nenhum produto, exibimos a mensagem de vazio
    else {
        $tpl->block("BLOCK_VAZIO");
    }
    
    
    $tpl->show();
    
?> 