<div class="container-fluid">

<h3>Edit Detail Order</h3>

<form method="post"
action="<?= site_url('detail_order/update/'.$detail->id_detail); ?>">

<div class="form-group">
<label>ID Order</label>

<select name="id_order"
class="form-control">

<?php foreach($order as $o){ ?>

<option
value="<?= $o->id_order; ?>"
<?= ($detail->id_order==$o->id_order)?'selected':''; ?>>

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

<option
value="<?= $p->id; ?>"
<?= ($detail->id_produk==$p->id)?'selected':''; ?>>

<?= $p->nama_produk; ?>

</option>

<?php } ?>

</select>

</div>

<div class="form-group">

<label>Jumlah</label>

<input
type="number"
name="jumlah"
class="form-control"
value="<?= $detail->jumlah; ?>">

</div>

<button type="submit"
class="btn btn-primary">
Update
</button>

</form>

</div>