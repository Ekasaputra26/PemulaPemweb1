perulangan for
<?php
for($i=0; $i<10; $i++){
 //blok kode yang akan diulang disini
 echo"<h2>ini perulangan ke-$i</>";
}
?>

perulangan while
<?php

$ulangi=0;

while($ulangi<10){
 //blok kode yang akan diulang disini
 echo"<p>ini adalah perulangan ke-$ulangi</p>";
 $ulangi++;
}
?>

perulangan do while
<?php

$ulangi=10;

do{
echo"<p>ini adalah perulangan ke-$ulangi</p>";
$ulangi--;
}while($ulangi>0);
?>

perulangan foreach
<?php
$books=[
  "panduan belajar php untuk pemula",
  "membangun aplikasi web dengan php",
  "tutorial php dan mysql",
  "membuat chat bot dengan php",
  ];
 
  echo"<h5>judul buku php:</h5>";
  echo"<ul>";
  foreach($books as $buku){
    echo "<li>$buku</li>";
  }
  echo "</ul>";
?>

perulangan bersarang
<?php
for($i=0;$i<5;$i++){
  for($i=0;$j<10;$j++){
    echo "ini perulangan ke($i, $j)<br>";
  }
}
?>

<?php
$i=0;
while($i<10){
  for($j=0;$j<10;$j++){
    echo "ini perulangan ke($i,$j)<br>";
  }
  $i++;
}
?>