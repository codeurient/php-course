<html lang="en">
<body>
    <!--    
        PHP-də switch-case-break, birdən çox şərtin yoxlanmasını təmin edən alternativ strukturdur. O, bir dəyəri müxtəlif hallarla müqayisə edir və uyğun olan bloku icra edir.

        break hər bir case blokunun sonunda istifadə olunur. O, növbəti blokların icrasını dayandırır.
        Əgər break istifadə edilməzsə, PHP növbəti case-ləri də icra edəcək (bu, "fall-through" adlanır).

        switch (ifadə) {

            case dəyər1:
                // Kod
                break;

            case dəyər2:
                // Kod
                break;

            default:
                // Əgər heç bir uyğunluq olmazsa, bu blok icra olunur.
                break;
        }
    -->

    <?php
            $fruit = "alma";

            switch ($fruit) {
                case "alma":
                    echo "Bu bir almadir.";
                    break;

                case "armud":
                    echo "Bu bir armuddur.";
                    break;
                    
                default:
                    echo "Bu taninmayan bir meyvədir.";
                    break;
            }
    ?>

</body>
</html>