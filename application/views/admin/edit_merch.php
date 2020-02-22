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
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Merch Name</label>
                                <input type="text" class="form-control" placeholder="Enter a Merch Name" name="name" id="name" value="<?= $merch['nama_merch']; ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="form-group">
                                <label for="quantity">Merch Quantity</label>
                                <input type="text" class="form-control" placeholder="Enter a Merch Quantity" name="quantity" id="quantity" value="<?= $merch['qty']; ?>">
                                <?= form_error('quantity', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="form-group">
                                <label for="size">Size</label>
                                <select class="form-control form-control-sm" id="size" name="size">
                                    <option value="M,L,XL">M,L,XL</option>
                                    <option value="One Size">One Size</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="price">Merch Price</label>
                                <input type="text" class="form-control" placeholder="Enter a Merch Price" name="price" id="price" value="<?= $merch['harga']; ?>">
                                <?= form_error('price', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?= base_url('assets/image/merch/') . $merch['gambar']; ?>" class="rounded" width="100">
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