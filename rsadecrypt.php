<?php
    include 'Crypt/RSA.php';
 $nameoffile=$_POST['filesource'];
	 $default= "decrypted";
	 $newfile= $default. "" .$nameoffile;
	 echo " your new file name is :";
	 echo "$newfile";
	 echo "<br>";
	  $content = file_get_contents("$nameoffile");
     $rsa = new Crypt_RSA();
     extract($rsa->createKey());
 
     $plaintext = "$content";
 
     $rsa->loadKey($privatekey);
     $ciphertext = $rsa->encrypt($plaintext);
 
     $rsa->loadKey($publickey);
     
	 echo "your decrypted content : ";
     echo $rsa->decrypt($ciphertext);
	 $myfile = fopen("$newfile", "w") or die("Unable to open file!");
	 fwrite($myfile, $rsa->decrypt($ciphertext));
  ?>