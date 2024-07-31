<?php
include 'banco.php';

$todos_itens = getAllItems();
print_r($todos_itens);
//addItem("Amendoim", 10);
deleteItem(5);
?>

