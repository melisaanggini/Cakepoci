<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashadmin.css') }}">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>🍰 Cakepoci</h2>
        <nav>
            <a href="{{ route('dashboard.admin') }}">🏠 Dashboard</a>
            <!-- <a href="{{ route('admin.create') }}">➕ Tambah Produk</a> -->
            <a href="{{ route('logout') }}">🚪 Logout</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main">
        <header>
            <h1>Admin Dashboard</h1>
        </header>

        {{-- Notifikasi sukses --}}
        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif

        {{-- Card CRUD Produk --}}
        <div class="card">
            <h2>Kelola Produk</h2>
            <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah Produk</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{ $product->stock }}</td>
                        <td class="actions">
                            <a href="{{ route('admin.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus produk ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Belum ada produk</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</body>
</html>
