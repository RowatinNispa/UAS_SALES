<div id="content-wrapper" class="d-flex flex-column">
<div id="content">

<div class="container-fluid">

<h3 class="mb-4">Data Pelanggan</h3>

<a href="<?= site_url('pelanggan/tambah'); ?>" class="btn btn-primary mb-3">
    Tambah Pelanggan
</a>

<table id="tabelPelanggan" class="table table-bordered table-striped">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No_Telp</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    <?php $no=1; foreach($pelanggan as $p){ ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $p->nama; ?></td>
            <td><?= $p->alamat; ?></td>
            <td><?= $p->no_telp; ?></td>

            <td>

                <a href="<?= site_url('pelanggan/edit/'.$p->id); ?>"
                class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a href="<?= site_url('pelanggan/hapus/'.$p->id); ?>"
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
    $('#tabelPelanggan').DataTable();
});
</script>