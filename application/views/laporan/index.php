<div class="container-fluid">

<h3 class="mb-4">Laporan Sales Order</h3>

<a
    href="#"
    onclick="window.print()"
    class="btn btn-success mb-3"
>
    Cetak PDF
</a>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>No</th>
            <th>Sales</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>

    <?php
    $no = 1;

    if(!empty($laporan)):
        foreach($laporan as $l):
    ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $l->nama_sales; ?></td>
            <td><?= $l->nama; ?></td>
            <td><?= $l->tanggal; ?></td>
            <td>
                Rp <?= number_format($l->total, 0, ',', '.'); ?>
            </td>
            <td><?= $l->status; ?></td>
        </tr>

    <?php
        endforeach;
    else:
    ?>

        <tr>
            <td colspan="6" class="text-center">
                Data tidak ditemukan
            </td>
        </tr>

    <?php endif; ?>

    </tbody>

</table>

</div>
