@extends('layouts.app')

@section('content')
    <form action="{{ route('pengurus.update', $pengurus->id) }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block font-bold">Nama</label>
            <input type="text" name="nama" value="{{ $pengurus->nama }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block font-bold">Divisi</label>
            <input type="text" name="divisi" value="{{ $pengurus->divisi }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block font-bold">Jabatan</label>
            <input type="text" name="jabatan" value="{{ $pengurus->jabatan }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="flex justify-end gap-2">
            <a href="{{ route('pengurus.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded">Batal</a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
        </div>
    </form>
@endsection
