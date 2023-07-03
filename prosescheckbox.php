<?php
if (isset($_POST['Pilih'])) {
	echo "Makanan yang anda pesan adalah : <br>";
	if (isset($_POST['pesan1'])) {
		echo"+ " .$_POST['pesan1'] . "<br>";
	}
	if (isset($_POST['pesan2'])) {
		echo"+ " .$_POST['pesan2'] . "<br>";
	}
	if (isset($_POST['pesan3'])) {
		echo"+ " .$_POST['pesan3'] . "<br>";
	}
	if (isset($_POST['pesan4'])) {
		echo"+ " .$_POST['pesan4'] . "<br>";
	}
}
?>