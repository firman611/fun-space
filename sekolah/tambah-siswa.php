<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH SISWA
            </div>
            <div class="card-body">
              <form action="index.php?page=simpan-siswa" method="POST">
                
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" placeholder="Masukkan NISN Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Kode Kelas</label>
                  <textarea class="form-control" name="kode_kelas" placeholder="Masukkan Alamat Siswa" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label> Kelas</label>
                  <select name="kelas" class="form-control">
                  <?php
                    include('koneksi.php');
                    $no=1;
                    $query= mysqli_query($connection,"SELECT * FROM tbl_kelas");
                    while($row=mysqli_fetch_array($query)){

                      ?>
                   

                    <option value="<?php echo $row['kode_kelas']?>"><?php echo $row['nama_kelas']?> </option>
                    <?php }?>
                    
                 
                  </select>
                   
               
                </div>

                
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
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



