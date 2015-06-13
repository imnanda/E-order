<?php
include "proses/lib_function.php";
koneksi_db();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
include "navbar.php";
?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Forms Tambah Produk
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Tambah Produk
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">

                <form role="form" action="proses/tambah_produk.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input class="form-control" name="namaproduk">
                    </div>
                    <div class="form-group">
                        <label>Kategori Produk</label>
                        <select class="form-control" name="id_kategori">
                            <?php
                            $res = mysql_query("SELECT id_kategori,nama,dihapus FROM kategori ORDER BY nama");
                            if ($res === false) {
                                die(mysql_error());
                            }

                            while ($data = mysql_fetch_array($res)) {
                                ?>
                                <option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['nama']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Merek</label>
                        <select class="form-control" name="id_merk">
                            <?php
                            $res = mysql_query("SELECT id_merk,nama,dihapus FROM merk ORDER BY nama");
                            if ($res === false) {
                                die(mysql_error());
                            }

                            while ($data = mysql_fetch_array($res)) {
                                ?>
                                <option value="<?php echo $data['id_merek']; ?>"><?php echo $data['nama']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input class="form-control" name="harga">

                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="form-group">
                        <label>Diskon %</label>
                        <input class="form-control" name="diskon">
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input class="form-control" name="stok">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" rows="3" name="deskripsi"></textarea>
                    </div>

                    <div class="form-group">
                        <label>File input</label>
                        <input type=file name="filegambar">
                    </div>
                    <button type="submit" class="btn btn-default">Submit Button</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>

                </form>

            </div>

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
