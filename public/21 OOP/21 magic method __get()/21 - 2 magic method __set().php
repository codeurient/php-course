<!-- 




-->

<?php
        // __set()

        class MyClass {
            public function __set($name, $value) {
                echo "Xassə '$name'-ə '$value' dəyəri təyin edilə bilmədi.<br>";
            }
        }
        
        $obj = new MyClass();
        $obj->undefinedProperty = "Test"; // Xassə 'undefinedProperty'-ə 'Test' dəyəri təyin edilə bilmədi.
        



?>



