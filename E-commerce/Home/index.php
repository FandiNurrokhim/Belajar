<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Light Slider -->
    <link rel="stylesheet" type="text/css" href="css/lightslider.css">
    <!-- Jquery -->
    <script type="text/javascript" src="Js/Jquery.js"></script>
    <script type="text/javascript" src="Js/lightslider.js"></script>
    <title>Home</title>
</head>
<body>
 
<!-- Slider Item item -->
<?php
  include "../Controller/obat.php";
  $obat = new Obat();
  $data_obat = $obat->getObat();
  $counter = 0;
  foreach ($data_obat as $row) {
    $counter++;
    $item_class = $counter % 2 == 0 ? "item-a" : "item-b";
?>
       <!-- Slider Item item -->
  <section class="produkSlide" id="Produk">
    <div class="slider">
      <ul id="autoWidth" class="cs-hidden">
      <!-- Box Slider -->
      <li class="<?php echo $item_class ?>">
        <!-- Konten Slider -->
        <div class="box">
          <div class="slideImg">
            <img src="default.jpg" alt="1">
          </div>
          <!-- Detail barang -->
          <div class="detailBox">
            <div class="tipe">
              <a href="#"><?= $row['nama_obat']; ?></a>
              <span>Stok : <?= $row['stok_obat']; ?></span>
            </div>
            <!-- Harga -->
            <a href="#" class="harga"><?= $row['harga_obat']; ?></a>
          </div>
        </div>    
      </li>
    </div>
  </section>

<?php } ?>

    <script type="text/javascript" src="Js/script.js"></script>
</body>
</html>