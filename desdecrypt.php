<?php
	 include 'Crypt/DES.php';
	 $nameoffile=$_POST['filesource'];
	 $default= "decrypted";
	 $newfile= $default. "" .$nameoffile;
	 $content = file_get_contents("http://localhost/cloudproject/mirror/$nameoffile");
	 echo " your new file name is :";
	 echo "$newfile";
	 $des = new Crypt_DES();
     $des->setKey('password');
     $size = 10 * 1024;
     $plaintext = "$content";
     for ($i = 0; $i < $size; $i++)
	 {
         $plaintext.= '';
     }
    $stuff = $des->decrypt($plaintext);
	file_put_contents("mirror/$newfile",$stuff);
  ?>