<div class="container-fluid">

    <style>
        .card-laporan {
            border: none;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(138, 43, 226, .15);
        }
    </style>

    <h2 class="mb-4">
        📦 Laporan Penjualan Produk
    </h2>

    <div class="card shadow-sm mb-4">
        <div class="card-body">

            <form method="get" action="">

                <div class="row align-items-end">

                    <div class="col-md-5">
                        <input
                            type="date"
                            name="tanggal"
                            value="<?= $this->input->get('tanggal'); ?>"
                            class="form-control">
                    </div>

                    <div class="col-md-2">
                        <button
                            type="submit"
                            class="btn btn-primary btn-block">

                            <i class="fas fa-filter"></i>
                            Filter

                        </button>
                    </div>

                    <div class="col-md-2">
                        <a
                            href="<?= site_url('laporan/produk'); ?>"
                            class="btn btn-dark btn-block">

                            <i class="fas fa-sync-alt"></i>
                            Reset

                        </a>
                    </div>

                </div>

            </form>

            <div class="mb-3">
                
            <a
                href="<?= site_url('laporan/cetak_produk?tanggal=' . $this->input->get('tanggal')); ?>"
                target="_blank"
                class="btn btn-success">

                <i class="fas fa-print"></i>
                Cetak Laporan Produk
            </a>
            </div>
        </div>

        </div>
    </div>

    <div class="card card-laporan">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th>Jumlah Terjual</th>
                            <th>Total Penjualan</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $no = 1;
                        foreach($produk as $p):
                        ?>

                        <tr>

                            <td><?= $no++; ?></td>

                            <td><?= $p->nama_produk; ?></td>

                            <td><?= $p->jumlah_terjual; ?></td>

                            <td>
                                Rp <?= number_format(
                                    $p->total_penjualan,
                                    0,
                                    ',',
                                    '.'
                                ); ?>
                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>