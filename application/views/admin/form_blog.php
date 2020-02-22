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
            <div class="col-12  grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('admin/act_add_blog'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" placeholder="Enter a title" name="title" id="title">
                                <?= form_error('title', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="form-group">
                                <label for="contet">Content</label>
                                <textarea name="content" id="editor1" class="form-control" cols="30" rows="10" placeholder="Enter a content"></textarea>
                                <?= form_error('content', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" name="thumbnail" class="file-upload-default" id="thumbnail">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" placeholder="Upload Thumbnail" name="thumbnail" disabled>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                    </span>
                                </div>
                                <?= form_error('thumbnail', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->