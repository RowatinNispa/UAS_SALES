<div class="container-fluid">

<h3 class="mb-4">Tambah Sales</h3>

<form method="post"
action="<?= site_url('sales/simpan'); ?>">

    <div class="form-group">
        <label>Nama Sales</label>

        <input type="text"
        name="nama_sales"
        class="form-control"
        required>
    </div>

    <button type="submit"
    class="btn btn-primary">
        Simpan
    </button>

    <a href="<?= site_url('sales'); ?>"
    class="btn btn-secondary">
        Kembali
    </a>

</form>

</div>