<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title><?php echo $judul; ?></title>
</head>

<body>
  <nav class="navbar fixed-top navbar-dark bg-dark expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="Beranda">Penjadwalan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="Beranda">Beranda</a>
          <a class="nav-link" href="<?= base_url('Mahasiswa'); ?>">Mahasiswa</a>
          <a class="nav-link" href="<?= base_url('Dosen'); ?>">Dosen</a>
          <a class="nav-link" href="<?= base_url('login/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </nav>