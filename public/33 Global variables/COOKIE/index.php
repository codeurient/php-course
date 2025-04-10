<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Formdan gələn adı kukidə saxla (1 gün müddətinə). setcookie() funksiyası PHP-də kukiləri yaratmaq üçün istifadə edilir. 
    // 1) 'user_name'
    //      Məna:   Kuki üçün ad (açar).
    //      Nümunə: Bu kukinin adıdır və bu ad vasitəsilə kuki məlumatına daxil olmaq mümkündür. Burada kukinin adı "user_name" olaraq təyin edilib.
    // 
    // 2) $_POST['name']
    //      Məna:   Kukinin dəyəri.
    //      Nümunə: Formdan göndərilən istifadəçi adını ($_POST['name']) kukidə saxlayır. Bu dəyər istifadəçinin daxil etdiyi ad olacaq.

    // 3) time() + (86400)
    //      Məna:   Kukinin son istifadə vaxtı (müddəti).

    // 4) "/"
    //      Məna:   Kukinin yol sahəsi (path).
    //      Nümunə:  "/" göstərildikdə kuki bütün sayt üçün əlçatan olur.
    //      Əgər xüsusi bir yol göstərilsə (məsələn, "/admin/"), kuki yalnız həmin kataloq və onun alt kataloqlarında mövcud olar.
    setcookie('user_name', $_POST['name'], time() + (86400), "/"); 

    header("Location: welcome.php");

    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie ilə Məlumat Saxlama</title>
</head>
<body>
    <form method="POST" action="">
        <label>Adinizi daxil edin:</label>
        <input type="text" name="name" >
        <button type="submit">Göndər</button>
    </form>
</body>
</html>
