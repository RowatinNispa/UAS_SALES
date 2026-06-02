<div class="container-fluid">

<h3 class="mb-4">Data Detail Order</h3>

<a href="<?= site_url('detail_order/tambah'); ?>"
class="btn btn-primary mb-3">
    Tambah Detail Order
</a>

<table class="table table-bordered">

<thead>
<tr>
    <th>No</th>
    <th>ID Order</th>
    <th>Produk</th>
    <th>Jumlah</th>
    <th>Subtotal</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>

<?php $no=1; foreach($detail as $d){ ?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d->id_order; ?></td>

<td><?= $d->nama_produk; ?></td>

<td><?= $d->jumlah; ?></td>

<td>
Rp <?= number_format($d->subtotal,0,',','.'); ?>
</td>

<td>

<a href="<?= site_url('detail_order/edit/'.$d->id_detail); ?>"
class="btn btn-warning btn-sm">
Edit
</a>

<a href="<?= site_url('detail_order/hapus/'.$d->id_detail); ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin hapus?')">
Hapus
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>