<div id="content-wrapper" class="d-flex flex-column">
<div id="content">

<div class="container-fluid">

<h3 class="mb-4">Data Produk</h3>

<a href="<?= site_url('produk/tambah'); ?>" class="btn btn-primary mb-3">
    Tambah Produk
</a>

<table id="tabelProduk" class="table table-bordered table-striped">

    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    <?php $no=1; foreach($produk as $p){ ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $p->kode; ?></td>
            <td><?= $p->nama_produk; ?></td>
            <td><?= $p->harga; ?></td>
            <td><?= $p->stok; ?></td>

            <td>

                <a href="<?= site_url('produk/edit/'.$p->id); ?>"
                class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a href="<?= site_url('produk/hapus/'.$p->id); ?>"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin hapus data?')">
                    Hapus
                </a>

            </td>

        </tr>

    <?php } ?>

    </tbody>

</table>

</div>

</div>
</div>

<script>
$(document).ready(function(){
    $('#tabelProduk').DataTable();
});
</script>