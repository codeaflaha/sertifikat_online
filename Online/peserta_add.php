 <?php
				require_once 'config/koneksi.php';
				if (isset($_POST['submit'])) {
			   $nama = $_POST['nama'];
			   $institusi = $_POST['institusi'];			
				  
				$q = $conn->query("INSERT INTO peserta VALUES (NULL, '$nama', '$institusi')");
			 if ($q) {
    // pesan jika data tersimpan
  echo "<script>alert('Data peserta berhasil ditambahkan'); 
	window.location.href='peserta.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data peserta gagal ditambahkan');
	window.location.href='peserta.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: peserta.php');
}