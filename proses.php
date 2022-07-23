<?php

  // Menangkap isi variabel dari file yang telah kita isi pada form.php
  $nama = $_POST['nama'];
  $no_telp = $_POST['no_telp'];
  $alamat = $_POST['alamat'];
  $no_pilihan_kamar = $_POST['no_pilihan_kamar'];

  // Format data yang akandiparsing
  $data = "\n$nama|$no_telp|$alamat|$no_pilihan_kamar";

  // Buka file data.txt, kemudian tuliskan isi variabel di atas kedalam data.txt
  $fh = fopen("data.txt", "a");
  fwrite($fh, $data);

  // Tutup file data.txt
  fclose($fh);

  // Keterangan bila data berhasil di input
  print "Data Telah Tersimpan.</br><a href='index.php'>Kembali ke Index >></a>";

?>