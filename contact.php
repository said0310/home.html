  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Muhammad Sa'id Najih</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="segitiga.php">Segitiga</a>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="kubus.php">Kubus</a>
            </li>
            </li>
        </div>
      </div>
    </nav>
    <div>
      <div class="container-md">
        <h2>Formulir</h2>
        <form>
          <div class="d-flex align-items-center mb-3">
            <label for="exampleInputEmail1" class="form-label me-2">Email</label>
            <input type="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          Jenis Kelamin
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="laki">
            <label class="form-check-label" for="male">Laki - Laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="perempuan">
            <label class="form-check-label" for="female">Perempuan</label>
          </div><br>
          <div class="d-flex align-items-center">
            <div class="me-2">Hobi </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" value="" id="checkBerenang">
              <label class="form-check-label" for="checkBerenang">Berenang</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" value="" id="checkSepakBola">
              <label class="form-check-label" for="checkSepakBola">Sepak Bola</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" value="" id="checkNaikGunung">
              <label class="form-check-label" for="checkNaikGunung">Naik Gunung</label>
            </div>
          </div>
          <div class="d-flex align-items-start mt-3">
            <div class="me-2">Pesan dan Kesan</div>
            <div class="flex-grow-1">
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2"></label>
              </div>
            </div>
          </div><br>
          <div class="row mb-3 align-items-center">
            <div class="col-auto">
              <label class="form-label" for="tanggal">Tanggal Lahir</label>
            </div>
            <div class="col">
              <input type="date" class="form-control w-50" id="tanggal" />
            </div>
          </div>
          <div class="card-footer text-body-secndary text-end">
            <h6>Yogyakarta, 20 Desember 2025</h6>
          </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
  </body>

  </html>