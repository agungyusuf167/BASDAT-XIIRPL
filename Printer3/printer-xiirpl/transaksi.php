<?php
include 'layout/navbar.php';

$transaksi = query("SELECT * FROM transaksi");

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan Login Terlebih Dahulu')
        window.location = 'login/index.php';
    </script>
    ";
}

?>
<div class="container mt-3">

    <h3>Pesanan Anda</h3>
    <table class="table table-responsive table-hover mb-5">
        <tr>
            <th>No.</th>
            <th>Foto</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th>Nomor Telpon</th>
            <th>Produk</th>
            <th>Total Harga</th>
            <th>Status</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($transaksi as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="image/<?= $data["foto"]; ?>" alt="" width="70"></td>
                <td><?= $data["tanggal_transaksi"]; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td><?= $data["nomor_whatsapp"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td>Rp. <?= number_format($data["subtotal"], 0, ',', '.'); ?></td>
                <td><?= $data["status"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </div>
<?php include 'layout/footer.php'; ?>