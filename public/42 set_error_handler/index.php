<!-- 
 

set_error_handler() funksiyası, istifadəçinin öz xəta idarəetmə funksiyasını təyin etməsinə imkan verir. Bu, PHP-nin standart xəta göstəricisini dəyişdirmək və 
öz yazılmış funksiyanı çağıraraq daha fərdi bir şəkildə xətaları idarə etmək üçün istifadə olunur.


set_error_handler() funksiyasının istifadəsi:
    Bu funksiya, PHP-dəki xətalar baş verdikdə hansı funksiyanın çağırılacağını müəyyən edir. Adətən, PHP standart olaraq səhvləri ekranda göstərir. Amma, biz bu 
    davranışı dəyişərək öz funksiyamızı təyin edə bilərik. Bu zaman, PHP səhvləri error handler (xəta idarəedici) funksiyasına yönləndirir.



Qeydlər:
    - set_error_handler() funksiyası yalnız rəhbərli səhvləri (runtime errors) idarə etmək üçün istifadə olunur. PHP səhvlərinin hansı növ olduğunu idarə etmək 
      üçün istifadə olunur.
    - Bu metod yalnız runtime xətalarına aiddir, məsələn, sıfıra bölmə, qeyri-mövcud faylın oxunması və s.
    - Fatal errors və parse errors kimi səhvlər bu funksiyanı çağırmaz. Onlar hələ tətbiqin icrasına başlamazdan əvvəl baş verdikləri üçün set_error_handler() 
      ilə idarə oluna bilməzlər.


E_ALL əlavə edərək öz xəta göstərən funksiyanızı daha təkmil və ətraflı hala gətirə bilərsiniz. PHP-də E_ALL sabiti, bütün səhv növlərini göstərməyə imkan verir. 
Bu, yalnız runtime xətalarını deyil, həmçinin digər bütün mümkün səhvləri göstərir (məsələn, yazı səhvləri, xəbərdarlıqlar, qeyri-adi vəziyyətlər və s.). Ancaq
Fatal errors və Parse errors istisna təşkil edir. 



Fatal Errors və Parse Errors haqqında məlumat:
    - Fatal errors: Bu səhvlər PHP skriptində ciddi xətadır və kodun işləməsi mümkün deyil. Məsələn, müəyyən bir funksiyanı çağırmaq istəyirsiniz, amma həmin funksiya 
      mövcud deyil və ya lazımi sinif yüklənməyib. PHP bu tip səhvləri fatal error olaraq qeyd edir və skripti dayandırır. 
    - Parse errors: Bunlar skriptin yazılışında olan sintaksis səhvləridir (məsələn, bağlanmamış mötərizələr və ya səhv tərtib edilmiş ifadələr). Bu səhvlər PHP-nin 
      skripti oxumasını qeyri-mümkün edir və bu tip səhvlər de parse error kimi göstərilir. 
-->


<?php
// Bütün səhvləri göstərmək
error_reporting(E_ALL);

// Səhvləri ekranda göstərmək
ini_set('display_errors', 1);

// Xəta idarəetmə funksiyasını təyin et
set_error_handler("errorHandler");

function errorHandler($errno, $errstr, $errfile, $errline) {
    echo "<strong>Xəta növü:</strong>   $errno      <br>";
    echo "<strong>Xəta mesaji:</strong> $errstr     <br>";
    echo "<strong>Xəta fayli:</strong>  $errfile    <br>";
    echo "<strong>Xəta sətiri:</strong> $errline    <br>";
}

echo 10 / 0;  // Bölmə xətası (division by zero)
// Test: Qəsdən fatal xəta yaradılır
someUndefinedFunction(); // Fatal error

?>
