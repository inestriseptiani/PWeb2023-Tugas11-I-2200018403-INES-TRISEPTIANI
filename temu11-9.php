<!DOCTYPE html>
<html>
     <!-- Input type checkbox -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Makanan Favorit</title>
</head>
<body>
    <form action="prosescheckbox.php" method="post" name="input">
    	<h2>Silahkan pesan makanan yang anda suka</h2>
    	<input type="checkbox" name="pesan1" value="Nasgor" checked> Nasi Goreng <br>
    	<input type="checkbox" name="pesan2" value="kwetiau" checked> kwetiau <br>
    	<input type="checkbox" name="pesan3" value="Bakso" checked> Bakso <br>
    	<input type="checkbox" name="pesan4" value="Sate" checked> sate <br>
    	<input type="submit" name="Pilih" value="Pilih" /> 
    	<input type="reset" name="reset" value="Reset" />
    </form>
</body>
</html>