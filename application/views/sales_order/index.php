<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="font-weight-bold">
                🛒 Data Sales Order
            </h2>

            <small class="text-muted">
                Kelola transaksi penjualan
            </small>
        </div>

        <a href="<?= site_url('sales_order/tambah'); ?>"
            class="btn btn-primary">

            <i class="fas fa-plus"></i>
            Tambah Order

        </a>

    </div>

    <div class="row mb-4">

        <div class="col-md-3">

            <div class="card shadow border-0">
                <div class="card-body">

                    <h6 class="text-muted">
                        Draft
                    </h6>

                    <h2 class="text-warning">
                        <?= $draft ?>
                    </h2>

                </div>
            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow border-0">
                <div class="card-body">

                    <h6 class="text-muted">
                        Selesai
                    </h6>

                    <h2 class="text-success">
                        <?= $selesai ?>
                    </h2>

                </div>
            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow border-0">
                <div class="card-body">
                    
                    <h6 class="text-muted">
                        Batal
                    </h6>

                    <h2 class="text-danger">
                        <?= $batal ?>
                    </h2>
                </div>
            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow border-0">
                <div class="card-body">
                    
                    <h6 class="text-muted">
                        Total Omzet
                    </h6>

                    <h5 class="text-primary">
                        <?= number_format(
                                $omzet,
                                0,
                                ',',
                                '.'
                            ); ?>
                    </h5>

                </div>
            </div>

        </div>

    </div>

    <div class="card shadow border-0">

        <div class="card-body">
            <table class="table table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Sales</th>
                        <th>Pelanggan</th>
                        <th>Produk</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($order as $o) {
                    ?>
                        <tr>
                            <td>
                                <span class="badge badge-secondary">
                                    <?= $no++; ?>
                                </span>

                            </td>

                            <td><?= $o->nama_sales; ?></td>
                            <td><?= $o->nama; ?></td>
                            <td><?= $o->nama_produk; ?></td>
                            <td><?= $o->tanggal; ?></td>
                            <td>
                                <b>
                                    <?= number_format(
                                        $o->total,
                                        0,
                                        ',',
                                        '.'
                                    ); ?>
                                </b>
                            </td>

                            <td>
                                <?php if ($o->status == 'draft') { ?>
                                    <span class="badge badge-warning">
                                        Draft
                                    </span>

                                <?php } elseif ($o->status == 'selesai') { ?>
                                    <span class="badge badge-success">
                                        Selesai
                                    </span>

                                <?php } else { ?>
                                    <span class="badge badge-danger">
                                        Batal
                                    </span>
                                <?php } ?>
                            </td>

                            <td>
                                <a href="<?= site_url('sales_order/edit/' . $o->id_order); ?>"
                                    class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="<?= site_url('sales_order/hapus/' . $o->id_order); ?>"
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