<?php
if (isset($_POST['Pilih'])) {
	$film=$_POST['kartun'];
	echo "Film Favorit anda adalah :
	<font color=blue><b>$film</b></font>";
}
?>