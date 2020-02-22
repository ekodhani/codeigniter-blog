<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/blog.css'); ?>">

    <!-- Shortcut Icon -->
    <link rel="Shortcut Icon" href="<?= base_url('assets/image/icon/favicon.png'); ?>">

    <title><?= $blog['judul_blog']; ?></title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('admin'); ?>">
                <img src="<?= base_url('assets/image/icon/favicon-m.png'); ?>" alt="Brand">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="<?= base_url('admin/blog'); ?>">Back</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- content -->
    <div class="container mt-5">
        <h1><?= $blog['judul_blog']; ?></h1>
        <img src="<?= base_url('assets/image/thumb/') . $blog['thumbnail']; ?>" title="<?= $blog['judul_blog']; ?>" width="50%">
        <p class="disabled text-black-50"><?= $blog['date_created']; ?></p>
        <?= $blog['konten_isi']; ?>
    </div>
    <!-- end content -->

    <!-- footer -->
    <footer class="footer_area mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="footer_top flex-column">
                        <div class="footer_logo">
                            <a href="<?= base_url('admin'); ?>">
                                <img src="<?= base_url('assets/image/icon/favicon.png'); ?>" alt="">
                            </a>
                            <div class="d-lg-block d-none">
                                <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                                    <div class="collapse navbar-collapse offset">
                                        <ul class="nav navbar-nav menu_nav mx-auto">
                                            <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('admin'); ?>">Dashboard</a></li>
                                            <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('admin/design'); ?>">Design</a></li>
                                            <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('admin/merch'); ?>">Merch</a></li>
                                            <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('admin/blog'); ?>">Blog</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="footer_social mt-lg-0 mt-5">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/dhaniflw/?hl=id"><i class="fab fa-instagram"></i></a>
                            <a href="https://github.com/ekodhani"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_bottom justify-content-center">
                <p class="col-lg-8 col-sm-12 footer-text">
                    Copyright &copy;2020 All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> <a href="dhaniflw.github.io">dhaniflw</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>