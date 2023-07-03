<?php
if (isset($_POST['Proses'])) {
	$saran=n12br ($_POST['saran']);
	echo "Film Favorit anda adalah : <br>";
	echo "<font color=blue><b> $saran</b></font>";
}
?>