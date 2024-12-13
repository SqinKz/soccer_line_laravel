

<?php $__env->startSection('konten'); ?>

<div class="d-flex">
    <h4>Menu Program</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="<?php echo e(route('siswa.tambah')); ?>">Tambah Program</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Program</th>
        <th>Kategori</th>
        <th>Informasi</th>
        <th>Harga</th>
    </tr>
    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($no+1); ?></td>
        <td><?php echo e($data->nama_program); ?></td>
        <td><?php echo e($data->kategori); ?></td>
        <td><?php echo e($data->informasi); ?></td>
        <td><?php echo e($data->harga); ?></td>
        <td>
            <a href="<?php echo e(route('siswa.edit', $data->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
            <form action="<?php echo e(route('siswa.delete', $data->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\soccer_line_laravel\resources\views/siswa/tampil.blade.php ENDPATH**/ ?>