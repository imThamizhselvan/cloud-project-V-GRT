<?php
     include 'Crypt/RC4.php';
     $nameoffile=$_POST['filesource'];
	 $default= "encrypted";
	 $newfile= $default. "" .$nameoffile;
	 echo " your file name is :";
	 echo "$newfile";
	 $content = file_get_contents("http://localhost/cloudproject/mirror/$nameoffile");
     $rc4 = new Crypt_RC4();
     $rc4->setKey('password');
     $size = 10 * 1024;
     $plaintext = "$content";
     for ($i = 0; $i < $size; $i++) 
	 {
         $plaintext.= '';
     }
     $stuff = $rc4->encrypt($plaintext);
	 file_put_contents("mirror/$newfile",$stuff);
  ?>