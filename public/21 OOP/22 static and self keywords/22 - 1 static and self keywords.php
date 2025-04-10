<!-- 

    Static və Self əsasən CLASS səviyyəsində işləyən funksionallıqları təmin edir. Bu anlayışlar obyektə aid deyil, birbaşa CLASS -a aiddir.


    1. STATİC açar sözü ilə, həmin property və ya metoda obyekt yaratmadan birbaşa CLASS adı ilə müraciət etmək mümkündür.

    2. SELF açar sözü CLASS daxilində həmin CLASS-ın static property və ya metodlarına müraciət etmək üçün istifadə olunur.



    Static və Self Fərqləri:

    Static	                                                                                        Self

    CLASS-dan kənarda static property və ya metodlara müraciət üçün istifadə olunur.	            CLASS daxilində static property və ya metodlara müraciət üçün istifadə olunur.
    Birbaşa ClassName::property və ya ClassName::method() formasında çağırılır.	                    CLASS daxilində self::property və ya self::method() formasında çağırılır.
    $this işlətmək olmaz.	                                                                        $this istifadə edilmir, çünki SELF static üçün nəzərdə tutulub.

-->

<?php



?>



