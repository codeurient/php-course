<!-- 
 

PHP-də obyektləri birbaşa sətirə (string) çevirmək mümkün deyil, çünki obyektlərin necə sətirə çevriləcəyini müəyyən edən bir standart qayda yoxdur. 


$obj dəyişəni bir obyekt olduğu üçün PHP onu avtomatik olaraq sətirə çevirməyə çalışır. PHP-də bir obyektin sətir kimi təmsil edilməsi üçün __toString 
metodu istifadə edilməlidir. Əgər bu metod müəyyən edilməyibsə, həmin obyekt sətirə çevrilə bilmir və nəticədə aşağıdakı xəta alınır:

-->


<?php

class Point {
    private $x;
    private $y;

    public function __construct($x=0, $y=0) {
        $this->x = $x;
        $this->y = $y;
    }


    public function __toString() {
        return "Point coordinates: ({$this->x}, {$this->y})";
    }
}
$obj = new Point(10, 12);
echo "{$obj}";                      // Point coordinates: (10, 12)
