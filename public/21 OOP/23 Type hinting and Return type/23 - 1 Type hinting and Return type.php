<!-- 

    PHP-də Type Hinting və Return Types kod yazarkən məlumatların növünü (type) təyin etmək üçün istifadə olunur. 
    Bu, kodun oxunaqlığını və təhlükəsizliyini artırır, çünki hər hansı yanlış məlumat növü istifadə olunarsa, PHP səhv göstərəcək.

    1. Type Hinting nədir?
        Type Hinting ilə funksiyaların və metodların parametrlərinə hansı növ məlumatların ötürülə biləcəyini təyin edirik. 
        Bu, səhvlərin qarşısını almağa və daha sabit kod yazmağa kömək edir.


        Type Hinting-də istifadə olunan növlər:
            int          - Tam ədəd
            float        - Onluq kəsr
            string       - Mətn
            bool         - Boolean (true/false)
            array        - Massiv
            object       - Obyekt
            callable     - Çağırılabilən funksiya və ya metod
            iterable     - Iterasiya edilə bilən növ (array və ya obyekt)
            self         - Həmin sinifə aid obyekt
            class adları - Müəyyən bir sinifə məxsus obyekt
            void         - void növü funksiyanın heç bir dəyər return etmədiyini bildirir. 


    2. Return Types nədir?
        Return Types funksiyadan və ya metoddan hansı növ məlumatın qaytarılacağını təyin edir. Bunun üçün funksiyanın sonunda : və növ adı yazılır.


    Yekun
        Type Hinting: Parametrlərin və metodlara ötürülən məlumatların növünü təyin edir.
        Return Types: Metodun və ya funksiyanın qaytaracağı məlumat növünü təyin edir.


    NOT: Nullable Type Hinting
        Bəzi hallarda parametrlərin və ya nəticənin null ola bilməsi mümkündür. Bunun üçün ? istifadə olunur.
-->