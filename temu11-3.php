<!-- Skrip digabung dalam satu file -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengelolaan Form Cara #1</title>
</head>
<body>
    <form action="" method="post" name="input">
    	Masukkan Nama Anda : <input type="text" name="nama"><br>
    	<input type="submit" name="input" value="Tampilkan"/>
    </form>
</body>
</html>

<?php
	if (isset($_POST['input'])) {
		$nama=$_POST['nama'];
		echo "Nama Anda : <br>$nama </b>";
	}
?>