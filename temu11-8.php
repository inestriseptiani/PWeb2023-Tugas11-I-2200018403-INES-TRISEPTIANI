<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pilih Program Studi</title>
</head>
<body>
    <form action="prosesradio.php" method="post" name="input">
    	<h2>Pilih Program Studi Anda</h2>
    	<input type="radio" name="prodi" value="IF" checked /> Informatika <br />
    	<input type="radio" name="prodi" value="TI" checked /> Teknologi Industri <br />
    	<input type="radio" name="prodi" value="TE" checked /> Teknik Elektro <br />
    	<input type="radio" name="prodi" value="TK" checked /> Teknik Kimia <br />
    	<input type="radio" name="prodi" value="TP" checked /> Teknologi Pangan <br />
    	<input type="submit" name="Pilih" value="Pilih" />
    	<input type="rest" name="reset" value="Reset" />
    </form>
</body>
</html>