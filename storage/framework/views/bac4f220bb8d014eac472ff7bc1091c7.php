

<?php $__env->startSection('content'); ?>
<h2 class="text-xl font-semibold mb-3">Daftar Laporan</h2>
<table class="w-full border-collapse border border-blue-300">
  <thead>
    <tr class="bg-yellow-200">
      <th class="border px-4 py-2">No</th>
      <th class="border px-4 py-2">Judul</th>
      <th class="border px-4 py-2">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border px-4 py-2">1</td>
      <td class="border px-4 py-2">Masalah KRS</td>
      <td class="border px-4 py-2"><span class="bg-red-500 text-green px-2 py-1 rounded">Baru</span></td>
    </tr>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sistem laporan masalah\resources\views/laporan/index.blade.php ENDPATH**/ ?>