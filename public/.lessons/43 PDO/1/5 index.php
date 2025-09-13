<!-- 

PDO (PHP Data Objects), PHP-də verilənlər bazası ilə işləmək üçün istifadə olunan bir abstraksiya təbəqəsidir. Bu, müxtəlif verilənlər bazalarına 
(MySQL, PostgreSQL, SQLite və s.) bir standart interfeys vasitəsilə qoşulmağa imkan verir. 



PDO həm təhlükəsizlik, həm də səmərəlilik baxımından üstünlük verir, xüsusilə də prepared statements (hazırlanmış sorğular) ilə SQL injection 
təhlükəsindən qorunmanı təmin edir.



PDO-nun Üstünlükləri
    1.	Çox Verilənlər Bazası Dəstəyi: PDO , MySQL, PostgreSQL, SQLite, Oracle, SQL Server və daha çoxunu dəstəkləyir. Verilənlər bazasını dəyişdirmək üçün 
        kodu minimum dəyişikliklə uyğunlaşdırmaq mümkündür.
    2.	SQL Injection-dan Müdafiə: PDO prepared statements vasitəsilə istifadəçi tərəfindən daxil edilən məlumatları avtomatik olaraq təhlükəsizləşdirir.
    3.	Obyekt-Yönümlü Dizayn: PDO obyekt-yönümlü bir interfeys təqdim edir, bu da kodun daha strukturlu və oxunaqlı olmasını təmin edir.
    4.	Fərqli Verilənlər Bazası Drayverlərinə Uyğunluq: Eyni kodu müxtəlif verilənlər bazaları ilə istifadə etmək mümkündür.


-->


<?php

try {
    $dsn = "mysql:host=MySQL-8.2;dbname=test;charset=utf8mb4";
    $username = "root";
    $password = "";

    $pdo = new PDO($dsn, $username, $password);

    // setAttribute metodu PDO obyektinin davranışını tənzimləmək üçün istifadə olunur. Bu metod vasitəsilə PDO-ya fərqli xüsusiyyətlər (atributlar) təyin 
    // edilə bilər. Bu xüsusiyyətlər əlaqə qurularkən necə işləyəcəyini idarə edir.
    // 
    // PDO::ATTR_ERRMODE nədir? Bu, PDO atributlarından biridir və verilənlər bazası ilə işləyərkən səhvlərin necə idarə olunacağını təyin edir. Müxtəlif rejimlər mövcuddur:
    // 
    //      PDO::ERRMODE_SILENT (Standart rejim): Səhvlər sadəcə susaraq (səssiz) qeyd olunur və heç bir xəbərdarlıq və ya istisna atılmır.
    //      PDO::ERRMODE_WARNING: Səhvlər xəbərdarlıq olaraq atılır, amma kodun icrası davam edir.
    //      PDO::ERRMODE_EXCEPTION: Səhvlər istisna olaraq atılır (Exception). Bu, daha təhlükəsiz və düzgün bir yanaşmadır, çünki istisna atıldıqda səhv asanlıqla izlənilə və idarə edilə bilər.
    //      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // 
    // PDO::ERRMODE_EXCEPTION nə edir?
    //      PDO::ERRMODE_EXCEPTION aktiv olduğu üçün, yanlış SQL sorğusu (mövcud olmayan cədvəl) səhv yaradır.
    //      Bu səhv PDOException istisnası kimi atılır.
    //      catch bloku vasitəsilə səhv tutulur və idarə olunur.
    echo "Connected successfully!" . '<br>';
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . '<br>';
}


// DB -sə sorğu göndəririk və istifadəçi adlarını əldə edirik.
$sql = "SELECT * FROM users";
foreach ($pdo->query($sql) as $row) {

    echo $row['ad'] . "<br>";

}
