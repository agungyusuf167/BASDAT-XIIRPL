<?php 

require 'functions.php';

$id = $_GET["id"];

if(hapusProduk($id) > 0 ){
    echo "
        <script type='text/javascript'>
            alert('Data Produk Berhasil Dihapus');
            window.location = 'produk.php';
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Data Produk Gagal Dihapus');
        window.location = 'produk.php';
    </script>
";
}
