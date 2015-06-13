<?php
include "lib_function.php";
$nama = $_POST['namamerk'];
$status = $_POST['dihapus'];
$id_merk = $_POST['id_merk'];
//var_dump($nama);
//var_dump($status);
//var_dump($id_merk);
$link = koneksi_db();
$sql = "UPDATE merk SET nama='$nama', dihapus='$status' WHERE id_merk='$id_merk'";
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