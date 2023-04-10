<?php 
include 'layout/navbar.php';
?>
<?php $produk = query("SELECT * FROM produk"); ?>

<div id="home" class="produk container">
    <h2 class="my-3">Produk Yang Tersedia</h2>
    <div class="row">
        <?php $i = 1;?>
        <?php foreach($produk as $data) : ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="image/<?= $data['foto']; ?>" class="card-img-top" alt="<?= $data['nama_produk']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['nama_produk']; ?></h5>
                    <p class="card-text"><?= $data['deskripsi']; ?></p>
                    <hr>
                    <h6 class="card-text"><b>Harga :</b> Rp. <?= number_format($data['harga'], 0, ',', '.'); ?></h6>
                    <p class="text-secondary">Tersisa : <?= $data['stok']; ?></p>
                    <a href="detail.php?id=<?= $data["id_produk"]; ?>" class="btn btn-success">Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include 'layout/footer.php'; ?>