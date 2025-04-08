@extends('layouts.app')

@section('content')
    <div class="flex justify-end mb-4">
        <a href="{{ route('pengurus.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Pengurus</a>
    </div>

    <table class="min-w-full bg-white border border-gray-300 rounded shadow">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="py-2 px-4">Nama</th>
                <th class="py-2 px-4">Divisi</th>
                <th class="py-2 px-4">Jabatan</th>
                <th class="py-2 px-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengurus as $item)
                <tr class="border-t">
                    <td class="py-2 px-4">{{ $item->nama }}</td>
                    <td class="py-2 px-4">{{ $item->divisi }}</td>
                    <td class="py-2 px-4">{{ $item->jabatan }}</td>
                    <td class="py-2 px-4 flex gap-2">
                        <a href="{{ route('pengurus.edit', $item->id) }}" class="bg-yellow-400 text-white px-2 py-1 rounded hover:bg-yellow-500">Edit</a>
                        <form action="{{ route('pengurus.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
