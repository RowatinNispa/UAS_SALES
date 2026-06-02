<div class="container-fluid">

<h3 class="mb-4">Data Sales</h3>

<a href="<?= site_url('sales/tambah'); ?>"
class="btn btn-primary mb-3">
    Tambah Sales
</a>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama Sales</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    <?php $no=1; foreach($sales as $s){ ?>

    <tr>
        <td><?= $no++; ?></td>

        <td><?= $s->nama_sales; ?></td>

        <td>

            <a href="<?= site_url('sales/edit/'.$s->id_sales); ?>"
            class="btn btn-warning btn-sm">
                Edit
            </a>

            <a href="<?= site_url('sales/hapus/'.$s->id_sales); ?>"
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