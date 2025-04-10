<!-- 

    Namespace və Use nədir?

    1) Namespace, eyni adlı class -ların, funksiyaların və ya const -ların bir-birinə qarışmasının qarşısını almaq üçün istifadə olunur. Tutaq ki, iki fərqli 
    layihədə eyni adlı class-lardan istifadə olunur. Namespace bu class-ları ayırmağa kömək edir. Bu, böyük layihələrdə kodun daha nizamlı və idarə edilə bilən olmasını təmin edir.


    2) Use isə başqa bir namespace-də olan kodu cari faylda istifadə etməyə imkan yaradır. Başqa bir namespace-də olan class-ı və ya funksiyanı use ilə import edərək daha sadə adla 
    istifadə edə bilərsiniz.


--> 


<?php
namespace ProjectA;

class User {
    public function greet() {
        return "Salam, ProjectA-dan!";
    }
}


