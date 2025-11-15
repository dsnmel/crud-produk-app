

<?php $__env->startSection('content'); ?>
<h1>Daftar Produk</h1>

<a href="<?php echo e(route('products.create')); ?>" class="button">+ Tambah Produk</a>

<table>
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($product->name); ?></td>
        <td>Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></td>
        <td><?php echo e($product->stock); ?></td>
        <td class="action-buttons">
            <a href="<?php echo e(route('products.edit', $product->id)); ?>">Edit</a>

            <form action="<?php echo e(route('products.destroy', $product->id)); ?>" 
                  method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="delete" onclick="return confirm('Hapus produk?')">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\lenov\crud-product-app\resources\views/products/index.blade.php ENDPATH**/ ?>