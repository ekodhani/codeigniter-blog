<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-tshirt-v"></i>
                </span> <?= $title; ?> <strong><?= $merch['nama_merch']; ?></strong> </h3>
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
                        <div class="row">
                            <div class="col-md-6 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <small class="text-muted font-italic">Created : <?= $merch['date_created']; ?></small>
                                        <img src="<?= base_url('assets/image/merch/') . $merch['gambar']; ?>" width="70%">
                                        <h5 class="font-weight-bold"><?= $merch['nama_merch']; ?></h5>
                                        <h5>Quantity : <?= $merch['qty']; ?></h5>
                                        <h5>Size : <?= $merch['size']; ?></h5>
                                        <h5>Price : Rp.<?= $merch['harga']; ?></h5>


                                        <a href="<?= base_url('admin/merch'); ?>" class="btn btn-dark btn-sm"><i class="mdi mdi-keyboard-backspace"></i> Kembali</a>
                                        <a href="<?= base_url('admin/edit_merch/') . $merch['id_merch']; ?>" class="btn btn-info btn-sm"><i class="mdi mdi-tooltip-edit"></i> Edit</a>
                                        <a href="<?= base_url('admin/delete_merch/') . $merch['id_merch']; ?>" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i> Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->