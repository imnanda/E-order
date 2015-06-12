<?php
include "lib_function.php";
if($_FILES['filegambar']['error']==0){
    $link=koneksi_db();
    $nama=addslashes($_POST['namaproduk']);
    $id_merk=$_POST['id_merk'];
    $id_kategori=$_POST['id_kategori'];
    $harga=$_POST['harga'];
    $diskon=$_POST['diskon'];
    $stok=$_POST['stok'];
    $deskripsi=$_POST['deskripsi'];
    $filegambar=$_FILES['filegambar']['name'];
    $namafilebaru="gambar/".$filegambar;
    if(move_uploaded_file($_FILES['filegambar']['tmp_name'],
            $namafilebaru)==true){
        $sql="INSERT INTO produk VALUES(null,'$id_kategori','$id_merk','$nama','$harga','1','$diskon','$stok','Y','$deskripsi','$namafilebaru','T')";
        $res=mysql_query($sql);
        if($res){
            $id_produk=mysql_insert_id($link);
            echo "Data produk baru telah disimpan dengan ID $id_produk";
        }
        else{
            echo "Data produk baru gagal disimpan dengan kesalahan ".mysql_error();
        }
    }
}
else
    echo "Penambahan produk gagal karena upload file gambar gagal";
?>