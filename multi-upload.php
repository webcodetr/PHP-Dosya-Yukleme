<?php
$counter = 0;
if($_FILES){ 
foreach($_FILES["upload"]["name"] as $j => $name){
if(move_uploaded_file($_FILES["upload"]["tmp_name"][$j], $name){
echo "Yüklenen Dosya :".$_FILES["upload"]["name"][$j]."<br>";
$counter++;
}
else{echo "Hatalı Dosya :".$_FILES["upload"]["name"][$j]."<br>" } 
} 
echo "Yüklenen Toplam Dosya sayısı:".$j; }
	?>


