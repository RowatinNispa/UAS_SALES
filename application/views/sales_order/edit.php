<div class="container-fluid">

<h3 class="mb-4">Edit Sales Order</h3>

<form method="post"
action="<?= site_url('sales_order/update/'.$sales_order->id_order); ?>">

<div class="form-group">

    <label>Sales</label>

    <select name="id_sales"
    class="form-control">

        <?php foreach($sales as $s){ ?>

        <option
        value="<?= $s->id_sales; ?>"
        <?= ($sales_order->id_sales==$s->id_sales)?'selected':''; ?>>

            <?= $s->nama_sales; ?>

        </option>

        <?php } ?>

    </select>

</div>

<div class="form-group">

    <label>Pelanggan</label>

    <select name="id_pelanggan"
    class="form-control">

        <?php foreach($pelanggan as $p){ ?>

        <option
        value="<?= $p->id; ?>"
        <?= ($sales_order->id_pelanggan==$p->id)?'selected':''; ?>>

            <?= $p->nama; ?>

        </option>

        <?php } ?>

    </select>

</div>

<div class="form-group">

    <label>Tanggal</label>

    <input
    type="date"
    name="tanggal"
    class="form-control"
    value="<?= $sales_order->tanggal; ?>">

</div>

<div class="form-group">

    <label>Total</label>

    <input
    type="number"
    name="total"
    class="form-control"
    value="<?= $sales_order->total; ?>">

</div>

<div class="form-group">

    <label>Status</label>

    <select name="status"
    class="form-control">

        <option value="Draft"
        <?= ($sales_order->status=='Draft')?'selected':''; ?>>
            Draft
        </option>

        <option value="Dikirim"
        <?= ($sales_order->status=='Dikirim')?'selected':''; ?>>
            Dikirim
        </option>

        <option value="Selesai"
        <?= ($sales_order->status=='Selesai')?'selected':''; ?>>
            Selesai
        </option>

        <option value="Dibatalkan"
        <?= ($sales_order->status=='Dibatalkan')?'selected':''; ?>>
            Dibatalkan
        </option>

    </select>

</div>

<button type="submit"
class="btn btn-primary">
    Update
</button>

<a href="<?= site_url('sales_order'); ?>"
class="btn btn-secondary">
    Kembali
</a>

</form>

</div>