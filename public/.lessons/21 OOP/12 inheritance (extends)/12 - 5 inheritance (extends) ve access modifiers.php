<!-- 

   Access Modifiers və Inheritance

    public:     Hər yerdə əlçatandır.
    protected:  Child class daxilində əlçatandır, lakin class-dan kənar istifadə edilə bilməz.
    private:    Yalnız həmin class daxilində istifadə oluna bilər.

-->

<?php


      
    class ParentClass {
        public $publicVar = "Public";
        protected $protectedVar = "Protected";
        private $privateVar = "Private";

        public function showVars() {
            echo $this->publicVar .  '<br>';
            echo $this->protectedVar . '<br>';
            echo $this->privateVar . '<br>';
        }
    }



    class ChildClass extends ParentClass {
        public function showParentVars() {
            echo $this->publicVar . '<br>';
            echo $this->protectedVar .  '<br><hr>';
            // echo $this->privateVar; // Xəta: Private dəyişənə giriş yoxdur
        }
    }

    $child = new ChildClass();
    $child->showParentVars();
    $child->showVars();


?>