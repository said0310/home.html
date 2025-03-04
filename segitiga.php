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
            <a class="nav-link" href="contact.php ">Contact</a>
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
  <div class="container">
    <h3>
      <center>Perhitungan Luas Segitiga</center>
    </h3>
    <form action="segitiga.php" method="post">
      <table>
        <tr>
          <td>Masukkan Alas </td>
          <td>:</td>
          <td><input type="text" name="panjang" class="col-12"></td>
        </tr>
        <tr>
          <td>Masukkan Tinggi </td>
          <td>:</td>
          <td><input type="text" name="tinggi" class="col-12"></td>
        </tr>
        <br>
      </table>
      <br>
      <button type="submit" class="btn btn-primary">submit</button>
    </form>
    <br>
    <?php
    $panjang = $_POST['panjang'];
    $tinggi = $_POST['tinggi'];

    $luas = $panjang * $tinggi / 2;

    echo "Hasil :  $luas";

    ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>

</html>