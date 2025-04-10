<!-- 
 

ORM (Object-Relational Mapping) obyekt yönümlü proqramlaşdırma dilləri ilə verilənlər bazası arasında əlaqə qurmağa kömək edən bir texnikadır. 
ORM vasitəsilə verilənlər bazası əməliyyatlarını (SELECT, INSERT, UPDATE, DELETE) SQL kodu yazmadan, obyektlər vasitəsilə həyata keçirmək mümkündür.


ORM-in Məqsədi
    ORM-in əsas məqsədi, verilənlər bazasının sətirlərini və sütunlarını proqramlaşdırma dilində obyektlərə və xüsusiyyətlərə çevirməkdir. Bu, verilənlər 
    bazası ilə işləyərkən daha intuitiv və obyekt yönümlü bir yanaşma təmin edir.


Necə İşləyir? ORM bir modeli (class) bir verilənlər bazasındakı cədvələ uyğunlaşdırır:
    Cədvəl → Sinif (Class): Verilənlər bazasındakı bir cədvəl bir sinif kimi təsvir olunur.
    Sütun  → Xüsusiyyət (Property): Cədvəldəki sütunlar həmin sinfin xüsusiyyətləri ilə əlaqələndirilir.
    Sətir  → Obyekt: Verilənlər bazasındakı bir sətir sinfin bir obyektinə çevrilir.



ORM-in Üstünlükləri
    SQL yazmağa ehtiyac yoxdur:   ORM SQL sorğularını avtomatik olaraq yaradır və icra edir.
    Daha az kod:                  SQL və proqram kodu qarışmadığı üçün kod daha təmiz və oxunaqlı olur.
    Platformadan asılı olmamaq:   ORM istifadə edərək fərqli verilənlər bazalarını dəyişdirmək daha asandır.
    Təhlükəsizlik:                SQL injection kimi hücumlara qarşı qoruma təmin edir.
    Obyekt yönümlü yanaşma:       Verilənlər bazası ilə işləmək obyektlər vasitəsilə daha rahat olur.
    

ORM-in Dezavantajları
    Performans:             ORM bəzi hallarda SQL-ə nisbətən daha yavaş ola bilər, xüsusən böyük verilənlər bazaları üçün.
    Qeyri-dəqiq sorğular:   Çox mürəkkəb sorğuların ORM vasitəsilə yazılması daha çətin ola bilər.
    Öyrənmə əyrisi:         ORM-in işləmə prinsiplərini və onunla əlaqəli kitabxanaları öyrənmək zaman tələb edə bilər.


Məşhur ORM Kitabxanaları
    PHP: Doctrine, Eloquent (Laravel)
    Python: SQLAlchemy, Django ORM
    JavaScript: Sequelize, TypeORM
    Java: Hibernate
    C#: Entity Framework

    
-->