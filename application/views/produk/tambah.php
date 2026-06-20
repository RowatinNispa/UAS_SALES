<div class="container-fluid">

    <div class="card shadow-lg border-0" style="border-radius:20px;">
        <div class="card-header text-white"
            style="background:linear-gradient(135deg,#7B2FF7,#9F44D3); border-radius:20px 20px 0 0;">
            <h4 class="mb-0">
                <i class="fas fa-box"></i>
                Tambah Produk
            </h4>
        </div>

        <div class="card-body p-4">

            <form method="post" action="<?= site_url('produk/simpan'); ?>">

                <div class="form-group">
                    <label>Kode Produk</label>
                    <input
                        type="text"
                        name="kode"
                        class="form-control"
                        placeholder="Contoh : P001"
                        required>
                </div>

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input
                        type="text"
                        name="nama_produk"
                        class="form-control"
                        placeholder="Masukkan nama produk"
                        required>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input
                        type="number"
                        name="harga"
                        class="form-control"
                        placeholder="Masukkan harga"
                        required>
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input
                        type="number"
                        name="stok"
                        class="form-control"
                        placeholder="Masukkan stok"
                        required>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i>
                    Simpan
                </button>

                <a href="<?= site_url('produk'); ?>" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>