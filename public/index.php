<?php
require_once '../controllers/ProductController.php';

$action = $_GET['action'] ?? 'index'; // Default action is 'index'

$productController = new ProductController();

switch ($action) {
    case 'index':
        $productController->index();
        break;
    case 'create':
        $productController->create();
        break;
    case 'store':
        $productController->store();
        break;
    case 'edit':
        $id = $_GET['id'] ?? 0;
        $productController->edit($id);
        break;
    case 'update':
        $id = $_GET['id'] ?? 0;
        $productController->update($id);
        break;
    case 'delete':
        $id = $_GET['id'] ?? 0;
        $productController->delete($id);
        break;
    default:
        echo "Aksi tidak dikenal!";
        break;
}
