<!-- 


-->

<?php
        // __invoke()
        class MyClass {
            public function __invoke($param) {
                echo "Obyekt bir funksiya kimi cagrildi: $param<br>";
            }
        }
        
        $obj = new MyClass();
        $obj("Test"); // Obyekt bir funksiya kimi çağırıldı: Test
        
        
?>



