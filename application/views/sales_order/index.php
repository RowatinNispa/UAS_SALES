<div class="container-fluid">

<h3 class="mb-4">Data Sales Order</h3>

<a href="<?= site_url('sales_order/tambah'); ?>"
class="btn btn-primary mb-3">
    Tambah Sales Order
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
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    <?php $no=1; foreach($order as $o){ ?>

    <tr>

        <td><?= $no++; ?></td>

        <td><?= $o->nama_sales; ?></td>

        <td><?= $o->nama; ?></td>

        <td><?= $o->tanggal; ?></td>

        <td>
            Rp <?= number_format($o->total,0,',','.'); ?>
        </td>

        <td><?= $o->status; ?></td>

        <td>

            <a href="<?= site_url('sales_order/edit/'.$o->id_order); ?>"
            class="btn btn-warning btn-sm">
                Edit
            </a>

            <a href="<?= site_url('sales_order/hapus/'.$o->id_order); ?>"
            class="btn btn-danger btn-sm"
            onclick="return confirm('Yakin hapus?')">
                Hapus
            </a>

        </td>

    </tr>

    <?php } ?>

    </tbody>

</table>

</div>