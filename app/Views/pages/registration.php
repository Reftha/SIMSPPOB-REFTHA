<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  
    <section class="regis d-flex">
      <div class="regis-left bg- w-50 h-100">
        <div class="row justify-content-center">
          <div class="col-6">
            <div class="header">
              <p class="simsregistext text-center">
              <img src="/Assets/Logo.png" alt="Logo"> SIMS PPOB-REFTHA
              </p><h3 class="mb-5 text-center">Lengkapi data untuk membuat akun</h3>
            </div>

          <form action="/pages/login">

            <div class="input-group flex-nowrap mb-4">
              <span class="input-group-text" id="addon-wrapping">@</span>
              <input type="email" class="form-control" placeholder="masukan email anda" aria-label="email" aria-describedby="addon-wrapping" required>
            </div>

            <div class="input-group flex-nowrap mb-4">
              <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill"></i></span>
              <input type="text" class="form-control" placeholder="masukan nama depan" aria-label="nama depan" aria-describedby="addon-wrapping" required>
            </div>

            <div class="input-group flex-nowrap mb-4">
              <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill"></i></span>
              <input type="text" class="form-control" placeholder="masukan nama belakang" aria-label="nama belakang" aria-describedby="addon-wrapping" required>
            </div>

            <div class="input-group flex-nowrap mb-4">
              <span class="input-group-text" id="addon-wrapping"><i class="bi bi-lock"></i></span>
              <input type="password" class="form-control" placeholder="buat password" aria-label="password" aria-describedby="addon-wrapping" required>
            </div>

            <div class="input-group flex-nowrap mb-5">
              <span class="input-group-text" id="addon-wrapping"><i class="bi bi-lock"></i></span>
              <input type="password" class="form-control" placeholder="konfirmasi password" aria-label="konfirmasi password" aria-describedby="addon-wrapping" required>
            </div>

            <div class="d-grid gap-2 mb-3">
              <button class="btn text-white" type="submit" style="background-color: #F13B2F;">Register</button>
            </div>
            
          </form>

            <div>
              <p>sudah punya akun? login <a href="/pages/login" class="text-danger text-decoration-none fw-bold">di sini</a></p>
            </div>
          </div>
        </div>        
      </div>
      <div class="login-right w-50 h-100">
        <div class="row justify-content-center">
          <div class="col">
            <img src="/Assets/Illustrasi Login.png" alt="bglogin" class="img-fluid">
          </div>
        </div>        
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>