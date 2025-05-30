<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Penduduk</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .tombol {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }
        .tombolSimpan {
            background-color: #BF00FF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }
        body {
            padding-top: 50px;
        }
        .tambah-container {
            max-width: 50%;
            margin: 100px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .btn-large {
            padding: 5px 20px;
            font-size: 11pt;
        }
        .tombol-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="tambah-container">

    <h3 class="text-center">Tambah Data Penduduk</h3>
    <form method="post" action="<?php echo base_url('penduduk/simpan'); ?>" class="mt-4">
        <div class="mb-3">
            <label for="NIK" class="form-label">Nomor Induk Kependudukan (NIK)</label>
            <input type="text" class="form-control" id="NIK" name="NIK" required>
        </div>

        <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="Nama" name="Nama" required>
        </div>

        <div class="mb-3">
            <label for="Tlp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="Tlp" name="Tlp" required>
        </div>

        <div class="tombol-container">
            <button type="submit" class="btn tombolSimpan">Simpan</button>
            <a href="<?php echo base_url('home'); ?>" class="btn tombol">Kembali</a>
        </div>
    </form>

</div>

</body>
</html>
