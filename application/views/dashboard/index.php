<div class="container-fluid">

    <style>
        body {
            background: #f5f6ff;
        }

        .dashboard-title {
            font-weight: 700;
            color: #312E81;
            margin-bottom: 25px;
        }

        .card-stat {
            border: none;
            border-radius: 25px;
            color: white;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
        }

        .card-purple {
            background: linear-gradient(135deg, #6D28D9, #8B5CF6);
        }

        .card-indigo {
            background: linear-gradient(135deg, #4338CA, #6366F1);
        }

        .card-pink {
            background: linear-gradient(135deg, #DB2777, #EC4899);
        }

        .card-blue {
            background: linear-gradient(135deg, #4F46E5, #818CF8);
        }

        .card-stat h2 {
            font-weight: bold;
        }

        .box {
            background: #fff;
            border: none;
            border-radius: 25px;
            padding: 25px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .06);
        }

        .table thead {
            background: #F3F0FF;
        }
    </style>

    <h2 class="dashboard-title">
        Dashboard Sales Management
    </h2>

    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card card-stat card-purple">
                <div class="card-body">
                    <small>Total Produk</small>
                    <h2><?= $total_produk; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card card-stat card-indigo">
                <div class="card-body">
                    <small>Total Pelanggan</small>
                    <h2><?= $total_pelanggan; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card card-stat card-pink">
                <div class="card-body">
                    <small>Total Sales</small>
                    <h2><?= $total_sales; ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card card-stat card-blue">
                <div class="card-body">
                    <small>Total Order</small>
                    <h2><?= $total_order; ?></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="box">
                <h5 class="mb-4">
                    Statistik Data
                </h5>
                <canvas id="dashboardChart"></canvas>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="box">
                <h5 class="mb-4">
                    Ringkasan
                </h5>

                <p><b>Produk :</b> <?= $total_produk; ?></p>
                <p><b>Pelanggan :</b> <?= $total_pelanggan; ?></p>
                <p><b>Sales :</b> <?= $total_sales; ?></p>
                <p><b>Order :</b> <?= $total_order; ?></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx =
            document.getElementById('dashboardChart');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    'Produk',
                    'Pelanggan',
                    'Sales',
                    'Order'
                ],

                datasets: [{
                    data: [
                        <?= $total_produk; ?>,
                        <?= $total_pelanggan; ?>,
                        <?= $total_sales; ?>,
                        <?= $total_order; ?>
                    ],

                    backgroundColor: [
                        '#8B5CF6',
                        '#6366F1',
                        '#EC4899',
                        '#4F46E5'
                    ]
                }]
            }
        });
    </script>

</div>