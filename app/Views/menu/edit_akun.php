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
    <!-- Navbar Awal-->
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
      <div class="container">
      <a class="navbar-brand fs-6 fw-bold" href="/">
      <img src="/Assets/logo.png" alt="Logo" width="24" height="24" class="d-inline-block align-text-top"></img>
      SIMS PPOB-REFTHA
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fs-6 fw-bold" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/pages/topup">Top Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pages/transaction">Transaction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pages/akun">Akun</a>
            </li>            
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar akhir -->
    <!-- info user -->
    <section id="profil">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2">
                <div class="user-img text-center">
                    <img src="/Assets/Profile Photo.png" id="photo" alt="Photo">
                    <input type="file" id="file">
                    <label for="file" id="uploadbtn"><i class="bi bi-pencil-fill"></i></label>
                </div>
                </div>                
            </div>
        <form action="/pages/akun">
            <div class="row text-center">
                <div class="col pt-3">
                    <h3>Nama User</h3>
                </div>
            </div>
            <div class="row justify-content-center">                
                <div class="col-md-6 pt-4">
                <h5>Email</h5> 
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" class="form-control" placeholder="your@email" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                </div>                
            </div> 
            <div class="row justify-content-center">                
                <div class="col-md-6 pt-4">
                <h5>Nama Depan</h5> 
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" placeholder="nama depan" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                </div>                
            </div> 
            <div class="row justify-content-center">                
                <div class="col-md-6 pt-4">
                <h5>Nama belakang</h5> 
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" placeholder="nama belakang" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                </div>                
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 pt-4">
                <div class="d-grid gap-4">
                    <button class="btn btn-danger" type="submit">Simpan</button>
                </div>
                </div>
            </div> 
        </form>           
        </div>        
    </section>    
    <!-- info user -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>