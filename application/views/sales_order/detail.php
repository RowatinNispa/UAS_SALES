<div class="container-fluid">

<h2 class="font-weight-bold">
    Detail Sales Order
</h2>


<div class="card shadow">

<div class="card-body">


<p>
Tanggal :
<b><?= $order->tanggal ?></b>
</p>


<table class="table table-bordered">

<thead class="bg-primary text-white">

<tr>
<th>No</th>
<th>Produk</th>
<th>Jumlah</th>
<th>Harga</th>
<th>Subtotal</th>
</tr>

</thead>


<tbody>

<?php
$no = 1;
$total = 0;

foreach($detail as $d):

$total += $d->subtotal;

?>

<tr>

<td>
<?= $no++; ?>
</td>


<td>
<?= $d->nama_produk; ?>
</td>


<td>
<?= $d->jumlah; ?>
</td>


<td>
Rp <?= number_format(
$d->harga,
0,
',',
'.'
); ?>
</td>


<td>
Rp <?= number_format(
$d->subtotal,
0,
',',
'.'
); ?>
</td>


</tr>


<?php endforeach; ?>


<tr>

<th colspan="4">
Total
</th>


<th>
Rp <?= number_format(
$total,
0,
',',
'.'
); ?>
</th>


</tr>


</tbody>


</table>


<a href="<?= site_url('sales_order'); ?>"
class="btn btn-secondary">
Kembali
</a>


</div>

</div>

</div>