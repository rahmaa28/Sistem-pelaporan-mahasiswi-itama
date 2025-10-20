@extends('layouts.app')

@section('content')
<h2 class="text-xl font-semibold mb-4">Tambah Mahasiswa</h2>

@if ($errors->any())
  <div class="mb-4 rounded border border-red-200 bg-red-50 p-3 text-red-700">
    <ul class="list-disc pl-5">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('mahasiswa.store') }}" method="POST" class="bg-white p-4 rounded shadow max-w-xl">
  @csrf
  <div class="mb-3">
    <label class="block mb-1">Nama</label>
    <input type="text" name="nama" value="{{ old('nama') }}" class="w-full border rounded px-3 py-2" required>
  </div>

  <div class="mb-3">
    <label class="block mb-1">NIM</label>
    <input type="text" name="nim" value="{{ old('nim') }}" class="w-full border rounded px-3 py-2" required>
  </div>

  <div class="mb-4">
    <label class="block mb-1">Email</label>
    <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded px-3 py-2" required>
  </div>

  <div class="flex items-center gap-2">
    <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Simpan</button>
    <a href="{{ route('mahasiswa.index') }}" class="px-4 py-2 rounded border hover:bg-gray-50">Batal</a>
  </div>
</form>
@endsection