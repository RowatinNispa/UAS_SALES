<div class="container-fluid">

<h3>Tambah Detail Order</h3>

<form method="post"
action="<?= site_url('detail_order/simpan'); ?>">

<div class="form-group">
<label>ID Order</label>

<select name="id_order"
class="form-control">

<?php foreach($order as $o){ ?>
<option value="<?= $o->id_order; ?>">
<?= $o->id_order; ?>
</option>
<?php } ?>

</select>
</div>

<div class="form-group">
<label>Produk</label>

<select name="id_produk"
class="form-control">

<?php foreach($produk as $p){ ?>
<option value="<?= $p->id; ?>">
<?= $p->nama_produk; ?>
</option>
<?php } ?>

</select>
</div>

<div class="form-group">
<label>Jumlah</label>

<input type="number"
name="jumlah"
class="form-control"
required>
</div>

<button type="submit"
class="btn btn-primary">
Simpan
</button>

</form>

</div>