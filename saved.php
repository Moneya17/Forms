<?php
    session_start();
       if(isset($_POST['save_now'])){
	   $file= mt_rand().".txt";
	   $handle = fopen($file, 'w') or die('Cannot open file:  '.$file);
	   $data = "All info:\n\r";
	   fwrite($handle, $data);}
?>