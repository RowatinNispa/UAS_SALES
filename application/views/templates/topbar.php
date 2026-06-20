<nav class="navbar navbar-expand navbar-light bg-gray-500 topbar mb-4 static-top shadow">

<button id="sidebarToggleTop" class="btn btn-link d-mb-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-done d-lg-inline text-gray-600 small">
            Admin
        </span>
        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/undraw_profile_2.svg')?>" width="40">
    </a>
    <div class="dropdown-menu dropdown-menu-right shadow">

<a class="dropdown-item"
href="<?= site_url('profile'); ?>">

<i class="fas fa-user"></i>
Profile

</a>

<div class="dropdown-divider"></div>

<div class="px-3 py-2">

<b>
<?= $this->session->userdata('username'); ?>
</b>

<br>

<span class="text-muted">
Administrator
</span>

</div>

</div>

    </li>
</ul>
</nav>