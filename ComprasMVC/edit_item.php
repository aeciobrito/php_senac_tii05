<?php
require_once 'DatabaseRepository.php';

$id = $_GET['id'];
$item = DatabaseRepository::getItemById($id);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comprado = isset($_POST['comprado']) ? 1 : 0;
    
    DatabaseRepository::comprarItem($id, $comprado);
    header('Location: lista_items.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Item</title>
</head>
<body>
    <h1>Editar Item</h1>

    <form action="edit_item.php?id=<?= $id; ?>" method="post">
        <p>Produto: <?= $item['nome_produto'] ?></p>
        <p>Quantidade: <?= $item['quantidade'] ?></p>
        <label for="comprado">Comprado:</label>
        <input type="checkbox" name="comprado" id="comprado" <?= $item['comprado'] ? 'checked' : ''; ?>>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>