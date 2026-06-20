<div class="container-fluid">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-warning text-white">
            <h4>
                Edit Sales
            </h4>
        </div>

        <div class="card-body">

            <form method="post"
                action="<?= site_url('sales/update/' . $sales->id_sales); ?>">
                <div class="form-group">
                    <label>Nama Sales</label>
                    <input
                        type="text"
                        name="nama_sales"
                        value="<?= $sales->nama_sales; ?>"
                        class="form-control"
                        required>
                </div>

                <button
                    type="submit"
                    class="btn btn-warning text-white">
                    Update
                </button>

                <a href="<?= site_url('sales'); ?>"
                    class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>

</div>