<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG UDINUS</title>

    <!-- Start Header -->
<a name="atas">
    <img src="awan 1.jpeg" width="100%">
    <!-- End Header -->
    <center>
    <h1>Dinus Student Blog</h1>
    <hr>
    <a href="index.php">Beranda</a> | 
    <a href="profile.php">Profil</a> |
    <a href="artikel.php">Artikel</a> |
    <a href="buku_tamu.php">Buku Tamu</a>
    <hr>
    </center>    
</head>
<body>

    <form action="" method="post">
        <p>Nama Lengkap</p>
        <input type="text" name="nama_lengkap" size="55">
        <p>Jenis Kelamin</p>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-Laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
        <!--akun-->
        <p>Aktif Pada Sosial Media</p>
            <input type="checkbox" name="facebook" value="Ya">Facebook
            <input type="checkbox" name="twitter" value="Ya">Twitter
            <input type="checkbox" name="instagram" value="Ya">Instagram
            <input type="checkbox" name="path" value="Ya">Path
        <p>Email</p>
        <input type="text" name="email" size="55">
        <p>Mengetahui web ini dari</p>
            <select name="info">
                <option selected="select">-= Pilih =-</option>
                <option value="web udinus">Web Udinus</option>
                <option value="surat kabar">Surat Kabar</option>
                <option value="teman kerabat">Teman/Kerabat</option>
                <option value="browsing internet">Browsing Internet</option>
            </select>
        <p> Pesan</p>
        <textarea name="pesan" cols="40" rows="3"></textarea>
        <br>
        <input type="submit" value="Kirim">
        <input type="reset" value="Batal">
    </form>
    <?php
if ($_POST) {
?>
  <table border="1" cellpadding="5">
    <tr>
      <th>Nama Lengkap</th>
      <th>Jenis Kelamin</th>
      <th>Email</th>
      <th>Aktif Pada Sosial Media</th>
      <th>Facebook Aktif</th>
      <th>Twitter Aktif</th>
      <th>Instagram Aktif</th>
      <th>Path Aktif</th>
      <th>Mengetahui Web dari</th>
      <th>Pesan</th>
    </tr>
    <tr>
      <td><?php echo $_POST['nama_lengkap'] ?></td>
      <td><?php echo $_POST['jenis_kelamin'] ?></td>
      <td><?php echo $_POST['email'] ?></td>
      <td>
        <?php
        if (isset($_POST['facebook'])) {
          echo $_POST['facebook'];
        }
        ?>
      </td>
      <td>
        <?php
        if (isset($_POST['twitter'])) {
          echo $_POST['twitter'];
        }
        ?>
      </td>
      <td>
        <?php
        if (isset($_POST['instagram'])) {
          echo $_POST['instagram'];
        }
        ?>
      </td>
      <td>
        <?php
        if (isset($_POST['path'])) {
          echo $_POST['path'];
        }
        ?>
      </td>
      <td><?php echo $_POST['info'] ?></td>
      <td><?php echo $_POST['pesan'] ?></td>
    </tr>
  </table>
<?php
}
?>
</body>
</html>