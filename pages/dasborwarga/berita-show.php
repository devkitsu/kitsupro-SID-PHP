
<?php
include("top.php");
include("../../config/koneksi.php");
// ambil dari database
$get_id_berita=$_GET['id_berita'];
$query = "SELECT berita.*, user.* FROM berita, user where berita.id_user=user.id_user
        AND berita.id_berita='$get_id_berita'";

$hasil = mysqli_query($db, $query);
$row = mysqli_fetch_array($hasil);
?><div class="isi"><br>
    <a><center><h1><?php echo $row['judul'] ?></h1><hr /></center><br>
      <div class="thumb"><img style="float:top;"class="img-responsive center-block" src="../../pages/berita/res/<?php echo $row['gambar'] ?>"></div>
        <blockquote><h5>Tanggal: <?php echo $row['tanggal'] ?></h5>
        <h5>Author: <?php echo $row['nama_user'] ?></h5></blockquote>
        <p><font size="5"><blockquote><blockquote><?php echo $row['isi']; ?></blockquote></blockquote></font></p><hr />
    </a>
</div>

<?php
include("berita.php");
include("../../config/footer.php");
include("bottom.php");
?>
