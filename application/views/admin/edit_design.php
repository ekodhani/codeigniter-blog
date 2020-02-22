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
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name Product</label>
                                <input type="text" class="form-control" placeholder="Enter a Name Product" name="name" id="name" value="<?= $produk['nama_produk']; ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?= base_url('assets/image/product/') . $produk['gambar']; ?>" class="rounded" width="100">
                                    </div>
                                    <div class="col">
                                        <input type="file" name="image" class="file-upload-default" id="image">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" placeholder="Upload Image" name="image" disabled>
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <?= form_error('image', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->