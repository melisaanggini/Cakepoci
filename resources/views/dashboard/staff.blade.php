<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Staff Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashstaff.css') }}">
</head>
<body>
    <header>Staff Dashboard - Cakepoci</header>
    <div class="container">
        <h2>Daftar Pesanan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Produk</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#001</td>
                    <td>Budi</td>
                    <td>Brownies</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>#002</td>
                    <td>Siti</td>
                    <td>Cheesecake</td>
                    <td>Selesai</td>
                </tr>
            </tbody>
        </table>
        <button>Proses Pesanan</button>
    </div>
</body>
</html>
