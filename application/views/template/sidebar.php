    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="nav-profile-image">
                            <img src="<?= base_url('assets/image/admin/') . $admin['gambar']; ?>" title="Profil Picture">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2"><?= $admin['nama_admin']; ?></span>
                            <span class="text-secondary text-small">Admin</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin'); ?>">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-title">Product</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-dropbox menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/design'); ?>">Design</a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/merch'); ?>">Merch</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/blog'); ?>">
                        <span class="menu-title">Blog</span>
                        <i class="mdi mdi-blogger menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item sidebar-actions">
                    <span class="nav-link">
                        <a href="<?= base_url('login/logout'); ?>" class="btn btn-block btn-lg btn-gradient-primary mt-4">
                            <i class="mdi mdi-logout"></i>
                            Log out
                        </a>
                    </span>
                </li>
            </ul>
        </nav>