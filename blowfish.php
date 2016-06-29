<?php
     include 'Crypt/Blowfish.php';
     $nameoffile=$_POST['filesource'];
	 $default= "encrypted";
	 $newfile= $default. "" .$nameoffile;
	 echo " your file name is :";
	 echo "$newfile";
	 $content = file_get_contents("http://localhost/cloudproject/mirror/$nameoffile");
     $blowfish = new Crypt_Blowfish();
     $blowfish->setKey('12345678901234567890123456789012');
     $plaintext = "$content";
     $stuff = $blowfish->encrypt($plaintext);
	 file_put_contents("mirror/$newfile",$stuff);
  ?>