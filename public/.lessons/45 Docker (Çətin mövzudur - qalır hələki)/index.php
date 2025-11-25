<!-- 

    1) İlk öncə DOCKER endiririk komputerə (1ci şəkil)

    2) Sistem tipinin adini öyrənmək üçün CMD pəncərəsində bu əmri yaza bilərik: echo %PROCESSOR_ARCHITECTURE%                  (2ci şəkil)

    3) Yaxud ayarlardan daxil olaraq öyrənə bilərik. Əgər ` x64-based processor ` belə yazırsa deməli AMD64 tipli sistemdir.    (2ci şəkil)




    NGINX (PHP-FPM):
        Performans: Yüksək performanslı, qeyri-bloklama (asynchronous) serverdir.
        PHP İcra: PHP-FPM modulu vasitəsilə PHP kodunu işləyir.
        İstifadə məqsədi: Daha sürətli statik fayl xidmətləri, yüksək trafikli veb saytlar.


    Apache (mod_php):
        Performans: HTTP sorğularını idarə etmək üçün bloklama (synchronous) modeldən istifadə edir.
        PHP İcra: PHP birbaşa Apache serverində mod_php ilə işləyir.
        İstifadə məqsədi: Klassik LAMP stack üçün ənənəvi seçim.


    DOCKER:
        Fokus: Virtualizasiya platformasıdır, server deyil.
        PHP İcra: Mühitlərdə NGINX və ya Apache kimi serverlər quraşdırılaraq PHP işlədilir.
        İstifadə məqsədi: İzolyasiya edilmiş və asanlıqla yenidən yaradılan mühitlərdə tətbiqləri çalışdırmaq.


    Fərq:
        NGINX və Apache: Web serverlərdir, lakin NGINX daha sürətli və müasir yanaşma təklif edir.
        Docker: Web server deyil, lakin NGINX və Apache kimi serverləri konteynerlərdə çalışdırmaq üçün istifadə olunur.



    Apache və NGINX birlikdə istifadə edilə bilər. Necə və Nə Üçün?
        - NGINX-i reverse proxy kimi konfiqurasiya edib, sorğuları yönləndirə bilərsiniz.
        - Statik faylları (CSS, JS, şəkillər) NGINX xidmət edir.
        - Dinamik sorğuları (PHP) Apache-ə yönləndirir.



    4) Ekranda `dockerProj` adında bi qovluq yaradırıq və bu qolvuq içində bəzi alt qovluqlar yaradırıq. (şəkil 3)
        Qovluqların yaradılması:
            - dockerProj: Bu əsas layihə qovluğudur, burada bütün layihə fayllarını və Docker konfiqurasiyalarını saxlayacaqsınız.

            - www: Bu qovluq, veb serverinin işlətdiyi veb səhifələrinin yerləşdiyi yerdir. Burada HTML, CSS, JavaScript və digər veb səhifə ilə əlaqəli fayllar yerləşə bilər.
              www qovluğunda yerləşən fayllar nginx tərəfindən xidmət edilir. Məsələn, orada HTML və CSS faylları varsa, nginx bu faylları istifadəçilərə göstərir.

            - mysql-data: Bu qovluq, MySQL verilənlər bazası üçün istifadə ediləcək verilənlərdir. MySQL verilənlər bazası konteynerinin məlumatlarını buraya saxlayacaqsınız. 
              Bu qovluq, verilənlər bazasının daimi saxlanmasını təmin edəcək (konteyner silinsə belə məlumatlar bu qovluqda saxlanacaq).

            - images > php: Bu qovluq, PHP fayllarını saxlayacaq. Bu fayllar dinamik veb səhifələr yaratmaq üçün istifadə oluna bilər. images qovluğunun içində, veb səhifə 
              ilə əlaqəli şəkillər və digər media faylları ola bilər.



    5) `docker run nginx` əmri:
        Bu əmr, Docker konteynerini işə salır və içində nginx veb serverini çalışdırır. Docker konteyneri, istifadəçinin müəyyən etdiyi konfiqurasiyaya uyğun bir mühitdə işləyəcək 
        və sadəcə nginx veb serverini işlədəcək. (şəkil 4) 
        
        Əmrin arxa fonda işləməsi üçün əmi bu cür yazmaqda olar:                                                                                `docker run -d nginx`
        Əgər arxa fonda işləyən rejimləri görmək istəyiriksə onda belə bir əmr yazırıq:                                                         `docker ps`
        Brauzerd' http://localhost yazdığımız zaman, nginx serverinin default səhifəsini görə bilmək üçün belə bir əmr yazırıq (şəkil 5):       `docker run -p 80:80 nginx`
    


    6) Docker prosesini dayandırmaq üçün `docker stop <container_id>` əmrindən istifadə edilir: docker stop 1bd554201e7c


    
    7) http://localhost yazdıqda açılan nginx səhifəsi default olaraq açılır ancaq bizə öz veb saytımızı açmaq lazımdır. Necə? Bunun üçün aşağıdakı kimi bir əmr yazmalıyıq: 
            - docker run -d -p 80:80 -v C:\Users\Admin\Desktop\dockerProj\vhost.conf:/etc/nginx/conf.d/default.conf nginx   (şəkil 6 )
        
            a) Ancaq ilk öncə `vhost.conf` adında fayl yaradırıq. Bu faylın içində şəkil 6 dakı kimi məlumatları qeyd edirik.
            b) Sonra yuxarıdakı əmri işə salırıq. Xəta olsa ilk öncə işlək prosesi stop etmək lazımdır. 



    8) Indi brauzerə daxil olsaq görərik ki, 404 Not Found yazır. Bunun səbəbi index faylımızın olmamasıdır. Bu faylı yaradırıq və təkrar mövcud proses varsa onu stop etdikdən sonra
    aşağıdakı əmri yenidən yazırıq (NOT: yolu tam vermək lazımdır): 
            - docker run -d -p 80:80 -v C:/Users/Admin/Desktop/dockerProj/vhost.conf:/etc/nginx/conf.d/default.conf -v C:/Users/Admin/Desktop/dockerProj/www:/var/www/public_html nginx

    
-->


<?php


