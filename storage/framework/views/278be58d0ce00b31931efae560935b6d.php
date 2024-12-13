

<?php $__env->startSection('konten'); ?>

<h4>Edit Program</h4>

<form action="<?php echo e(route('siswa.update', $siswa->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <label>Nama Program</label>
    <input type="text" name="nama_program" value="<?php echo e($siswa->nama_program); ?>" class="form-control mb-2">
    <label>Kategori</label>
    <input type="text" name="kategori" value="<?php echo e($siswa->kategori); ?>"  class="form-control mb-2">
    <label>Informasi</label>
    <input type="text" name="informasi" value="<?php echo e($siswa->informasi); ?>"  class="form-control mb-2">
    <label>Harga</label>
    <input type="text" name="harga" value="<?php echo e($siswa->harga); ?>"  class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\soccer_line_laravel\resources\views/siswa/edit.blade.php ENDPATH**/ ?>