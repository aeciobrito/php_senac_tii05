<?php
require_once 'DatabaseRepository.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    DatabaseRepository::addItem($nome, $quantidade);
    header('Location: lista_items.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Item</title>
</head>
<body>
    <h1>Adicionar Item à Lista de Compras</h1>

    <form action="add_item.php" method="post">
        <label for="nome_produto">Nome do Produto:</label>
        <input type="text" name="nome_produto" id="nome_produto" required>
        <br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>
        <br>
        <button type="submit">Adicionar</button>
    </form>
    <a href="lista_items.php">Voltar para a lista de compras</a>
</body>
</html>

