<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Data Produk</h2>
        <a href="../../public/index.php?action=create" class="btn btn-primary">Tambah Produk</a>
    </div>

    <table id="productTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Total</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= htmlspecialchars($product['name']) ?></td>
                        <td>Rp<?= number_format($product['price'], 0, ',', '.') ?></td>
                        <td><?= $product['stock'] ?></td>
                        <td>Rp<?= number_format($product['price'] * $product['stock'], 0, ',', '.') ?></td>
                        <td><?= $product['category_name'] ?? 'Tanpa Kategori' ?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?= $product['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="index.php?action=delete&id=<?= $product['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau hapus produk ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
