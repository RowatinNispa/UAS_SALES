<div class="container-fluid">

<h3 class="mb-4">Tambah Sales Order</h3>

<form method="post"
action="<?= site_url('sales_order/simpan'); ?>">

<div class="form-group">
    <label>Sales</label>

    <select name="id_sales"
    class="form-control"
    required>

        <option value="">
            -- Pilih Sales --
        </option>

        <?php foreach($sales as $s){ ?>

        <option value="<?= $s->id_sales; ?>">
            <?= $s->nama_sales; ?>
        </option>

        <?php } ?>

    </select>

</div>

<div class="form-group">
    <label>Pelanggan</label>

    <select name="id_pelanggan"
    class="form-control"
    required>

        <option value="">
            -- Pilih Pelanggan --
        </option>

        <?php foreach($pelanggan as $p){ ?>

        <option value="<?= $p->id; ?>">
            <?= $p->nama; ?>
        </option>

        <?php } ?>

    </select>

</div>

<div class="form-group">
    <label>Tanggal</label>

    <input type="date"
    name="tanggal"
    class="form-control"
    required>
</div>

<div class="form-group">
    <label>Total</label>

    <input type="number"
    name="total"
    class="form-control"
    required>
</div>

<div class="form-group">

    <label>Status</label>

    <select name="status"
    class="form-control">

        <option value="Draft">
            Draft
        </option>

        <option value="Dikirim">
            Dikirim
        </option>

        <option value="Selesai">
            Selesai
        </option>

        <option value="Dibatalkan">
            Dibatalkan
        </option>

    </select>

</div>

<button type="submit"
class="btn btn-primary">
    Simpan
</button>

<a href="<?= site_url('sales_order'); ?>"
class="btn btn-secondary">
    Kembali
</a>

</form>

</div>