<?php
if (isset($_POST['Login'])) {
	$user=_POST['username'];
	$pass=_POST['password'];
	if ($user=="2200018403" && $pass == "Ines") {
		echo("<h2>Anda Berhasil Login</h2>");;
	}else{
		echo("<h2>Anda gagal Login, Silahkan Ulangi</h2>");
	}
}
?>