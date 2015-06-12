<?php
include "lib_function.php";
$nama = $_POST['namamerk']; // Ambil data dari Form
$link = koneksi_db();
$sql = "INSERT INTO merk values(null,'$nama','T')";
$res = mysql_query($sql, $link); // Eksekusi SQL
if ($res) {
    $id_merk = mysql_insert_id($link);
    header("Location:../view_merek.php");
} else {
    ?>
    <div class="error">Terjadi kesalahan dalam penyimpanan data merk baru. Silahkan diulang lagi.<br></div>
<?php
}
?>