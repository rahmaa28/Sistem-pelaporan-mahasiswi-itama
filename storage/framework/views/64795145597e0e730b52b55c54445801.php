

<?php $__env->startSection('content'); ?>
<h2 class="text-xl font-semibold mb-4">Edit Mahasiswa</h2>

<?php if($errors->any()): ?>
  <div class="mb-4 rounded border border-red-200 bg-red-50 p-3 text-red-700">
    <ul class="list-disc pl-5">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
<?php endif; ?>

<form action="<?php echo e(route('mahasiswa.update', $mahasiswa)); ?>" method="POST" class="bg-white p-4 rounded shadow max-w-xl">
  <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
  <div class="mb-3">
    <label class="block mb-1">Nama</label>
    <input type="text" name="nama" value="<?php echo e(old('nama', $mahasiswa->nama)); ?>" class="w-full border rounded px-3 py-2" required>
  </div>

  <div class="mb-3">
    <label class="block mb-1">NIM</label>
    <input type="text" name="nim" value="<?php echo e(old('nim', $mahasiswa->nim)); ?>" class="w-full border rounded px-3 py-2" required>
  </div>

  <div class="mb-4">
    <label class="block mb-1">Email</label>
    <input type="email" name="email" value="<?php echo e(old('email', $mahasiswa->email)); ?>" class="w-full border rounded px-3 py-2" required>
  </div>

  <div class="flex items-center gap-2">
    <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Update</button>
    <a href="<?php echo e(route('mahasiswa.index')); ?>" class="px-4 py-2 rounded border hover:bg-gray-50">Batal</a>
  </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sistem laporan masalah\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>