<?php

require_once 'DatabaseRepository.php';

$acao = isset($_GET['action']) ? $_GET['action'] : '';

switch ($acao) {
    case 'list':
        echo json_encode(DatabaseRepository::getAllItems());
        break;
    case 'add':
        $data = json_decode(file_get_contents('php://input'), true);
        echo DatabaseRepository::addItem($data['nome_produto'], $data['quantidade']);
        break;
    case 'update':
        $id = $_GET['id'];
        $data = json_decode(file_get_contents('php://input'), true);
        echo DatabaseRepository::updateItem($id, $data['nome_produto'], $data['quantidade'], $data['comprado']);
        break;
    case 'delte':
        $id = $_GET['id'];
        echo DatabaseRepository::deleteItem($id); 
        break;
    default:
        echo json_encode(['error' => 'Acao Invalida']);
}

?>