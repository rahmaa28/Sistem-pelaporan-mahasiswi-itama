

<?php $__env->startSection('content'); ?>
<div class="flex items-center justify-between mb-4">
  <h2 class="text-xl font-semibold">Daftar Mahasiswa</h2>
  <a href="<?php echo e(route('mahasiswa.create')); ?>" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">+ Tambah Mahasiswa</a>
</div>

<?php if (isset($component)) { $__componentOriginal9d684e94d8294933a712f81f8101e557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d684e94d8294933a712f81f8101e557 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert-success','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d684e94d8294933a712f81f8101e557)): ?>
<?php $attributes = $__attributesOriginal9d684e94d8294933a712f81f8101e557; ?>
<?php unset($__attributesOriginal9d684e94d8294933a712f81f8101e557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d684e94d8294933a712f81f8101e557)): ?>
<?php $component = $__componentOriginal9d684e94d8294933a712f81f8101e557; ?>
<?php unset($__componentOriginal9d684e94d8294933a712f81f8101e557); ?>
<?php endif; ?>

<table class="w-full border-collapse bg-white rounded shadow">
  <thead>
    <tr class="bg-gray-100 text-left">
      <th class="px-4 py-2 border">#</th>
      <th class="px-4 py-2 border">Nama</th>
      <th class="px-4 py-2 border">NIM</th>
      <th class="px-4 py-2 border">Email</th>
      <th class="px-4 py-2 border">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td class="px-4 py-2 border"><?php echo e($mahasiswas->firstItem() + $index); ?></td>
        <td class="px-4 py-2 border"><?php echo e($mahasiswa->nama); ?></td>
        <td class="px-4 py-2 border"><?php echo e($mahasiswa->nim); ?></td>
        <td class="px-4 py-2 border"><?php echo e($mahasiswa->email); ?></td>
        <td class="px-4 py-2 border">
          <a href="<?php echo e(route('mahasiswa.show', $mahasiswa)); ?>" class="text-blue-700 hover:underline">Lihat</a>
          <a href="<?php echo e(route('mahasiswa.edit', $mahasiswa)); ?>" class="ml-3 text-yellow-600 hover:underline">Edit</a>
          <form action="<?php echo e(route('mahasiswa.destroy', $mahasiswa)); ?>" method="POST" class="inline-block ml-3" onsubmit="return confirm('Yakin hapus data?')">
            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
          </form>
        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <tr><td colspan="5" class="px-4 py-6 border text-center text-gray-500">Belum ada data</td></tr>
    <?php endif; ?>
  </tbody>
</table>

<div class="mt-4">
  <?php echo e($mahasiswas->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sistem laporan masalah\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>