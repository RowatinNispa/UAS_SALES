<!DOCTYPE html>
<html>
<head>
    <title>Laporan Produk</title>

    <style>
        @page {
        size: A4;
        margin: 15mm;
    }
    </style>

    <style>
        body{
        font-family: Arial, sans-serif;
        font-size: 16px;
        margin: 20px;
      }

    h2{
        text-align: center;
        margin-bottom: 20px;
    }

    table{
        width: 100%;
        border-collapse: collapse;
        font-size: 16px;
    }

    table, th, td{
        border: 1px solid black;
    }

    th, td{
        padding: 12px;
        text-align: center;
    }

    th{
        background: #f2f2f2;
    }
    </style>
</head>

<body onload="window.print()">

<h2 align="center">
    Laporan Penjualan Produk
</h2>

<table>

<thead>
<tr>
    <th>No</th>
    <th>Produk</th>
    <th>Jumlah Terjual</th>
    <th>Total Penjualan</th>
</tr>
</thead>

<tbody>

<?php
$no=1;
foreach($produk as $p):
?>

<tr>

<td><?= $no++; ?></td>

<td><?= $p->nama_produk; ?></td>

<td><?= $p->jumlah_terjual; ?></td>

<td>
Rp <?= number_format(
    $p->total_penjualan,
    0,
    ',',
    '.'
); ?>
</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>
<br><br>
    <div align="right">
        Tangerang,
        <?= date('d-m-Y'); ?>
        <br><br><br>
        Admin
    </div>
</body>
</html>