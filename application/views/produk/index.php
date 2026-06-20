<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="font-weight-bold text-dark">
                📦 Produk
            </h2>

            <small class="text-muted">
                Kelola seluruh produk yang tersedia
            </small>
        </div>

        <a href="<?= site_url('produk/tambah'); ?>"
            class="btn btn-primary shadow-sm">
            <i class="fas fa-plus"></i>
            Tambah Produk
        </a>

    </div>

    <div class="card border-0 shadow-lg">
        <div class="card-body">
            <table
                id="tabelProduk"
                class="table table-hover align-middle">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Kode</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($produk as $p): ?>
                        <tr>
                            <td>
                                <span class="badge badge-secondary">
                                    <?= $p->kode ?>
                                </span>
                            </td>

                            <td>
                                <strong>
                                    <?= $p->nama_produk ?>
                                </strong>
                            </td>

                            <td>
                                Rp
                                <?= number_format(
                                    $p->harga,
                                    0,
                                    ',',
                                    '.'
                                ); ?>

                            </td>

                            <td>
                                <?php if ($p->stok > 10) { ?>
                                    <span class="badge badge-success">
                                        <?= $p->stok ?>
                                    </span>

                                <?php } elseif ($p->stok > 0) { ?>
                                    <span class="badge badge-warning">
                                        <?= $p->stok ?>
                                    </span>

                                <?php } else { ?>
                                    <span class="badge badge-danger">
                                        Habis
                                    </span>
                                <?php } ?>

                            </td>

                            <td>
                                <?php if ($p->stok > 10) { ?>
                                    <span class="badge badge-success">
                                        Tersedia
                                    </span>

                                <?php } elseif ($p->stok > 0) { ?>
                                    <span class="badge badge-warning">
                                        Menipis
                                    </span>

                                <?php } else { ?>
                                    <span class="badge badge-danger">
                                        Kosong
                                    </span>
                                <?php } ?>
                            </td>

                            <td>
                                <a href="<?= site_url('produk/edit/' . $p->id); ?>"
                                    class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="<?= site_url('produk/hapus/' . $p->id); ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus produk?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<link rel="stylesheet"
    href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {

        $('#tabelProduk').DataTable({

            pageLength: 5,

            language: {
                search: "🔍 Cari : ",
                lengthMenu: "Tampilkan _MENU_ data"
            }

        });

    });
</script>