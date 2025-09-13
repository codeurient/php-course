<?php

        class Test {
            private $secret = "Private Property";       // Private property

            private function secretMethod() {       // Private method
                echo "This is a private method.";
            }

            public function accessSecret() {        // Public method
                echo $this->secret;                 // Private property-ə class daxilində giriş
                $this->secretMethod();              // Private method-a class daxilində giriş
            }
        }

        $obj = new Test();
        // echo $obj->secret; // XƏTA: Private olduğu üçün birbaşa əlçatmaz
        // $obj->secretMethod(); // XƏTA: Private olduğu üçün birbaşa istifadə edilə bilməz

        $obj->accessSecret(); // Private property və method yalnız class daxilində istifadə olunur

?>