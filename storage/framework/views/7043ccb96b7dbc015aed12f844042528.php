

<?php $__env->startSection('konten'); ?>

<h4>Tambah Program</h4>

<form action="<?php echo e(route('siswa.submit')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <label>Nama Program</label>
    <input type="text" name="nama_program" class="form-control mb-2">
    <label>Kategori</label>
    <input type="text" name="kategori" class="form-control mb-2">
    <label>Informasi</label>
    <input type="text" name="informasi" class="form-control mb-2">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\soccer_line_laravel\resources\views/siswa/tambah.blade.php ENDPATH**/ ?>