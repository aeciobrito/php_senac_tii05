<?php

require_once 'DatabaseRepository.php';
$database = new DatabaseRepository();

$acao = $_GET['acao'];

if($acao == 'listar') {
    echo $database->getAllItems();
} else if($acao == 'adicionar') {
    echo $database->addItem();
} else if($acao == 'atualizar') {
    echo $database->updateItem();
}  else if($acao == 'deletar') {
    echo $database->deleteItem();
} else {
    echo "Ação não implementada";
}

?>