<?php
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../models/Category.php';

class ProductController {
    private $productModel;
    private $categoryModel;

    public function __construct() {
        $this->productModel = new Product();
        $this->categoryModel = new Category();
    }

    public function index() {
        // Ambil semua produk dan kategorinya
        $products = $this->productModel->getAll();
        
        // Jika produk kosong atau query gagal, debug dan periksa
        if (!$products) {
            die('Data produk tidak ada atau gagal mengambil data.');
        }
    
        // Kirim data ke view
        include __DIR__ . '/../views/products/index.php';
    }
    

    public function create() {
        $categories = $this->categoryModel->getAll();
        include __DIR__ . '/../views/products/create.php';
    }

    public function store() {
        $data = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'stock' => $_POST['stock'],
            'category_id' => $_POST['category_id']
        ];
        $this->productModel->create($data);
        header("Location: index.php");
        exit;
    }

    public function edit($id) {
        $product = $this->productModel->getById($id);
        $categories = $this->categoryModel->getAll();
        include __DIR__ . '/../views/products/edit.php';
    }

    public function update($id) {
        $data = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'stock' => $_POST['stock'],
            'category_id' => $_POST['category_id']
        ];
        $this->productModel->update($id, $data);
        header("Location: index.php");
        exit;
    }

    public function delete($id) {
        $this->productModel->delete($id);
        header("Location: index.php");
        exit;
    }
}
