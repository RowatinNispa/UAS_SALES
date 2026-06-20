<div class="container-fluid">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white">
            <h4>
                Tambah Sales
            </h4>

        </div>

        <div class="card-body">
            <form method="post"
                action="<?= site_url('sales/simpan'); ?>">
                <div class="form-group">
                    <label>Nama Sales</label>
                    <input
                        type="text"
                        name="nama_sales"
                        class="form-control"
                        required>

                </div>

                <button
                    type="submit"
                    class="btn btn-success">
                    Simpan
                </button>

                <a href="<?= site_url('sales'); ?>"
                    class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>

</div>