<!-- 


   Cloning və Copy, obyektlərin surətinin yaradılması ilə bağlıdır. Normalda, bir obyekt başqa bir dəyişənə təyin edildikdə, həmin obyektin reference -ı ötürülür. 
   Bu, deməkdir ki, hər iki variable eyni obyekti paylaşır. Amma əgər obyektin tamamilə müstəqil bir surətini yaratmaq istəyirsinizsə, bunun üçün CLONE istifadə edilir.


   Cloning və Reference fərqi
-->

<?php

// Reference ilə obyektin təyin olunması
$object1 = new stdClass();
$object1->name = "Object 1";



$object2 = $object1; // İstiqamət (reference) ötürülür
$object2->name = "Object 2";




echo $object1->name . '<br>'; // Object 2
echo $object2->name . '<br>'; // Object 2



