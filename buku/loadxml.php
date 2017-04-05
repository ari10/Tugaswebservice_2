<?php
include 'connect.php';
    if( !$xml = simplexml_load_file('record.xml') ) //using simplexml_load_file function to load xml file
    {
        echo 'load XML failed ! ';
    }
    else
    {
        echo '<h1>Daftar Buku</h1>';
		foreach( $xml as $record ) //parse the xml file into object
        {
			$judul = $record->judul; //get the childnode title
			$pengarang = $record->pengarang; //get the child node author
			$penerbit = $record->penerbit; //get the child node publisher
			$bulan = $record->date->bulan; //get the child node month
			$tahun = $record->date->tahun;	 //get the child node year

            echo 'Judul : '.$judul.'<br />';
            echo 'Pengarang : '.$pengarang.'<br />';
			echo 'Penerbit : '.$penerbit.'<br />';
			echo 'Bulan : '.$bulan.'<br />';
			echo 'Tahun : '.$tahun.'<br />';
			echo '<br>';

//save to database
			$q = "INSERT INTO penerbit VALUES('','$judul','$pengarang','$penerbit','$bulan $tahun')";
			$result = mysql_query($q);
        }
			if ($result) {
			echo '<h2>Data berhasil di simpan di database </h2>';
			}
			else echo '<h2>Data gagal tersimpan</h2>';
    }
?> 