<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-blogger"></i>
                </span> <?= $title; ?> </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a href="<?= base_url('admin/add_blog'); ?>" class="btn btn-gradient-dark btn-fw mb-4"><i class="mdi mdi-plus"></i> Add Blog</a>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="row">
                            <?php
                            function limit_words($string, $word_limit)
                            {
                                $words = explode(" ", $string);
                                return implode(" ", array_splice($words, 0, $word_limit));
                            }
                            foreach ($blog as $b) : ?>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h1><?= $b->judul_blog; ?></h1>
                                            <img src="<?= base_url('assets/image/thumb/') . $b->thumbnail; ?>">
                                            <p><?php echo limit_words($b->konten_isi, 50); ?></p>
                                            <div class="form-group">
                                                <a href="<?= base_url('admin/detail_blog/') . $b->id_blog; ?>"> <strong>Selengkapnya</strong></a>
                                                <a href="<?= base_url('admin/update_blog/') . $b->id_blog; ?>" class="btn btn-info btn-sm"><i class="mdi mdi-tooltip-edit"></i> Edit</a>
                                                <a href="<?= base_url('admin/delete_blog/') . $b->id_blog; ?>" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->