<?php

    include('koneksi.php');

    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_mahasiswa WHERE id_mhs = $id LIMIT 1";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>
    
  <div class="container" style="margin-top:80px">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            Edit Mahasiswa
          </div>
          <div class="card-body">
            <form action="update.php" method="POST">

                <div class="form-group mb-3">
                    <label>NIM</label>
                    <input type="number" name="nim_mhs" value="<?php echo $row['nim_mhs']?>" placeholder="Masukkan NIM Mahasiswa" class="form-control" required>
                    <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs'] ?>">
                </div>

                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input type="text" value="<?php echo $row['nama_mhs']?>" class="form-control" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" required>
                </div>

                <div class="form-group mb-3">
                    <label>Jurusan</label>
                    <input type="text" value="<?php echo $row['jurusan_mhs']?>" class="form-control" name="jurusan_mhs" placeholder="Masukkan Jurusan" required>
                </div>
                    
                <button type="submit" class="btn btn-success">update</button>
                <button type="reset" class="btn btn-warning">reset</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


    

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>