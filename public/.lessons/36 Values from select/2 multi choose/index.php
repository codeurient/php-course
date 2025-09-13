
<!-- 

fruit[] sintaksisi PHP-də HTML formalarında çoxsaylı dəyərlərin bir massiv kimi göndərilməsi üçün istifadə olunur. 
Bu, formun POST və ya GET sorğusu ilə göndərilərkən seçilmiş bir neçə dəyərin bir massivdə qəbul edilməsinə imkan yaradır.



[] simvolu:
    Form elementinin adına (məsələn, fruit) [] əlavə etdikdə, PHP bu dəyişəni avtomatik olaraq massiv kimi qəbul edir.
    Bu, xüsusilə çoxseçimli elementlər (məsələn, multiple atributu ilə select və ya birdən çox checkbox) üçün faydalıdır.


-->

<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>Form Seçimi</title>
</head>
<body>

    <form method="POST" action="process.php" >
        <label for="fruit">Choose fruits:</label>
        <select name="fruit[]" multiple id="fruit" multiple>
            <option value="apple">Apple</option>
            <option value="banana">Banana</option>
            <option value="orange">Orange</option>
            <option value="grape">Grape</option>
        </select>
        <button type="submit">Submit</button>
    </form>


</body>
</html>

