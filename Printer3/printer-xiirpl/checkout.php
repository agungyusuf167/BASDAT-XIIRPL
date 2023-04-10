<?php include 'layout/navbar.php'; ?>

<?php
if (empty($_SESSION["cart"] || isset($_SESSION["cart"]))) {
    echo " 
    <script type='text/javascript'>
        alert('Keranjang Anda Masih Kosong, Silahkan Belanja Terlebih Dahulu');
        window.location= 'index.php'
    </script>
    ";
}
?>

<div class="checkout container my-3">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="tanggal_transaksi">Tanggal Transaksi</label><br>
                    <input class="form-control" type="date" name="tanggal_transaksi" id="tanggal_transaksi"
                        value="<?= date('Y-m-d'); ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="alamat">Alamat</label><br>
                    <input class="form-control" type="text" name="alamat" id="alamat">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="nomor_whatsapp">No Telepon</label><br>
                            <input class="form-control" type="number" name="nomor_whatsapp" id="nomor_whatsapp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="nama_penerima">Nama Penerima</label><br>
                            <input class="form-control" type="text" name="nama_lengkap" id="nama_penerima"
                                value="<?= $_SESSION["nama_lengkap"]; ?>">
                        </div>
                    </div>
                </div>

                <?php foreach ($_SESSION["cart"] as $id_produk => $kuantitas) : ?>
                <?php
                $data = query("SELECT * FROM produk WHERE id_produk = '$id_produk'")[0];
                $subTotal = $data["harga"] * $kuantitas;
                ?>
                <div class="row" hidden>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label" for="nama_produk">Nama Produk</label><br>
                            <input class="form-control" type="text" name="nama_produk" id="nama_produk"
                                value="<?= $data["nama_produk"]; ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label" for="subtotal">Sub Total Harga</label><br>
                            <input class="form-control" type="text" name="subtotal" id="subtotal"
                                value="Rp.<?= number_format($subTotal , 0, ',', '.'); ?>">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="foto" value="<?= $data["foto"]; ?>">
                <?php endforeach; ?>
                <button class="btn btn-success" type="submit" name="checkout">Checkout</button>
            </form>
        </div>
    </div>
</div>

<!-- fungsi cekout -->
<?php
if (isset($_POST['checkout'])) {
    if (checkoutProduct($_POST) > 0) {
        echo "
        <script type = 'text/javascript'>
        alert('Barang Berhasil Di Checkout!');
        window.location='index.php';
        </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!-- fungsi cekout -->
<?php include 'layout/footer.php'; ?>