# manajemen_data_produk

Repository ini dibuat untuk menyelesaikan Quiz 1 Pemrograman Web II dengan soal sebagai berikut:

Kasus: Kembangkan aplikasi manajemen data produk. Aplikasi harus mendukung operasi CRUD pada data produk. Gunakan PDO untuk koneksi database, Bootstrap untuk desain antarmuka, dan DataTables untuk menampilkan data produk.

Struktur Tabel
Tabel categories:
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL
);
Tabel products:
CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
