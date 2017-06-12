<?php $__env->startSection('body'); ?>

  <br>
  <a class="btn btn-info" href="/buku">Back</a>
  <div class="col-lg-6 col-lg-offset-3">
    <center><h1><?php echo e(substr(Route::currentRouteName(),5)); ?> New Item</h1></center>
  <form class="form-horizontal" action="/buku/<?php echo $__env->yieldContent('editId'); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <?php $__env->startSection('editMethod'); ?>
    <?php echo $__env->yieldSection(); ?>
  <fieldset>
    <div class="form-group">

      <div class="col-lg-8 col-lg-offset-2">
        <input type="text" class="form-control" name="idbuku" placeholder="idbuku" value="<?php echo $__env->yieldContent('idbuku'); ?>"> <br>
        <input type="text" class="form-control" name="judulbuku" placeholder="judulbuku" value="<?php echo $__env->yieldContent('judulbuku'); ?>"><br>
        <input type="text" class="form-control" name="penulis" placeholder="penulis" value="<?php echo $__env->yieldContent('penulis'); ?>"><br>
        <input type="text" class="form-control" name="penerbit" placeholder="penerbit" value="<?php echo $__env->yieldContent('penerbit'); ?>"><br>
        <input type="text" class="form-control" name="tahun" placeholder="tahun" value="<?php echo $__env->yieldContent('tahun'); ?>"><br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>