<?php
include "lib_function.php";
$id_kategori = $_GET['id_kategori'];
$link = koneksi_db();
$sql = "DELETE FROM kategori WHERE id_kategori='$id_kategori'";
$res = mysql_query($sql, $link);
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