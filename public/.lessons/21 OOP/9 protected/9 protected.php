<?php
        class ParentClass {
            protected $info = "Protected Property"; // Protected property

            protected function showInfo() {         // Protected method
                echo "This is a protected method.";
            }
        }


        
        // EXTENDS sözü genişləndirmək deməkdir. Yəni, ChildClass izləyir ana class olan ParentClass -ı və bu uşaq class-a əlavə edilən metodlar ana class-ı genişləndirmək üçün istifadə edilir. 
        class ChildClass extends ParentClass {
            public function accessProtected() {
                // ChildClass klası ParentClass-ı izlədiyi üçün həmin ParentClass içində olan xasse ve metodlar ChildClass içində əl çatandır. 
                echo $this->info;       // Protected property-ə subclass daxilində giriş
                $this->showInfo();      // Protected method-a subclass daxilində giriş
            }
        }

        $child = new ChildClass();
        $child->accessProtected(); // Subclass daxilində istifadə edilir




        // echo $child->info;       // XƏTA: Protected olduğu üçün birbaşa istifadə edilə bilməz
        // $child->showInfo();      // XƏTA: Protected olduğu üçün birbaşa istifadə edilə bilməz

?>