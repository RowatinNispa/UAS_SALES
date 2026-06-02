<div class="container-fluid">

    <h3>Laporan Data Buku</h3>

    <form method="get">

        <select
            name="buku"
            class="form-control w-25 d-inline">

            <option value="">
                -- Semua Buku --
            </option>

            <?php foreach($buku_list as $bk): ?>

            <option
                value="<?= $bk->id; ?>"
                <?= ($buku == $bk->id) ? 'selected' : ''; ?>>

                <?= $bk->judul; ?>

            </option>

            <?php endforeach; ?>

        </select>

        <button
            type="submit"
            class="btn btn-primary btn-sm">

            Filter

        </button>

        <a
            href="<?= site_url('laporan/buku'); ?>"
            class="btn btn-secondary btn-sm">

            Reset

        </a>

    </form>

    <br>

    <a
        href="<?= site_url('laporan/cetak_buku?buku=' . urlencode($buku)); ?>"
        target="_blank"
        class="btn btn-success btn-sm">

        Cetak PDF

    </a>

    <table class="table table-bordered mt-3">

        <thead>

        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Stok</th>
        </tr>

        </thead>

        <tbody>

        <?php
        $no = 1;
        foreach($data as $b):
        ?>

        <tr>

            <td><?= $no++; ?></td>
            <td><?= $b->judul; ?></td>
            <td><?= $b->penulis; ?></td>
            <td><?= $b->penerbit; ?></td>
            <td><?= $b->stok; ?></td>

        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>