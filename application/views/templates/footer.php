</div>
</div>
</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/chart.js/Chart.min.js');?>"></script>
<script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>

<script>
    $(document).ready(function(){
        $('#dataTable').DataTable({
            "language": {
                "search": "cari",
                "lengthMenu": "Tampilkan_MENU_data",
                "info": "Menampilkan_START_sampai_END_dengan_TOTAL_data",
                "paginate":{
                    "previous": "Sebelumnya",
                    "next": "Berikutnya"
                }
            }
        });
    });
</script>
<script>
    var ctx= document.getElementById("chartDashboard").getContext('2d');
    var chart= new Chart(ctx,{
        type: 'bar',
        data: {
            labels:['pelanggan','produk','sales'],
            datasets: [{
                label: 'Jumlah Data',
                data: [
                    <?= $total_pelanggan;?>,
                    <?= $total_produk;?>,
                    <?= $total_sales;?>
                ],
                backgroundColor: [
                    '#c914da',
                    '#000000',
                    'rgb(255, 7, 7)'
                ],
                barPercentage: 0.5,
                categoryPercentage: 0.5
            }]
        },
        options:{
            responsive: true,
            scales:{
                yAxes:[{
                    ticks:{
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>