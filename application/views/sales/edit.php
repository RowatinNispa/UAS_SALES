<div class="container-fluid">

<h3 class="mb-4">Edit Sales</h3>

<form method="post"
action="<?= site_url('sales/update/'.$sales->id_sales); ?>">

    <div class="form-group">

        <label>Nama Sales</label>

        <input type="text"
        name="nama_sales"
        class="form-control"
        value="<?= $sales->nama_sales; ?>"
        required>

    </div>

    <button type="submit"
    class="btn btn-primary">
        Update
    </button>

    <a href="<?= site_url('sales'); ?>"
    class="btn btn-secondary">
        Kembali
    </a>

</form>

</div>