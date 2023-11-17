<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMS PPOB-REFTHA</title>

    <link rel="stylesheet" href="/style.css" />
    <link rel="stylesheet" href="/akun.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  </head>
  <body>
    
    <section style="padding-top: 8%;">
      <div class="container">
        <div class="row row justify-content-between">
          <div class="col-md-5">
            <img src="/Assets/Profile Photo.png" alt="">
            <p><br>
              Selamat Datang<br>
              <b class="fs-2">Nama User</b>
            </p>
          </div>
          <div class="col-md-7" style="background-image: url(/Assets/Background\ Saldo.png); background-repeat: no-repeat;">
            <br>
            <h5 class="text-white">Sado anda</h5>
            <h1 class="text-white">Rp</h1>
            <p class="text-white">Lihat saldo</p>
          </div>
        </div>
      </div>
    </section>
    
<?= $this->include('layout/navbar'); ?>
<?= $this->renderSection('content'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>