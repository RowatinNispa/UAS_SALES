<h1 class="h3 mb-4 text-gray-800">
    Dashboard
</h1>

<style>
    .welcome-card{
        background: linear-gradient(135deg,#f8f5ff,#efe8ff);
        border-radius:25px;
        padding:30px;
        box-shadow:0 8px 25px rgba(139,109,255,0.15);
        margin-bottom:30px;
    }

    .welcome-title{
        color:#6a5acd;
        font-weight:bold;
    }

    .dashboard-card{
        border:none;
        border-radius:20px;
        box-shadow:0 8px 20px rgba(139,109,255,0.12);
        transition:.3s;
    }

    .dashboard-card:hover{
        transform:translateY(-5px);
    }

    .dashboard-icon{
        font-size:35px;
        color:#8B6DFF;
    }

    .chart-card{
        border:none;
        border-radius:20px;
        box-shadow:0 8px 20px rgba(139,109,255,0.12);
    }

    .card-number{
        font-size:28px;
        font-weight:bold;
        color:#6a5acd;
    }

    .card-title{
        color:#777;
        font-size:14px;
    }
</style>

<!-- WELCOME SECTION -->

<div class="welcome-card">
    <div class="row align-items-center">

        <div class="col-md-8">
            <h2 class="welcome-title">
                Hi, Nis! 👋
            </h2>

            <p class="text-muted">
                Selamat datang di Dashboard Sales Management.
                Semoga harimu produktif yaa ✨
            </p>
        </div>

        <div class="col-md-4 text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png"
                 width="150">
        </div>

    </div>
</div>

<div class="row">

    <!-- PRODUK -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card dashboard-card">
            <div class="card-body text-center">
                <div class="dashboard-icon mb-2">
                    📦
                </div>

                <div class="card-title">
                    Total Produk
                </div>

                <div class="card-number">
                    <?= $total_produk; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- PELANGGAN -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card dashboard-card">
            <div class="card-body text-center">
                <div class="dashboard-icon mb-2">
                    👥
                </div>

                <div class="card-title">
                    Total Pelanggan
                </div>

                <div class="card-number">
                    <?= $total_pelanggan; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- SALES -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card dashboard-card">
            <div class="card-body text-center">
                <div class="dashboard-icon mb-2">
                    💼
                </div>

                <div class="card-title">
                    Total Sales
                </div>

                <div class="card-number">
                    <?= $total_sales; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ORDER -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card dashboard-card">
            <div class="card-body text-center">
                <div class="dashboard-icon mb-2">
                    🛒
                </div>

                <div class="card-title">
                    Total Order
                </div>

                <div class="card-number">
                    <?= $total_order; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- GRAFIK -->
    <div class="col-xl-12 mb-4">
        <div class="card chart-card">
            <div class="card-header bg-white border-0">
                <h5 style="color:#6a5acd;font-weight:bold;">
                    Grafik Data Sales Order
                </h5>
            </div>

            <div class="card-body">
                <canvas id="chartDashboard"></canvas>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('chartDashboard');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            'Produk',
            'Pelanggan',
            'Sales',
            'Order'
        ],

        datasets: [{
            label: 'Total Data',
            data: [
                <?= $total_produk; ?>,
                <?= $total_pelanggan; ?>,
                <?= $total_sales; ?>,
                <?= $total_order; ?>
            ],

            backgroundColor: [
                '#CDB4FF',
                '#B8A1FF',
                '#A78BFA',
                '#8B6DFF'
            ],

            borderRadius: 10
        }]
    },

    options: {
        responsive: true,
        plugins:{
            legend:{
                display:false
            }
        },

        scales:{
            y:{
                beginAtZero:true
            }
        }
    }
});
</script>