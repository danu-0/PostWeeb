<?php
session_start();

// Ambil informasi keranjang
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $totalItems = 0;
    $totalPrice = 0;
    
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $productId => $quantity) {
            // Di sini Anda bisa mengambil informasi produk dari database berdasarkan $productId jika diperlukan
            
            // Contoh perhitungan harga total sementara
            $totalItems += $quantity;
            // Contoh perhitungan harga total sementara
            $totalPrice += 10000 * $quantity; // Ganti dengan perhitungan harga aktual
        }
    }
    
    // Kirim respons JSON dengan informasi keranjang
    header('Content-Type: application/json');
    echo json_encode([
        'totalItems' => $totalItems,
        'totalPrice' => number_format($totalPrice, 0, ',', '.') // Ubah format harga sesuai kebutuhan
    ]);
} else {
    // Jika metode request bukan GET
    http_response_code(400);
}
?>
