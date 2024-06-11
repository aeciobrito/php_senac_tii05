<?php
    # 1
    // Crie uma variável para nome e outra para profissão
    // Escreva a mensagem "Fulano é tal_profissao"
    $nome = "Ana";
    $profissao = "Programadora";
    $mensagem = $nome . " é "  . $profissao;
    echo $mensagem;
    echo "<br>";

    # 2
    // Crie uma variável senha e aramezene "senha123"
    // Verifique se a senha tem mais de 8 caracteres
    // Se sim, diga que a senha é válida. Se não, diga que é inválida
    $senha = "senha123";
    //$totalCaracteres = strlen($senha);
    $valida = strlen($senha) > 8;

    if($valida) {
        echo "Senha é válida!";
    } else {
        echo "Senha é inválida";
    }
    echo "<br>";

    # 3
    // Corrija a palavra "ExEmPlO" para que ela fique totalmente em minúsculo
    $palavra = "ExEmPlO";
    $palavra_minusculo = strtolower($palavra);
    echo $palavra_minusculo;
    echo "<br>";
    # 4
    // Corrija o link "  http://exemplo.com  " para que ele não tenha espaços inválidos
    $urlAlterada = trim("  http://exemplo.com  ");
    echo $urlAlterada;
    echo "<br>";

    # 5
    // Inverta a string "abcd123" e encontre a posição do caractere "3" após a inversão
    $stringOriginal = "abcd123";
    $stringInvertida = strrev($stringOriginal);
    echo strpos($stringInvertida, "3");
?>