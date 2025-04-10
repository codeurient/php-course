<!-- 
        Constructor və Destructor nədir?

        PHP-də Constructor və Destructor obyektin həyat dövrünün müxtəlif mərhələlərində işə düşən xüsusi metodlardır. Onlar obyektin yaradılması və məhv edilməsi zamanı 
        müəyyən əməliyyatların avtomatik olaraq həyata keçirilməsini təmin edir. 


        Obyektin həyat dövrü dedikdə onun yaradılmasından məhv edilməsinə qədər olan bütün mərhələlər nəzərdə tutulur. 
        PHP-də obyektin həyat dövrü ümumiyyətlə üç əsas mərhələdən ibarətdir:
                                                                                1. Obyektin Yaradılması (Instantiation)
                                                                                        new açar sözü ilə obyekt yaradılır.
                                                                                        Constructor işə düşür və ilkin dəyərlər təyin edilir.

                                                                                2. Obyektin İstifadəsi (Object Usage)
                                                                                        Obyektin metodları və xüsusiyyətləri (property) istifadə olunur.
                                                                                        Əsas əməliyyatlar bu mərhələdə həyata keçirilir.

                                                                                3. Obyektin Məhv Edilməsi (Destruction)
                                                                                        Destructor işə düşür.
                                                                                        Resurslar təmizlənir və obyekt yaddaşdan silinir.

        Niyə Həyat Dövrü Vacibdir?
                                Yaddaş İdarəetməsi: Obyektlərin artıq istifadə olunmadığı halda məhv edilməsi yaddaş sızıntılarının qarşısını alır.
                                Avtomatlaşdırma:    Constructor və destructor sayəsində bəzi əməliyyatları avtomatlaşdırmaq mümkündür (məsələn, resursların açılması və bağlanması).
                                Təmizlik:           Destructor obyekti tərk edərkən sistemin təmiz qalmasını təmin edir.


        Constructor, obyekt yaradıldıqda avtomatik olaraq çağırılan xüsusi bir metoddur. Bu metod, obyektin xüsusiyyətlərinə (property) ilkin dəyərlər təyin etmək və ya obyekt 
        yaradılarkən lazımi əməliyyatları həyata keçirmək üçün istifadə olunur.

        Constructor-un Xüsusiyyətləri:
                                        __construct() adlı xüsusi bir metoddur.
                                        Avtomatik olaraq işə düşür – onu əl ilə çağırmağa ehtiyac yoxdur.
                                        Parametrlər qəbul edə bilər.
                                        Public (ümumiyyətlə açıq) olur ki, obyekt yaradılarkən avtomatik işləsin.
-->

<?php



?>