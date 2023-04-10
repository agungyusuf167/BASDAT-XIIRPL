<?php 

require 'functions.php';

$id = $_GET["id"];

if(hapusTransaksi($id) > 0 ){
    echo "
        <script type='text/javascript'>
            alert('Data Produk Berhasil Dihapus');
            window.location = 'transaksi.php';
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Data Produk Gagal Dihapus');
        window.location = 'transaksi.php';
    </script>
";
}
