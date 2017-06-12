<?php $__env->startSection('body'); ?>
  <br>
  <a href="/buku/create" class="btn btn-info">Add New</a>
  <div class="col-lg-8 col-lg-offset-2">
    <center><h1>Daftar Buku</h1></center>
  <table class="table table-striped table-hover ">
    <thead>
    <tr>
      <th>ID Buku</th>
      <th>Judul Buku</th>
      <th>Penulis</th>
      <th>Penerbit</th>
      <th>Tahun</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
      <td><?php echo e($key->idbuku); ?></td>
      <td><?php echo e($key->judulbuku); ?></td>
      <td><?php echo e($key->penulis); ?></td>
      <td><?php echo e($key->penerbit); ?></td>
      <td><?php echo e($key->tahun); ?></td>
      <td><a href="<?php echo e('/buku/'.$key->id.'/edit/'); ?>">Edit</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <tbody>
  <table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>