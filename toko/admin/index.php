<?php
include_once '../config/Config.php';
$con = new Config();
if($con->auth()){
    switch (@$_GET['mod']){
        case 'transaksi':
            include_once 'controller/transaksi.php';
            break;
        default:
        include_once 'controller/transaksi.php';
        }
}else{
    include_once 'controller/login.php';
}
?>