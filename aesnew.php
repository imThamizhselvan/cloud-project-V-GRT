  <?php
     include 'Crypt/AES.php';
	 $nameoffile=$_POST['filesource'];
	 $default= "encrypted";
	 $newfile= $default. "" .$nameoffile;
	 echo " your file name is :";
	 echo "$newfile";
	 $content = file_get_contents("http://localhost/cloudproject/mirror/$nameoffile");
	$aes = new Crypt_AES();
    $aes->setKey('password');
    $size = 10 * 1024;
    $plaintext = "$content";
    for ($i = 0; $i < $size; $i++)
	{
         $plaintext.= '';
    }
   	$stuff = $aes->encrypt($plaintext);
	file_put_contents("mirror/$newfile",$stuff);
  ?>
    
  
  