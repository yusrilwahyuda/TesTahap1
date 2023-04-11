<?php
$hari = array('senin','sabtu','rabu','selasa','rabu');
$jumlah = count($hari);

for ($i=0; $i<$jumlah; $i++){
    echo $hari[$i]."<br />";
    
}
for ($j=0; $j<$jumlah; $j++) { 
    if($hari[$j] == $hari[4]){
        echo $j.' ' ;
    }
}
?>