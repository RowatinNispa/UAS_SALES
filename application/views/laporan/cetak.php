<!DOCTYPE html>
<html>

<head>

    <title>Cetak Laporan</title>

    <style>
        body {
            font-family: Arial;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
        }

        h2 {
            text-align: center;
        }
    </style>

</head>

<body onload="window.print()">

    <h2>
        LAPORAN SALES ORDER
    </h2>

    <table>
        <tr>
            <th>No</th>
            <th>Sales</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Status</th>
        </tr>

        <?php
        $no = 1;
        foreach ($laporan as $l):
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $l->nama_sales; ?></td>
                <td><?= $l->nama; ?></td>
                <td><?= $l->tanggal; ?></td>
                <td class="text-center">
                    <?= number_format(
                        $l->total,
                        0,
                        ',',
                        '.'
                    ); ?>
                </td>

                <td><?= $l->status; ?></td>
            </tr>
        <?php endforeach; ?>
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