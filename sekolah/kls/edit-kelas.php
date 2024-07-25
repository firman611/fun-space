<?php 
  
  include('../koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_kelas WHERE id_kelas = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Kelas</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT KELAS
            </div>
            <div class="card-body">
              <form action="index.php?page=update-kelas" method="POST">
                
                <div class="form-group">
                  <label>KODE KELAS</label>
                  <input type="text" name="kode_kelas" value="<?php echo $row['kode_kelas'] ?>" placeholder="Masukkan Kode Kelas" class="form-control">
                  <input type="hidden" name="id_kelas" value="<?php echo $row['id_kelas'] ?>">
                </div>

                <div class="form-group">
                  <label>NAMA KELAS</label>
                  <input type="text" name="nama_kelas" value="<?php echo $row['nama_kelas'] ?>" placeholder="Masukkan Nama Kelas" class="form-control">
                </div>

                <div class="form-group">
                  <label>WALI KELAS</label>
                  <textarea class="form-control" name="wali_kelas" placeholder="Masukkan Wali Kelas" rows="4"><?php echo $row['wali_kelas'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>