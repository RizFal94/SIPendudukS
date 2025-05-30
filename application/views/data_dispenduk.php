<!DOCTYPE html>
<html>
<head>
    <title>SIPENDUDUKS</title>
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CDN Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- CDN Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .container-custom {
            margin: 30px;
        }
        .table th {
            text-align: center;
            vertical-align: middle;
        }
        .table-isi{
            text-align: center;
            vertical-align: middle;
        }
        footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<!-- SWAL -->
<?php if ($this->session->flashdata('success')): ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '<?php echo $this->session->flashdata('success'); ?>',
            timer: 5000,
            timerProgressBar: true,
            showConfirmButton: false
        });
    });
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            icon: 'error',
            title: 'Kesalahan!',
            text: '<?php echo $this->session->flashdata('error'); ?>',
            timer: 5000, 
            timerProgressBar: true,
            showConfirmButton: false
        });
    });
</script>
<?php endif; ?>

<header class="navbar navbar-expand-lg navbar-light bg-light shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            SIPENDUDUKS
            <span class="d-block text-muted small">Sistem Informasi Penduduk Surabaya</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php if ($this->session->userdata('logged_in')): ?>
                    <li class="nav-item">
                        <span class="nav-link">Selamat Datang, <?php echo $this->session->userdata('nama'); ?>!</span>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-outline-danger">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url('login'); ?>" class="btn btn-outline-primary">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</header>

<div class="container-custom">
    <h3 id="judul-penduduk" class="text-center mb-4">Data Penduduk Surabaya</h3>

    <div class="d-flex justify-content-end mb-3">
        <a href="<?php echo base_url('penduduk/tambah'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>No. HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($data_penduduk)) {
                foreach ($data_penduduk as $row) {
                    echo "<tr>
                            <td>" . $row['Nomor'] . "</td>
                            <td>" . $row['NIK'] . "</td>
                            <td>" . $row['Nama'] . "</td>
                            <td>" . $row['Tlp'] . "</td>
                            <td class='table-isi'>
                                <a href='" . base_url('penduduk/edit/' . $row['Nomor']) . "' class='btn btn-warning btn-sm me-2'>
                                    <i class='fa fa-pencil'></i> Edit
                                </a>
                                <a href='" . base_url('penduduk/hapus/' . $row['Nomor']) . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>
                                    <i class='fa fa-trash'></i> Hapus
                                </a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<footer class="bg-light text-center text-muted py-3">
    <div class="container">
        <p class="mb-1">© 2024 SIPENDUDUKS</p>
    </div>
</footer>

<!-- jQuery Manager -->
<script>
    $(document).ready(function () {
        $("#judul-penduduk")
            .hide()
            .fadeIn(2000)
            .animate({ fontSize: "2.5rem" }, 1000) 
            .animate({ fontSize: "2rem" }, 1000); 
    });
</script>

</body>
</html>
