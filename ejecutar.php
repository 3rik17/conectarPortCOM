<?php

	$mensaje = $_POST['txtmensaje'];

	$out = system('C:\windows\system32\CMD.EXE /K "C:\xampp\htdocs\serialport\serialport.bat '.$mensaje.' "');

	echo  ' <meta http-equiv="Refresh" content="0;url=index.php"> ';

?>