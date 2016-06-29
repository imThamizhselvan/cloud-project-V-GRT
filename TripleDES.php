<?php
    include 'Crypt/TripleDES.php';
 	 $nameoffile=$_POST['filesource'];
	 $default= "encrypted";
	 $newfile= $default. "" .$nameoffile;
	 echo " your file name is :";
	 echo "$newfile";
	 $content = file_get_contents("http://localhost/cloudproject/mirror/$nameoffile");
     $des = new Crypt_TripleDES();
     $des->setKey('password');
     $size = 10 * 1024;
     $plaintext = "$content";
     for ($i = 0; $i < $size; $i++) 
	 {
         $plaintext.= '';
     }
	$stuff = $des->encrypt($plaintext);
	 file_put_contents("mirror/$newfile",$stuff);
     ?>