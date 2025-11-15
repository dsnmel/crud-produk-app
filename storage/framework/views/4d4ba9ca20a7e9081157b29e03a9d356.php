

<?php $__env->startSection('content'); ?>
<h1>Edit Produk</h1>

<form method="POST" action="<?php echo e(route('products.update', $product->id)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <label>Nama Produk</label>
    <input type="text" name="name" value="<?php echo e($product->name); ?>" required>

    <label>Deskripsi</label>
    <textarea name="description"><?php echo e($product->description); ?></textarea>

    <label>Harga</label>
    <input type="number" step="0.01" name="price" value="<?php echo e($product->price); ?>" required>

    <label>Stok</label>
    <input type="number" name="stock" value="<?php echo e($product->stock); ?>" required>

    <button class="submit-btn">Update</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\lenov\crud-product-app\resources\views/products/edit.blade.php ENDPATH**/ ?>