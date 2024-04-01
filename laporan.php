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
  <div class="container text-center">
  <div class="row">
    <div class="col-4">     
    </div>
	<div class="col-md">
	<br><br>
    <center><h4>Laporan Penerimaan Zakat</h4></center>
	<form action="hitung.php" method="post">
		<div class=col-auto>
		 <label for="tempat" name="tempat" class="form-label mt-3">Tempat</label>
	  </div>
	  <center>
	  <div class=col-auto>
		 <select name="tempat" class="form-select mb-2" aria-label="tempat">
		  <option selected> - - - </option>
		  <option value="Al Abror">Al Abror</option>
		  <option value="Ulul Albab">Ulul Albab</option>
		  <option value="Al Ikhwan">Al Ikhwan</option>
		  <option value="An Nur">An Nur</option>
		  <option value="Al Ikhsan">Al Ikhsan</option>
		</select>
	  </div>
	  </center>
	  
	  <div class="row">
		<div class=col >
		   <input type="submit" class="btn btn-primary mt-2" value="hitung">
		</div>  
	  </div>
	  </form>
	  <br><br>
	    <?php if(isset($_GET['data1'])and isset($_GET['data2'])){?>
		<center><h6>Beras : <?php echo $_GET['data1']?> Kg</h6></center>
		<center><h6>Uang  : Rp. <?php echo $_GET['data2']?></h6></center>
		<?php }?>
    </div>
	<div class="col-4">     
    </div>
   </div>
	
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>