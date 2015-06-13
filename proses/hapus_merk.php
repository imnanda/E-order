<?php
include "lib_function.php";
$id_merek = $_GET['id_mrek'];
$link = koneksi_db();
$sql = "DELETE FROM merk WHERE id_merk='$id_merek'";
$res = mysql_query($sql, $link);
if ($res) {
    $id_merk = mysql_insert_id($link);
    header("Location:../view_merek.php");
    //var_dump($res);
} else {
    ?>
    <div class="error">Terjadi kesalahan dalam penyimpanan data merk baru. Silahkan diulang lagi.<br></div>
<?php
}
?>