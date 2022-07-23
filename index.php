

  <?php
  $txt_file    = file_get_contents('data.txt');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);

  echo '<h3>Data Pemesan</h3>';
  echo '<a href="form.php">Tambah Data</a></br></br>';
  $i=1;

  foreach($rows as $row => $data)
  {

        // Explode digunakan untuk memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
        $row_data = explode('|', $data);

        $info[$row]['nama']           = $row_data[0];
        $info[$row]['alamat']         = $row_data[1];
        $info[$row]['no_telp']          = $row_data[2];
        $info[$row]['no_pilihan_kamar']  = $row_data[3];

        // Menampilkan Data

        echo 'Bariske- ' . $i++ . '<br />';
        echo ' NAMA: <b>' . $info[$row]['nama'] . '</b><br />';
        echo ' ALAMAT: <b>' . $info[$row]['alamat'] . '</b><br />';
        echo ' NO TELP: <b>' . $info[$row]['no_telp'] . '</b><br />';
        echo ' NO PILIHAN KAMAR: <b>' . $info[$row]['no_pilihan_kamar'] . '</b><br />';
        

        echo "<hr>";

  }
  ?>

</body>
</html>