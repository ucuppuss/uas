<?php $__env->startSection('editId',$item->id); ?>
<?php $__env->startSection('idbuku',$item->idbuku); ?>
<?php $__env->startSection('judulbuku',$item->judulbuku); ?>
<?php $__env->startSection('penulis',$item->penulis); ?>
<?php $__env->startSection('penerbit',$item->penerbit); ?>
<?php $__env->startSection('tahun',$item->tahun); ?>
<?php $__env->startSection('editMethod'); ?>
  <?php echo e(method_field('PUT')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('buku.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>