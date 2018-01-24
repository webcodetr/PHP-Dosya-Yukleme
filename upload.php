<?php
$leave = array("image/png","image/jpg","image/jpeg","image/gif");
$max_size = 2048*1024;
if(in_array($file["type"],$leave)){
if($uploadfile["upload"]["size"] > $max_size){
if(move_uploaded_file($uploadfile, "upload/".$uploadname)) 
{echo "Başarılı Yükleme";}
else  {echo "Yükleme Gerçekleştirilmedi";} } 
else {echo "Boyutu yüksek";}}
else {echo "PNG, JPG, JPEG, GİF formatında olmalıdır";}
?>


