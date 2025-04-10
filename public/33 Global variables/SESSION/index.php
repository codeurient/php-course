<?php
// Sessiyanı başlatmaq
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Formdan gələn adı sessiyada saxla
    $_SESSION['user_name'] = $_POST['name'];
    header("Location: welcome.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<body>
    
<!-- 

    Nümunə Ssenari: İstifadəçi Adının Saxlanması
        İstifadəçi bir forma vasitəsilə adını daxil edir.
        Daxil edilən ad sessiyada və ya kukidə saxlanılır.
        Ad daxil edildikdən sonra istifadəçiyə salam verilir və məlumatlar saxlanmış vəziyyətdə qalır. 
-->


    <form method="POST" action="">
        <label>Adinizi daxil edin:</label>
        <input type="text" name="name" >
        <button type="submit">Göndər</button>
    </form>


</body>
</html>