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

    .card {
        background-color: #1e1e1e;
        color: #ffffff;
    }

    .card-header {
        background-color: #6200ea;
    }

    .form-control {
        background-color: #2c2c2c;
        color: #ffffff;
        border: 1px solid #444;
    }

    .form-control::placeholder {
        color: #888;
    }

    .form-group label {
        color: #ffffff;
    }

    .btn-success {
        background-color: #bb86fc;
        border-color: #bb86fc;
        color: #000000;
    }

    .btn-success:hover {
        background-color: #3700b3;
        border-color: #3700b3;
        color: #ffffff;
    }

    .btn-secondary {
        background-color: #333;
        border-color: #333;
        color: #ffffff;
    }

    .btn-secondary:hover {
        background-color: #555;
        border-color: #555;
        color: #ffffff;
    }

    .alert-danger {
        background-color: #ff4444;
        color: #ffffff;
        border: none;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header text-white">
                    <h4>Edit</h4>
                </div>
                <div class="card-body">

                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <?= validation_list_errors() ?>

                    <?= form_open('buku/update/' . $post['id']); ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul" value="<?= $post['judul'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan Penulis" value="<?= $post['penulis'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan Penerbit" value="<?= $post['penerbit'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan Tahun Terbit" value="<?= $post['tahun_terbit'] ?>">
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-success">Update</button>
                        <a href="<?= base_url('home') ?>" class="btn btn-secondary">Kembali</a>
                    </div>
                    <?= form_close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#post_content').summernote({
            tabsize: 2,
            height: 500,
            styleTags: [
                'p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
            ],
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
<?= $this->endSection() ?>
