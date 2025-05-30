<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CDN Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 30%;
            margin: 70px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .text-error {
            color: red;
            font-size: 0.9em;
        }
        .btn-large {
            padding: 5px 20px;
            font-size: 11pt;
        }
        .judul{
            text-align: center;
            color:rgb(0, 123, 255);
            font-weight: bold;
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

<h2 class="judul" style="margin-top: 50px;">SIPENDUDUKS</h2>
<p class="judul">Sistem Informasi Penduduk Surabaya</p>

<div class="login-container">
    <h4 class="text-center" style="margin-bottom: 30px;">Login</h4>

    <?php if ($this->session->flashdata('error')): ?>
        <p class="text-error text-center"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <form id="login-form" action="<?php echo base_url('Login/authenticate'); ?>" method="post">
        <div class="mb-3">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-custom w-100">Login</button>
    </form>

    <div class="text-center mt-3">
        <a href="<?php echo base_url('Signup/daftar'); ?>" class="btn btn-outline-success btn-large w-60">Sign Up</a>
    </div>
</div>

</body>
</html>
