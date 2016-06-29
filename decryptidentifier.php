<?php
$algo= $_POST['algo'];

if($algo=='AES')
{
header("location:aesdecrypt.php");
}
if($algo=='DES')
{
header("location:desdecrypt.php");
}
if($algo=='RSA')
{
header("location:rsadecrypt.php");
}if($algo=='BLOWFISH')
{
header("location:blowfishdecrypt.php");
}
?>