<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function admin()
    {
        // Ambil semua produk dari tabel products
        $products = Product::all();

        // Kirim ke view dashboard admin
        return view('dashboard.admin', compact('products'));
    }
}
