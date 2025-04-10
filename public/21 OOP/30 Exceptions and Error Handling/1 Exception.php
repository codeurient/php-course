<!-- 

    Proqram yazarkən bəzən gözlənilməz hallar baş verir (məsələn, fayl tapılmır, bölmə əməliyyatı sıfıra bölünür və s.). 
    PHP-də bu cür problemləri idarə etmək və proqramın dayanmamasını təmin etmək üçün Exceptions (istisnalar) və Error 
    Handling (xətaların idarəsi) istifadə olunur.


    Xətalar və İstisnalar arasındakı fərq:
        - Xətalar (Errors)          : PHP kodlarinin-nin icrası zamanı baş verən problemləridir, məsələn, sintaksis xətası.
        - İstisnalar (Exceptions)   : Xüsusi halları idarə etmək üçün proqramçı tərəfindən yaradıla bilən və idarə oluna bilən problemlərdir.


    Exception baş verdikdə, PHP bu problemi idarə etmək üçün try-catch blokundan istifadə edir. İstisnalar meydana gəldikdə:
        Xüsusi olaraq yazılmış `catch` bloku işə düşür.
        Proqram normal axışını dayandırır.


        try {
            // Problemli kod buraya yazılır
        } catch (Exception $e) {
            // Problemi idarə etmək üçün həll burada yazılır
        }


-->

<?php



