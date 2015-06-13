<?php
include "lib_function.php";
$nama = $_POST['namakategori'];
$status = $_POST['dihapus'];
$id_kategori = $_POST['id_kategori'];
var_dump($nama);
var_dump($status);
var_dump($id_kategori);
$link = koneksi_db();
$sql = "UPDATE kategori SET nama='$nama', dihapus='$status' WHERE id_kategori='$id_kategori'";
$res = mysql_query($sql, $link); // Eksekusi SQL
if ($res) {
    $id_merk = mysql_insert_id($link);
    header("Location:../view_kategori.php");
    //var_dump($res);
} else {
    ?>
    <div class="error">Terjadi kesalahan dalam penyimpanan data merk baru. Silahkan diulang lagi.<br></div>
<?php
}
?>