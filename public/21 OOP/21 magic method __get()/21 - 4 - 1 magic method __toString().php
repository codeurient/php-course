<!-- 


-->

<?php
        // __toString()
        class MyClass {
            public function __toString() {
                return "Bu obyekt string olaraq istifadə edilir.";
            }
        }

        $obj = new MyClass();
        echo $obj; // Çap edəcək: Bu obyekt string olaraq istifadə edilir.
        
?>



