<?php
$bayar = 20000;
$beli = 15000;

$kembali = $bayar-$beli;
$sisa = $kembali;

if($bayar < $beli){
    echo "kurang bayar";
}else{
    echo "kembalian :";
    echo $sisa;
}
?>