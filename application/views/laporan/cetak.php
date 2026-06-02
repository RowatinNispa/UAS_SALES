<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Sales Order</title>

    <style>
        body{font-family: Arial;}
        h3{text-align: center;}

        table{
            width:100%;
            border-collapse: collapse;
        }

        table, th, td{
            border: 1px solid black;
        }

        th, td{
            padding: 8px;
            text-align: center;
        }

        @media print{
            button {display: none;}
        }
    </style>
</head>

<body>

    <h3>LAPORAN SALES ORDER</h3>

    <?php if($awal && $akhir): ?>
        <p>
            Periode: <?= $awal; ?> s/d <?= $akhir; ?>
        </p>
    <?php endif; ?>

    <table>

        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Pelanggan</th>
            <th>Sales</th>
            <th>Total</th>
            <th>Status</th>
        </tr>

        <?php $no = 1; foreach($data as $d): ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->tanggal; ?></td>
            <td><?= $d->nama_pelanggan; ?></td>
            <td><?= $d->username; ?></td>
            <td><?= number_format($d->total,0,',','.'); ?></td>
            <td><?= $d->status; ?></td>
        </tr>

        <?php endforeach; ?>

    </table>

    <br><br>

    <p style="text-align:right;">
        Tangerang, <?= date('d-m-Y'); ?><br><br><br>
        (Admin)
    </p>

    <script>
        window.print();
    </script>

</body>
</html>