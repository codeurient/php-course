<!-- 
 

"Refactor cURL to Guzzle With Retry Logic - Multiple API Integrations" ifadəsi, bir layihədə cURL-dən istifadə edən API bağlantı kodlarının daha 
müasir və inkişaf etmiş bir HTTP müştəri kitabxanası olan Guzzle ilə yenidən yazılmasını nəzərdə tutur. Bu prosesdə retry logic (yenidən cəhd mexanizmi) 
əlavə edilir və layihə çoxsaylı API inteqrasiyalarını idarə etmək üçün təkmilləşdirilir.


Əsas Anlayışlar:
    1. cURL və Guzzle:
        - cURL: PHP-də HTTP sorğularını həyata keçirmək üçün istifadə edilən standart bir kitabxanadır. Lakin, onun istifadəsi bir az çətin ola bilər, xüsusən də böyük layihələrdə.
        - Guzzle: Daha oxunaqlı, genişlənə bilən, asan konfiqurasiya olunan bir HTTP müştərisidir. Çoxsaylı API-lərlə inteqrasiya üçün idealdır və asinxron sorğuları dəstəkləyir.

    2. Retry Logic (Yenidən Cəhd):
        - API-lər bəzən vaxt aşımı (timeout) və ya serverdəki problemlər səbəbilə uğursuz cavablar qaytara bilər. Retry logic, belə hallarda sorğunun avtomatik olaraq yenidən 
          cəhd edilməsini təmin edir. Bu, xüsusilə kritik məlumatların əldə olunmasında vacibdir.

    3. Multiple API Integrations:
        - Layihədə birdən çox API ilə əlaqə qurulursa, kodun təkrar istifadəsini təmin edən və bir neçə API-ni effektiv şəkildə idarə edən vahid bir struktur lazımdır.


Refaktor Edilərkən Niyə Guzzle Seçilir?
    - Oxunması daha asan kod təmin edir.
    - Middleware dəstəyi ilə əlavə funksionallıq əlavə etmək mümkündür.
    - Retry, loglama və digər funksiyaları inteqrasiya etmək daha sadədir.
    - Sinxron və asinxron sorğulara dəstək verir.

-->