<?php

include('model-daftar-temu.php');
$obj=new daftarTemu("localhost","root","","wedding");
if(isset($_REQUEST['id'])){

$obj->selesai($_REQUEST['id']);

}
 
?>