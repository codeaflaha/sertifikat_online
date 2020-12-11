<?php

require_once 'config/koneksi.php';
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $institusi = $_POST['institusi'];
  $id = $_POST['id'];

  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE peserta SET nama = '$nama', institusi = '$institusi' WHERE no_registrasi = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data peserta berhasil diubah'); window.location.href='peserta.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data peserta gagal diubah'); window.location.href='peserta.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: peserta.php'); 
}