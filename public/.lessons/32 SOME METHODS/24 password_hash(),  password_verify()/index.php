<!-- 


password_hash()
Sintaksis: password_hash(string $password, int $algo)
Özət: Təhlükəsiz şəkildə parol hash-ləyir.


-->


<?php


$hash = password_hash("password123", PASSWORD_DEFAULT);


if (password_verify("password123", $hash)) {
    echo "Password is valid.";
}


?>