<!-- 
 

Override Edilə Bilməz

Interface sabitləri final qəbul edilir, buna görə də onları child class-da dəyişdirmək mümkün deyil:


-->


<?php

    interface MyInterface {
        const VALUE = 100;
    }

    class MyClass implements MyInterface {
        // Bu, xəta yaradacaq:
        // const VALUE = 200; 
    }

    echo MyClass::VALUE; // Çap edəcək: 100






?>