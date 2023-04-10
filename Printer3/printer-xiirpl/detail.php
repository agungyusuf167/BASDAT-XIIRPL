<?php
include 'layout/navbar.php';

$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

?>
<div id="detail" class="container mt-3">
    <form action="" method="post">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
        <img src="image/<?= $produk["foto"]; ?>" class="w-100">
        </div>
        <div class="col-md-6">
            <div class="detail-container">
                <h1><?= $produk["nama_produk"]; ?></h1>
                <hr>
                <h4>Rp. <?= number_format($produk["harga"], 0, ',', '.'); ?></h4>
                <div class="text-secondary">Tersisa : <?= $produk["stok"]; ?></div>
                <div><?= $produk["deskripsi"]; ?></div>
                <div class="mt-3">
                    <label for="qty">Masukkan Jumlah Produk Yang Ingin Dibeli</label>
                    <input class="form-control" type="number" name="qty" id="qty">
                </div>
                <div class="mt-3">
                    <button class="btn btn-success" type="submit" name="beli">Masukkan Ke Keranjang</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<?php

if (isset($_POST["beli"])) {
    $qty = $_POST["qty"];
    $_SESSION["cart"][$id] = $qty;
    echo "
    <script type='text/javascript'>
        window.location= 'keranjang.php';
    </script>
    ";
}
?>
<?php include 'layout/footer.php'; ?>