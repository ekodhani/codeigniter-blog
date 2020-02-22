<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-dribbble"></i>
                </span> <?= $title; ?> </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12  grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a href="<?= base_url('admin/add_design'); ?>" class="btn btn-gradient-dark btn-fw mb-4"><i class="mdi mdi-plus"></i> Add Design</a>
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <div class="row">
                        <?php foreach ($produk as $p) : ?>
                            <div class="col-md-6 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/image/product/') . $p->gambar; ?>" width="50%">
                                        <h5><?= $p->nama_produk; ?></h5>
                                        <a href="<?= base_url('admin/edit_design/') . $p->id_produk; ?>" class="btn btn-info btn-sm"><i class="mdi mdi-tooltip-edit"></i> Edit</a>
                                        <a href="<?= base_url('admin/delete_design/') . $p->id_produk; ?>" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i> Hapus</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->