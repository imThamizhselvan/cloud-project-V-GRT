<?php
     include 'Crypt/Blowfish.php';
     $nameoffile=$_POST['filesource'];
	 $default= "decrypted";
	 $newfile= $default. "" .$nameoffile;
	 $content = file_get_contents("http://localhost/cloudproject/mirror/$nameoffile");
	 echo " your new file name is :";
	 echo "$newfile";
     $blowfish = new Crypt_Blowfish();
     $blowfish->setKey('12345678901234567890123456789012');
     $plaintext = "$content";
 	 $stuff = $blowfish->decrypt($plaintext);
	 file_put_contents("mirror/$newfile",$stuff);
 ?>