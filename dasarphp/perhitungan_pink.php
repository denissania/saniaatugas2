<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Aritmatika PHP</title>
    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            background-color: #fff0f6;
            padding: 40px;
            animation: fadeIn 1.2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            color: #d63384;
            text-align: center;
            background-color: #ffe3ec;
            padding: 10px;
            border-radius: 12px;
            box-shadow: 0 0 8px rgba(214, 51, 132, 0.3);
            animation: slideIn 1.5s ease;
        }

        @keyframes slideIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        table {
            margin: 25px auto;
            border-collapse: collapse;
            width: 70%;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(255, 182, 193, 0.5);
            animation: fadeInTable 2s ease;
        }

        @keyframes fadeInTable {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        th, td {
            border: 1px solid #f8a1c4;
            padding: 12px 18px;
            text-align: right;
        }

        th {
            background-color: #ffb6c1;
            color: #fff;
            text-align: center;
            font-size: 16px;
            letter-spacing: 1px;
        }

        tr:nth-child(even) {
            background-color: #ffe6ee;
        }

        .total {
            font-weight: bold;
            background-color: #ffd6e0;
            color: #c2185b;
        }

        td:first-child {
            text-align: left;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        button {
            background-color: #ff99c8;
            border: none;
            color: white;
            padding: 10px 25px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 15px;
            transition: 0.3s;
            box-shadow: 0 3px 6px rgba(255, 105, 180, 0.3);
        }

        button:hover {
            background-color: #ff69b4;
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            color: #c2185b;
            margin-top: 25px;
            font-style: italic;
            animation: fadeIn 2.5s ease;
        }
    </style>
</head>
<body>

<h2>💖 Hasil Perhitungan Aritmatika PHP 💖</h2>

<?php
// Data awal
$pemasukan = 50000000;
$hutangA = 16500000;
$bungaA = 0.05;
$hutangB = 9500000;
$bungaB = 0.045;

// Perhitungan
$bunga_hutangA = $hutangA * $bungaA;
$bunga_hutangB = $hutangB * $bungaB;

$total_bunga = $bunga_hutangA + $bunga_hutangB;
$total_hutang = ($hutangA + $bunga_hutangA) + ($hutangB + $bunga_hutangB);
$sisa_uang = $pemasukan - $total_hutang;
?>

<table>
    <tr>
        <th>Keterangan</th>
        <th>Nilai (Rp)</th>
    </tr>
    <tr>
        <td>Pemasukan</td>
        <td><?= number_format($pemasukan, 0, ',', '.') ?></td>
    </tr>
    <tr>
        <td>Hutang A</td>
        <td><?= number_format($hutangA, 0, ',', '.') ?></td>
    </tr>
    <tr>
        <td>Bunga Hutang A (5%)</td>
        <td><?= number_format($bunga_hutangA, 0, ',', '.') ?></td>
    </tr>
    <tr>
        <td>Hutang B</td>
        <td><?= number_format($hutangB, 0, ',', '.') ?></td>
    </tr>
    <tr>
        <td>Bunga Hutang B (4.5%)</td>
        <td><?= number_format($bunga_hutangB, 0, ',', '.') ?></td>
    </tr>
    <tr class="total">
        <td>Total Bunga Hutang</td>
        <td><?= number_format($total_bunga, 0, ',', '.') ?></td>
    </tr>
    <tr class="total">
        <td>Total Hutang (Pokok + Bunga)</td>
        <td><?= number_format($total_hutang, 0, ',', '.') ?></td>
    </tr>
    <tr class="total">
        <td>Sisa Uang</td>
        <td><?= number_format($sisa_uang, 0, ',', '.') ?></td>
    </tr>
</table>

<div class="btn-container">
    <button onclick="location.reload()">🔄 Hitung Ulang</button>
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})">⬆️ Kembali ke Atas</button>
</div>

<footer>🌸 Dibuat dengan cinta & animasi lembut menggunakan PHP + HTML 🌸</footer>

</body>
</html>