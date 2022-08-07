<?php
$nama = strip_tags(urldecode($_GET['nama']));
if (empty($nama)) {
    $nama = "KilersBotz";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sertifikat tolol</title>
    <meta name="title" content="Sertifikat tolol untuk <?= $nama ?>">
    <meta name="description" content="Sertifikat tolol ini diberikan kepada <?= $nama ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tes-php.kilersbotz.repl.co/tolol.php?nama=Elunya">
    <meta property="og:title" content="Sertifikat tolol untuk <?= $nama ?>">
    <meta property="og:description" content="Sertifikat tolol ini diberikan kepada <?= $nama ?>">
    <meta property="og:image" content="https://tolol.ibnux.com/img.php?nama=<?= urlencode($nama) ?>">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://tes-php.kilersbotz.repl.co/tolol.php?nama=Elunya">
    <meta property="twitter:title" content="Sertifikat tolol untuk <?= $nama ?>">
    <meta property="twitter:description" content="Sertifikat tolol ini diberikan kepada <?= $nama ?>">
    <meta property="twitter:image" content="https://tolol.ibnux.com/img.php?nama=<?= urlencode($nama) ?>">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-4">
                <form>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="nama" value="<?=$nama?>" class="form-control" placeholder="Nama">
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-block btn-primary">Buat</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Features</th>
                        <th>Status</th>
                        <th>Parameter</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Epep1</td>
                        <td><span class="alert-success">Active</span></td>
<td>Nama</td>
                        <td><a href="epep1.php?nama=<?=$nama?>" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>Epep2</td>
                        <td><span class="alert-success">Active</span></td>
<td>Nama</td>
                        <td><a href="epep2.php?nama=<?=$nama?>" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>Epep3</td>
                        <td><span class="alert-success">Active</span></td>
<td>Nama</td>
                        <td><a href="epep3.php?nama=<?=$nama?>" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>Epep4</td>
                        <td><span class="alert-success">Active</span></td>
<td>Nama</td>
                        <td><a href="epep4.php?nama=<?=$nama?>" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>Tolol</td>
                        <td><span class="alert-success">Active</span></td>
<td>Nama</td>
                        <td><a href="tolol.php?nama=<?=$nama?>" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>