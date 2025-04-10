<!-- 


Aşağıda radio və checkbox elementlərindən istifadə edərək form nümunəsi yazılıb. 
Bu formda həm bir dəyər (radio), həm də çoxsaylı dəyərlər (checkbox) seçilə bilər.


-->

<!DOCTYPE html>
<html lang="en">
<body>

    <form action="process.php" method="POST">
        <h3>Sevdiyiniz içkini seçin (Radio):</h3>
        <input type="radio" name="drink" value="Tea" id="tea">
        <label for="tea">Tea</label><br>
        
        <input type="radio" name="drink" value="Coffee" id="coffee">
        <label for="coffee">Coffee</label><br>
        
        <input type="radio" name="drink" value="Juice" id="juice">
        <label for="juice">Juice</label><br>
        


        
        <h3>Sevdiyiniz yeməkləri seçin (Checkbox):</h3>
        <input type="checkbox" name="food[]" value="Pizza" id="pizza">
        <label for="pizza">Pizza</label><br>
        
        <input type="checkbox" name="food[]" value="Burger" id="burger">
        <label for="burger">Burger</label><br>
        
        <input type="checkbox" name="food[]" value="Pasta" id="pasta">
        <label for="pasta">Pasta</label><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>

