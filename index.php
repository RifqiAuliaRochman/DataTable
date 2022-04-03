<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <title>Data Mahasiswa</title>
  </head>
  <body>

  <div class="container" style="margin-top:80px">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Data Mahasiswa
            <a href="tambah.php" class="btn btn-sm btn-success" style="margin-bottom: 10px; float:right;">Tambah Data</a>
            <a href="logout.php" class="btn btn-sm btn-danger" style="margin-right:7px; margin-bottom: 10px; float:right;">Logout</a>
          </div>
          <div class="card-body">
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">NIM</th>
                  <th scope="col">NAMA</th>
                  <th scope="col">JURUSAN</th>
                  <th scope="col">AKSI</th>                  
                </tr>
              </thead>
              <tbody>
                <?php 
                  include('koneksi.php');
                  $no = 1;
                  $query = mysqli_query($connection, "SELECT * FROM tbl_mahasiswa");
                  while($row = mysqli_fetch_array($query)){
                  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nim_mhs'] ?></td>
                      <td><?php echo $row['nama_mhs'] ?></td>
                      <td><?php echo $row['jurusan_mhs'] ?></td>
                      <td class="text-center">
                        <a href="edit.php?id=<?php echo $row['id_mhs'] ?>" class="btn btn-sm btn-warning">EDIT</a>
                        <a href="hapus.php?id=<?php echo $row['id_mhs'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                    </tr>
                  
                  <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


    

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
      $(document).ready( function () {
      $('#myTable').DataTable();
      } );
    </script>

  </body>
</html>