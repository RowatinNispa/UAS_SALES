<div class="container-fluid">

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="font-weight-bold">
            👨‍💼 Data Sales
        </h2>

        <small class="text-muted">
            Kelola data sales perusahaan
        </small>
    </div>

    <a href="<?= site_url('sales/tambah'); ?>"
       class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Tambah Sales
    </a>
</div>

<div class="card shadow border-0">

    <div class="card-body">
        <table
        id="tabelSales"
        class="table table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>ID</th>
                    <th>Nama Sales</th>
                    <th>Status</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($sales as $s): ?>
                <tr>
                    <td>
                        <span class="badge badge-secondary">
                            <?= $s->id_sales; ?>
                        </span>
                    </td>

                    <td>
                        <?= $s->nama_sales; ?>
                    </td>

                    <td>
                        <span class="badge badge-success">
                            Aktif
                        </span>
                    </td>

                    <td>
                        <a href="<?= site_url('sales/edit/'.$s->id_sales); ?>"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="<?= site_url('sales/hapus/'.$s->id_sales); ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Hapus sales?')">
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
$(document).ready(function(){
    $('#tabelSales').DataTable();
});

</script>