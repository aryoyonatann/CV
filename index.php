<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .form-container {
      background: linear-gradient(45deg, #3498db, #8e44ad);
      border: 1px solid #ced4da;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
      width: 400px;
      color: #fff;
    }

    h2 {
      text-align: center;
      color: #ffffff;
    }

    .error {
      color: #dc3545;
      text-align: center;
    }

    input {
      border: 1px solid #ced4da;
      border-radius: 4px;
      padding: 10px;
      width: 100%;
      margin-bottom: 15px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #0056b3;
    }

    .register-link {
      text-align: center;
      margin-top: 15px;
    }

    .register-link a {
      color: #28a745;
    }

    .register-link a:hover {
      text-decoration: underline;
    }
  </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <form action="login.php" method="post" class="form-container">
        <div class="background">
        <h2 style="text-align: center;">LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <div class="mb-3">
          <input type="number" name="id" class="form-control" placeholder="Nomor Indeks Mahasiswa">
        </div>
        <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email Anda">
        </div>
        <center><button type="submit" class="btn btn-primary btn-costum">Login</button></center>
        <p class="register-link">Belum punya akun? Register klik <a href="register.php">disini</a></p>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
