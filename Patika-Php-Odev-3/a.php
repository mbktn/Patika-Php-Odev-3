<?php

//($_POST);
$deger=$_POST['number'];
//echo $value;


function control($value){
if(empty($value)){
echo 'lütfen kutucuğu boş bırakmayınız';

}
else if ($value%3==0){
    echo 'girdiğiniz sayi uce bolunuyor';
}
else if ($value%3==1){
    $b=$value;
    echo "bir üst kademe olarak 3'e bölünebilen sayi :";
    echo $b+2;
}
else if($value%3==2){
    $i=$value;
    echo "bir üst kademe olarak 3'e bölünebilen sayi :";
    echo $i+1;
}
}

control($deger);
?>
