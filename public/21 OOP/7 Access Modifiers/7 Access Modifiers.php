<!-- 

 Access Modifiers, bir class-ın property və methodlarının harada istifadə oluna biləcəyini idarə etmək üçün istifadə olunur. PHP-də üç əsas access modifier mövcuddur:

1. Public
        Public elan edilən property və method-lar həm class daxilində, həm də class xaricindən (məsələn, obyekt vasitəsilə) əlçatan olur.
        Xüsusiyyətləri:
                    Hər yerdən istifadə edilə bilər.
                    Ən geniş giriş icazəsini təmin edir.


2. Private
        Private elan edilən property və method-lar yalnız class daxilində istifadə edilə bilər. Class-dan kənarda onlara giriş icazəsi yoxdur.
        Xüsusiyyətləri:
                    Kodun təhlükəsizliyini artırır.
                    Məlumat gizliliyini təmin edir.



3. Protected
        Protected elan edilən property və method-lar yalnız class daxilində və inheritance (irsiyyət) yolu ilə yaradılan subclass-lar tərəfindən istifadə edilə bilər.
        Xüsusiyyətləri:
                    Class xaricində birbaşa istifadə edilə bilməz.
                    Parent və child class-lar arasında məlumat paylaşımını təmin edir.




                    Modifier	Class Daxilində     	Subclass (Irsiyyət)	        Class Xaricində

                    Public	           ✔	                    ✔	                     ✔

                    Private	           ✔	                    ✘	                     ✘

                    Protected	       ✔	                    ✔	                     ✘


                    
Real Həyatdan Misal. Təsəvvür edin, bir banka sistemində işləyirsiniz.

Public:     İstifadəçinin adı və soyadı hər kəsə görünə bilər.
Private:    İstifadəçinin PIN kodu və şifrəsi yalnız sistem daxilində istifadə olunur.
Protected:  Hesab balansı məlumatları ana class və ona bağlı subclass-lar tərəfindən istifadə olunur.

-->