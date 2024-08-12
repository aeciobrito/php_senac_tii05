<?php
include 'banco.php';

$todos_itens = getAllItems();
echo "<pre>";
print_r($todos_itens);
echo "</pre>";

// Adição de um novo item
if(addItem("Chá", 5)) {
    echo "Adição do item deu certo!<br>";
}

// Atualizando um item
if(updateItem(6, true)) {
    echo "Item com id 6 atualizado com sucesso!<br>";
} else {
    echo "Item com id 6 não foi atualizado ou encontrado!<br>";
}

// Excluindo um item
if(deleteItem(6)) {
    echo "Item com ID 6 foi excluido com sucesso!<br>";
} else {
    echo "Item com id 6 não foi deletado ou encontrado!<br>";
}

// Exibir todos os itens pós alteração
$todos_itens = getAllItems();
echo "<h2>Itens pós alteração</h2>";
echo "<pre>";
print_r($todos_itens);
echo "</pre>";
?>

