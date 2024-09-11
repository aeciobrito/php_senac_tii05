<?php
// Me conectar ao banco de dados
require_once 'DatabaseRepository.php';

// Buscar todos os itens do banco de dados
$items = DatabaseRepository::getAllItems();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
    <h1>Lista de Comrpas</h1>

    <a href="add_item.php">Adicionar Novo Item</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nome do Produto</th>
                <th>Quantidade</th>
                <th>Comprado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($items as $item): ?>
                <tr>
                    <td><?=  $item['nome_produto'] ?></td>
                    <td><?=  $item['quantidade'] ?></td>
                    <td><?=  $item['comprado'] ? 'Sim' : 'Não' ?></td>
                    <td>
                        <a href="edit_item.php?id=<?= $item['id']; ?>">Editar</a>
                        <a href="delete_item.php?id=<?= $item['id']; ?>">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>