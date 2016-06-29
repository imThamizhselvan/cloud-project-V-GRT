<?php
    include 'Crypt/RSA.php';
     $nameoffile=$_POST['filesource'];
	 $default= "encrypted";
	 $newfile= $default. "" .$nameoffile;
	 echo " your file name is :";
	 echo "$newfile";
	 echo "<br>";
	 echo " your encrypted content : ";
	 $content = file_get_contents("$nameoffile");
     $rsa = new Crypt_RSA();
     extract($rsa->createKey());
 
     $plaintext = "$content";
 
     $rsa->loadKey($privatekey);
     $ciphertext = $rsa->encrypt($plaintext);
 
     $rsa->loadKey($publickey);
     echo $ciphertext;
	 $myfile = fopen("$newfile", "w") or die("Unable to open file!");
	fwrite($myfile, $ciphertext);
  ?>