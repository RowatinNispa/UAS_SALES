<div class="container-fluid">

<style>
.profile-wrapper{
    background:#fff;
    border-radius:25px;
    padding:30px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.profile-sidebar{
    background:#f8f9fa;
    border-radius:20px;
    padding:25px;
    text-align:center;
    height:100%;
}

.profile-sidebar img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
}

.menu-profile a{
    display:block;
    padding:12px;
    margin-top:10px;
    border-radius:10px;
    text-decoration:none;
    color:#555;
    background:#fff;
    transition:.3s;
}

.menu-profile a:hover{
    background:#8B5CF6;
    color:white;
}

.info-box{
    background:#fff;
    border-radius:20px;
    padding:25px;
    box-shadow:0 5px 20px rgba(0,0,0,.05);
}

.form-control{
    border-radius:12px;
}
</style>

<div class="profile-wrapper">

<div class="row">

    <!-- KIRI -->
    <div class="col-md-3">

        <div class="profile-sidebar">

            <img src="<?= base_url('assets/img/profile.png'); ?>">

            <h4 class="mt-3">
                <?= $this->session->userdata('username'); ?>
            </h4>

            <p class="text-muted">
                Administrator
            </p>

            <div class="menu-profile">

                <a href="#">
                    👤 Informasi Profil
                </a>

                <a href="#">
                    🔒 Ganti Password
                </a>

                <a href="<?= site_url('auth/logout'); ?>">
                    🚪 Logout
                </a>

            </div>

        </div>

    </div>

    <!-- KANAN -->
    <div class="col-md-9">

        <div class="info-box">

            <h3 class="mb-4">
                Personal Information
            </h3>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label>Username</label>

                    <input
                        type="text"
                        class="form-control"
                        value="<?= $this->session->userdata('username'); ?>"
                        readonly
                    >

                </div>

                <div class="col-md-6 mb-3">

                    <label>Role</label>

                    <input
                        type="text"
                        class="form-control"
                        value="Administrator"
                        readonly
                    >

                </div>

                <div class="col-md-6 mb-3">

                    <label>Email</label>

                    <input
                        type="text"
                        class="form-control"
                        value="admin@gmail.com"
                    >

                </div>

                <div class="col-md-6 mb-3">

                    <label>No Telepon</label>

                    <input
                        type="text"
                        class="form-control"
                        value="08123456789"
                    >

                </div>

                <div class="col-md-12 mb-3">

                    <label>Alamat</label>

                    <textarea
                        class="form-control"
                        rows="3"
                    >Tangerang</textarea>

                </div>

            </div>

            <button class="btn btn-secondary">
                Batal
            </button>

            <button class="btn btn-primary">
                Simpan Perubahan
            </button>

        </div>

    </div>

</div>

</div>

</div>