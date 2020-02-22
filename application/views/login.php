<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- my style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <!-- Gfont -->
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/image/icon/favicon.png'); ?>">

    <title><?= $title; ?></title>
</head>

<body data-vide-bg="<?= base_url('assets/bg.mp4'); ?>" data-vide-options="loop muted: false">
    <form action="" method="post" class="login-form">
        <h2>Login</h2>
        <?= $this->session->flashdata('message'); ?>
        <div class="form-input">
            <input type="text" name="email" placeholder="Email" id="Email">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
        </div>
        <div class="form-input">
            <input type="password" name="password" placeholder="Password" id="password">
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
        </div>
        <button type="submit">Login</button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/jquery.vide.js'); ?>"></script>
</body>

</html>