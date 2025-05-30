<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Penduduk</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CDN Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .edit-container {
            max-width: 40%;
            margin: 100px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .btn-custom {
            background-color: #6f42c1;
            color: white;
        }
        .btn-custom:hover {
            background-color: #5a379a;
        }
        .btn-back {
            margin-top: 20px;
            text-decoration: none;
            display: block;
            text-align: center;
            font-weight: bold;
            color: #007bff;
        }
        .btn-back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="edit-container">
    <h3 class="text-center mb-4">Edit Data Penduduk</h3>

    <form id="edit-form" action="<?php echo base_url('penduduk/update/' . $penduduk['Nomor']); ?>" method="post">
        <div class="mb-3">
            <label for="NIK" class="form-label">Nomor Induk Kependudukan (NIK)</label>
            <input type="text" class="form-control" name="NIK" id="NIK" value="<?php echo $penduduk['NIK']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="Nama" id="Nama" value="<?php echo $penduduk['Nama']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="Tlp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" name="Tlp" id="Tlp" value="<?php echo $penduduk['Tlp']; ?>" required>
        </div>
        <button type="submit" class="btn btn-custom w-100">Simpan Perubahan</button>
    </form>

    <a href="<?php echo base_url('home'); ?>" class="btn-back">Kembali</a>
</div>

<!-- jQuery for Form Validation -->
<script>
    $(document).ready(function () {
        $('#edit-form').on('submit', function (e) {
            let nik = $('#NIK').val().trim();
            let nama = $('#Nama').val().trim();
            let tlp = $('#Tlp').val().trim();

            if (nik === '' || nama === '' || tlp === '') {
                e.preventDefault();
                alert('Semua field wajib diisi!');
            }
        });
    });
</script>

</body>
</html>
