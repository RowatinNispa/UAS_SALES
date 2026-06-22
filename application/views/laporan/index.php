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
 
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form method="get" action="">
                <div class="row algin-items-end">
                    <div class="col-md-5">
                        <input
                            type="date"
                            name="tanggal"
                            class="form-control"
                            placeholder="---- -- --">
                    </div>

                    <div class="col-md-2">
                        <button
                            type="submit"
                            class="btn btn-primary btn-block">

                            <i class="fas fa-filter"></i>
                            filter
                        </button>
                    </div>

                    <div class="col-md-2">
                        <a href="<?= site_url('laporan') ?>"
                        class="btn btn-drak btn-block">

                        <i class="fas fa-sync-alt"></i>
                        Riset
                    
                    </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </div>

    <div class="mb-3">
        <a
            href="<?= site_url('laporan/cetak?tanggal=' . $this->input->get('tanggal')); ?>"
            target="_blank"
            class="btn btn-success">

            <i class="fas fa-print"></i>
            Cetak Laporan
        </a>

        <a
            href="<?= site_url('laporan/produk?tanggal=' . $this->input->get('tanggal')); ?>"
            class="btn btn-info">

            <i class="fas fa-box"></i>
            Laporan Produk
        
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