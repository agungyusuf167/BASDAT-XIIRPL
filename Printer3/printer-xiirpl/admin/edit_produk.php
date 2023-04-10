<?php 
session_start();
require 'functions.php';

$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan Login Terlebih Dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(editProduk($_POST) > 0){
        echo "
            <script type='text/javascript'>
                alert('Data Produk Berhasil Diubah');
                window.location = 'produk.php';
            </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Produk Gagal Diubah');
            window.location = 'produk.php';
        </script>
    ";
    }
}


?>

<?php require '../layout/sidebar.php'?>
<div id="main">
<?php require '../layout/navbar-admin.php'; ?>
<div class="content container-fluid">
    <div class="box">
    <h3>Edit Data Produk</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_produk" class="form-control" value="<?= $produk["id_produk"]; ?>">

        <label for="nama_produk">Nama Produk</label><br>
        <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= $produk["nama_produk"]; ?>"><br>

        <label for="foto">Foto</label><br>
        <input type="file" name="foto" id="foto" class="form-control" value="<?= $produk["foto"] ?>"><br>

        <label for="harga">Harga</label><br>
        <input type="text" name="harga" id="harga" class="form-control" value="<?= $produk["harga"] ?>"><br>

        <label for="stok">Stok</label><br>
        <input type="text" name="stok" id="stok" class="form-control" value="<?= $produk["stok"] ?>"><br>

        <label for="deskripsi">Deskripsi</label><br>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="7" class="form-control"><?= $produk["deskripsi"]; ?></textarea><br>
        
        <button class="btn btn-success" type="submit" name="kirim">Edit</button>
    </form>
   </div>
</div>
</div>
<?php require '../layout/footer-admin.php'; ?>
