<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .signup-container {
            max-width: 30%;
            margin: 100px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
        .btn-back {
            margin-top: 10px;
            display: block;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            color: #007bff;
        }
        .btn-back:hover {
            text-decoration: underline;
        }
        input::placeholder {
            font-style: italic;
            color: #888;
        }
        .btn-large {
        padding: 5px 20px;
        font-size: 11pt;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <h3 class="text-center mb-4">Sign Up</h3>

    <form method="post" action="<?php echo base_url('Signup/buat_akun'); ?>">
        <div class="mb-3">
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-custom w-100">Buat Akun</button>
    </form>

    <div class="text-center mt-3">
        <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-outline-primary btn-large w-60">Login</a>
    </div>
</div>

</body>
</html>
