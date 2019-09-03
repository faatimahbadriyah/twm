<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    $modalName = $_POST['modalName'];
    $orderDate = $_POST['orderDate'];
    $quantity = $_POST['quantity'];
    $ipwDate = $_POST['ipwDate'];
    $trialDate = $_POST['trialDate'];

    // buat query
    $sql = "INSERT INTO tb_pengajuan (modalName, orderDate, quantity, ipwDate, trialDate, tanggal_pengajuan) VALUE ($modalName, '$orderDate', '$quantity', '$ipwDate', '$trialDate')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: main.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: main.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>