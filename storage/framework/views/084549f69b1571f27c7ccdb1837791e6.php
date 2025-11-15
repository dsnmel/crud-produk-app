

<?php $__env->startSection('content'); ?>
<h1>Tambah Produk</h1>

<form method="POST" action="<?php echo e(route('products.store')); ?>">
    <?php echo csrf_field(); ?>

    <label>Nama Produk</label>
    <input type="text" name="name" required>

    <label>Deskripsi</label>
    <textarea name="description"></textarea>

    <label>Harga</label>
    <input type="number" step="0.01" name="price" required>

    <label>Stok</label>
    <input type="number" name="stock" value="0" required>

    <button class="submit-btn">Simpan</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\lenov\crud-product-app\resources\views/products/create.blade.php ENDPATH**/ ?>