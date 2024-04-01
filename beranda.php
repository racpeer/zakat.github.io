<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Zakat MD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php include 'header.php'; ?>
  <?php include 'ceklogin.php'; ?>
  <br><br>
  
  <div class="container text-center">
  <div class="row">
    <div class="col-4">     
    </div>
    <div class="col-md mt-4">
       <div class=col-auto>
		<label for="" class="form-label">APLIKASI ZAKAT MD</label>
	  </div>  
	  <form action="simpan.php" method="post">
	  <div class=col-auto>
		<label for="tanggal" class="form-label">Tanggal Penerimaan</label>
	  </div>
	  <div class="mb-3">
		  <input type="date" name="date" class="form-control form-control-sm" id="tanggal">
	  </div>
	  
	  <div class=col-auto>
		<label for="nama" class="form-label">Nama Muzzaki</label>
	  </div>
	  <div class="mb-3">
		  <input type="text" name="nama" class="form-control form-control-sm" id="nama" placeholder="Masukan Nama">
	  </div>
	  
	  <div class=col-auto>
		<label for="alamat" class="form-label">Alamat</label>
	  </div>
	  <div class="mb-3">
		  <input type="text area" name="alamat" class="form-control form-control-sm" id="alamat" placeholder="Masukan Alamat">
	  </div>
	  
	  <div class=col-auto>
		<label for="telp" class="form-label">No. Telepon</label>
	  </div>
	  <div class="mb-3">
		  <input type="text" name="telp" class="form-control form-control-sm" id="telp" placeholder="Masukan No. Telp">
	  </div>
	  
	  <div class=col-auto>
		 <label for="jenis" name="jenis" class="form-label">Jenis Zakat</label>
	  </div>
	  <center>
	  <div class=col-auto>
		 <select name="jenis" class="form-select mb-2" aria-label="jenis">
		  <option selected>Fitrah</option>
		  <option value="Maal">Maal</option>
		</select>
	  </div>
	  </center>	
	  
	  <div class=col-auto>
		 <label for="kg" class="form-label">Jumlah Beras (Kg)</label>
	  </div>
	  <div class="mb-3">		 
		  <input type="number" step="0.01" min="0" name="kg" Value="0" class="form-control form-control-sm" id="rp" placeholder="Masukan Kg">
	  </div>
	  
	  <div class=col-auto>
		 <label for="rp"  class="form-label">Jumlah Rupiah</label>
	  </div>
	  <div class="mb-3">		 
		  <input type="number" min="0" name="rp" Value="0" class="form-control form-control-sm" id="rp" placeholder="Masukan Rupiah">
	  </div>
	  
	  <div class=col-auto>
		 <label for="petugas" class="form-label">Petugas</label>
	  </div>
	  <div class="mb-3">		 
		  <input type="text" name="petugas" class="form-control form-control-sm" id="petugas" placeholder="Nama Petugas">
	  </div>
	  
	  <div class=col-auto>
		 <label for="tempat" name="tempat" class="form-label">Tempat</label>
	  </div>
	  <center>
	  <div class=col-auto>
		 <select name="tempat" class="form-select mb-2" aria-label="tempat">
		  <option selected>Al Abror</option>
		  <option value="Ulul Albab">Ulul Albab</option>
		  <option value="Al Ikhwan">Al Ikhwan</option>
		  <option value="An Nur">An Nur</option>
		  <option value="Al Ikhsan">Al Ikhsan</option>
		</select>
	  </div>
	  </center>
	  
    </div>
    <div class="col-4">     
    </div>
  </div>
  <div class="row">
	<div class=col >
	   <input type="submit" class="btn btn-primary mt-2" value="Simpan">
	  <input type="reset" class="btn btn-danger mt-2" value="Batal">
	</div>  
  </div>
  </form>
</div>
  <br><br>
  <center><h6><?php echo "Admin : ".$_SESSION['username']; ?></h6>
  
  <?php include 'tabel.html'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>