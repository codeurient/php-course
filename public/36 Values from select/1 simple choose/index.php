


<!-- 

Bu nümunədə, bir <form> içərisində bir <select> elementini göstəririk. İstifadəçi seçim etdikdən sonra formu göndərəcək və PHP həmin seçimi alacaq.

Bu formda bir <select> elementi var və istifadəçi burada Alma, Banan, və ya Naringi seçə bilər. Seçim ediləndən sonra, form POST metodu ilə 
process.php səhifəsinə göndəriləcək.


-->

<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>Form Seçimi</title>
</head>
<body>

    <form method="POST" action="process.php">
        <label for="fruit">Meyvə seçin:</label>
        <select name="fruit" id="fruit">
            <option value="apple">Alma</option>
            <option value="banana">Banan</option>
            <option value="orange">Naringi</option>
        </select>
        <button type="submit">Göndər</button>
    </form>

</body>
</html>

