<?php
require_once 'models/DatabaseRepository.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete_id'])) {
        DatabaseRepository::deleteItem($_POST['delete_id']);
    } elseif (isset($_POST['toggle_id'])) {
        $item = DatabaseRepository::getItemById($_POST['toggle_id']);
        $new_comprado = $item['comprado'] ? 0 : 1;
        DatabaseRepository::updateItem($_POST['toggle_id'], $new_comprado);
    } elseif (isset($_POST['nome_produto']) && isset($_POST['quantidade'])) {
        DatabaseRepository::addItem($_POST['nome_produto'], $_POST['quantidade']);
    }
    header('Location: index.php');
    exit;
}

$items = DatabaseRepository::getAllItems();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Lista de Compras</h1>

    <form action="index.php" method="post">
        <label for="nome_produto">Nome do Produto</label>
        <input type="text" name="nome_produto" id="nome_produto" required>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>
        <button type="submit">Adicionar Item</button>
    </form>

    <h2>Itens a Comprar</h2>
    <ul>
        <?php foreach ($items as $item): ?>
            <?php if (!$item['comprado']): ?>
                <li>
                    <?= $item['nome_produto'] ?> (<?= $item['quantidade'] ?>)
                    <div>
                        <form action="index.php" method="post">
                            <input type="hidden" name="toggle_id" value="<?= $item['id'] ?>">
                            <button type="submit">Marcar como Comprado</button>
                        </form>
                        <form action="index.php" method="post">
                            <input type="hidden" name="delete_id" value="<?= $item['id'] ?>">
                            <button type="submit" class="delete">Deletar</button>
                        </form>
                    </div>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h2>Itens Comprados</h2>
    <ul>
        <?php foreach ($items as $item): ?>
            <?php if ($item['comprado']): ?>
                <li class="comprado">
                    <?= htmlspecialchars($item['nome_produto']) ?> (<?= htmlspecialchars($item['quantidade']) ?>)
                    <div>
                        <form action="index.php" method="post">
                            <input type="hidden" name="toggle_id" value="<?= $item['id'] ?>">
                            <button type="submit">Desmarcar</button>
                        </form>
                        <form action="index.php" method="post">
                            <input type="hidden" name="delete_id" value="<?= $item['id'] ?>">
                            <button type="submit" class="delete">Deletar</button>
                        </form>
                    </div>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

</body>

</html>