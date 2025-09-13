<!-- 


Dockblock (PHPDoc Block) PHP-də kodun sənədləşdirilməsi üçün istifadə olunan bir növ xüsusi şərh blokudur. Bu bloklar PHP koduna əlavə 
olunan strukturlaşdırılmış məlumatlardır və əsasən IDE-lərdə və avtomatik sənədləşdirmə alətlərində kodu daha anlaşılan və idarəolunan etmək üçün istifadə edilir.


Sintaksis:
Dockblock, **/** ilə başlayır və */ ilə bitir. Daxilində xüsusi etiketlərdən istifadə olunur.

/**
 * Açıklama və ya funksiyanın nə iş gördüyünü izah edir.
 *
 * @param type $param Açıklama
 * @return type Açıklama
 */


 
// Nümunə:
// Bir funksiyanın dockblock ilə sənədləşdirilməsi:

Əsas Etiketlər:
    @param: Funksiyanın parametrlərinin tipini və məqsədini izah edir.
    @return: Funksiyanın nə qaytardığını göstərir.
    @var: Dəyişənin tipini izah edir.
    @throws: Xəta atıla biləcəyini göstərir.
    @author: Müəllif haqqında məlumat.
    @deprecated: Funksiyanın artıq istifadə edilməməli olduğunu bildirir.


Nə Üçün Lazımdır?
    - Kodun daha yaxşı anlaşılması.
    - IDE-lər-də (məsələn, PHPStorm) avtomatik təkliflərin təmin edilməsi.
    - Kodun avtomatik sənədləşdirilməsi üçün (məsələn, phpDocumentor vasitəsilə).
    - Dockblock yazmağın üstünlüyü ondan ibarətdir ki, həm kodu başqaları üçün daha anlaşılan edir, həm də inkişaf müddətində təklifləri asanlaşdırır.


-->

<?php


/**
 * İki ədədi toplayır.
 *
 * @param int $a Birinci ədəd
 * @param int $b İkinci ədəd
 * @return int Ədədlərin cəmi
 */

function add(int $a, int $b): int {
    return $a + $b;
}
