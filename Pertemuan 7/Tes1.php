<?php
$umur=19;

if($umur >= 50){
     $hasil="Tua";
} else if ($umur >= 49){
    $hasil ="Paruh baya";    
}
else if ($umur >= 23){
    $hasil ="Dewasa";    
}
else if ($umur >= 18){
    $hasil ="remaja";    
}
else if ($umur < 17){
    $hasil ="Pra remaja";    
}

echo "Umur Kamu :$umur <br>";
echo "Kategori :$hasil";

?>