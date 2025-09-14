<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/create.css') }}">

    <div class="form-wrapper">
        <div class="form-card">
            <h3 class="form-title">Form Tambah Produk</h3>
            <form action="{{ route('admin.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Produk</label>
                    <input type="text" name="name" id="name" placeholder="Masukkan nama produk">
                </div>

                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" name="price" id="price" placeholder="Masukkan harga produk">
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" rows="4" placeholder="Tulis deskripsi produk"></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Gambar Produk</label>
                    <input type="file" name="image" id="image">
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-submit">Simpan</button>
                    <a href="{{ route('dashboard.admin') }}" class="btn-cancel">Batal</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
