<div class="container-fluid">

    <style>
        .card-laporan {
            border: none;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(138, 43, 226, .15);
        }

        .card-total {
            background: linear-gradient(135deg,
                    #8B5CF6,
                    #A855F7);
            color: white;
            border-radius: 20px;
        }

        .table-modern {
            background: white;
            border-radius: 15px;
            overflow: hidden;
        }

        .badge-draft {
            background: #ffc107;
            color: black;
        }

        .badge-selesai {
            background: #8ca728;
            color: black;
        }

        .badge-batal {
            background: #dc3545;
        }
    </style>

    <h2 class="mb-4">
        📊 Laporan Sales Order
    </h2>

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card card-total">
                <div class="card-body">
                    <h6>Total Order</h6>
                    <h2>
                        <?= $total_order ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-total">
                <div class="card-body">
                    <h6>Total Pendapatan</h6>
                    <h2>
                        <?= number_format(
                            $pendapatan,
                            0,
                            ',',
                            '.'
                        ); ?>
                    </h2>
                </div>
            </div>
        </div>

    </div>

    <div class="mb-3">
        <a
            href="<?= site_url('laporan/cetak'); ?>"
            target="_blank"
            class="btn btn-success">
            <i class="fas fa-print"></i>
            Cetak Laporan
        </a>
    </div>

    <div class="card card-laporan">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
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
                        foreach ($laporan as $l):
                        ?>

                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $l->nama_sales; ?></td>
                                <td><?= $l->nama; ?></td>
                                <td><?= $l->tanggal; ?></td>
                                <td>
                                    <?= number_format(
                                        $l->total,
                                        0,
                                        ',',
                                        '.'
                                    ); ?>

                                </td>

                                <td>

                                    <?php if ($l->status == 'draft') { ?>

                                        <span class="badge badge-draft">
                                            Draft
                                        </span>

                                    <?php } elseif ($l->status == 'selesai') { ?>

                                        <span class="badge badge-selesai">
                                            Selesai
                                        </span>

                                    <?php } else { ?>

                                        <span class="badge badge-batal">
                                            Batal
                                        </span>

                                    <?php } ?>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>