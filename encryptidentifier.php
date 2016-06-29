<?php
$algo= $_POST['algo'];
$dataa= $_POST['filesource'];
$content = file_get_contents('');
if($algo=='AES')
{
header("location:aes.php");
}
if($algo=='DES')
{
header("location:des.php");
}
if($algo=='RSA')
{
header("location:rsa.php");
}if($algo=='BLOWFISH')
{
header("location:blowfish.php");
}
?>