<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h2>Aplikasi penyimpanan data pada file TXT</h2>
     <hr>
     <form action="simpan.php" method="post">
          Nama wilayah :
          <select name="wilayah" id="">
               <option value="">DKI Jakarta</option>
               <option value="">Jawa Barat</option>
               <option value="">Banten</option>
               <option value="">Jawa Tengah</option>
          </select>
          <br>
          Jumlah Positif :
          <input type="text" name="jumlah_positif" required>
          <br>
          Jumlah Dirawat :
          <input type="text" name="jumlah_dirawat" required>
          <br>
          Jumlah Sembuh :
          <input type="text" name="jumlah_sembuh" required>
          <br>
          Jumlah Meninggal :
          <input type="text" name="jumlah_meninggal" required>
          <br>
          Nama Operator :
          <input type="text" name="nama_operator" required>
          <br>
          NIM Mahasiswa :
          <input type="text" name="nim_mahasiswa" required>
          <td><input type="submit" value="simpan"></td>
 </tr>
 </table>
 </form>
</body>
</html>
<?php
 $sql = "SELECT * FROM pasien_covid19";
 $query = mysqli_query($db, $sql);

 $nama= trim($_POST['nama_operator']);
 $positif = trim($_POST['jumlah_positif']);
 $dirawat = trim($_POST['jumlah_dirawat']);
 $sembuh = trim($_POST['jumlah_sembuh']);
 $wilayah = trim($_POST['nama_wilayah']);
 $meninggal = trim($_POST['jumlah_meninggal']);
 $nim = trim($_POST['nim_mahasiswa']);
 $namafile = "data.txt"; 

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
     <div class="atas">
         <h2>Data Pemantauan Covid19 Wilayah <?php echo "$wilayah" ?></h2>

         <h2>Per <?php echo date('l, d-m-Y  h:i:s a'); ?> </h2>
         <h2><?php echo"$nama" ?> / <?php echo "$nim" ?></h2>
         </div>
         <table width="100%" border="">
             <tr>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>

             </tr>
             <tr>
                <td><?php echo "$positif" ?></td>
                <td><?php echo "$dirawat" ?></td>
                <td><?php echo "$sembuh" ?></td>
                <td><?php echo "$meninggal" ?></td>
             </tr>

         </table>

 </body>
 </html>