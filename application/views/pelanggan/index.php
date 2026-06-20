<div class="container-fluid">

    <h2 class="mb-4">
        Data Pelanggan
    </h2>


    <a href="<?= site_url('pelanggan/tambah'); ?>"
        class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i>
        Tambah Pelanggan
    </a>

    <div class="card shadow border-0">
        <div class="card-body">

            <table
                id="tabelPelanggan"
                class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($pelanggan as $p):
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>
                                <strong>
                                    <?= $p->nama; ?>
                                </strong>
                            </td>

                            <td>
                                <?= $p->alamat; ?>
                            </td>

                            <td>
                                <?= $p->no_telp; ?>
                            </td>

                            <td>
                                <span
                                    class="badge badge-success">
                                    Aktif
                                </span>
                            </td>

                            <td>
                                <a
                                    href="<?= site_url('pelanggan/edit/' . $p->id); ?>"
                                    class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a
                                    href="<?= site_url('pelanggan/hapus/' . $p->id); ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus data?')">
                                    Hapus
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tabelPelanggan').DataTable();
    });
</script>