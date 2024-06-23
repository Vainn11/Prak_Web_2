<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    body {
        background-color: #121212;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        color: #ffffff;
    }

    .navbar-light {
        background-color: #1f1f1f;
    }

    .navbar-light .navbar-brand,
    .navbar-light .navbar-nav .nav-link {
        color: #ffffff;
    }

    .navbar-toggler {
        border-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%2855, 55, 55, 0.7%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .card {
        background-color: #1e1e1e;
        color: #ffffff;
    }

    .card-header {
        background-color: #6200ea;
    }

    .btn {
        border: none;
    }

    .btn-sm {
        background-color: #bb86fc;
        color: #000000;
    }

    .btn-sm:hover {
        background-color: #3700b3;
        color: #ffffff;
    }

    .alert-success {
        background-color: #00c851;
        color: #ffffff;
        border: none;
    }

    .alert-danger {
        background-color: #ff4444;
        color: #ffffff;
        border: none;
    }

    .table {
        background-color: #1e1e1e;
        color: #ffffff;
    }

    .table thead {
        background-color: #6200ea;
        color: #ffffff;
    }

    .table-bordered,
    .table-bordered td,
    .table-bordered th {
        border-color: #444;
    }

    .pagination .page-item .page-link {
        background-color: #1e1e1e;
        color: #ffffff;
        border-color: #6200ea;
    }

    .pagination .page-item .page-link:hover {
        background-color: #6200ea;
        color: #ffffff;
        border-color: #3700b3;
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">My Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php if (session()->get('logged_in')) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome, <?= session()->get('username'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login/logout'); ?>">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('register'); ?>">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header text-white">
                    <h5 class="mb-0">List Buku</h5>
                    <a href="<?= base_url('buku/create'); ?>" class="btn btn-sm float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <table class="table table-bordered table-striped table-hover">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">Judul</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($posts) && is_array($posts)) : ?>
                                <?php foreach ($posts as $row) : ?>
                                    <tr>
                                        <td><?= $row['judul']; ?></td>
                                        <td><?= $row['penulis']; ?></td>
                                        <td><?= $row['penerbit']; ?></td>
                                        <td><?= $row['tahun_terbit']; ?></td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?= base_url('buku/delete/' . $row['id']); ?>" method="POST">
                                                <input type="hidden" name="{csrf_token}" value="{csrf_hash}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="<?= base_url('buku/edit/' . $row['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5" class="text-center">No post found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        <?= $pager->links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<script>
    $(document).ready(function() {
        $('.pagination li').addClass('page-item');
        $('.pagination li a').addClass('page-link');
    });
</script>
<?= $this->endSection() ?>
