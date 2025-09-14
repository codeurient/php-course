<?php

header('Content-Type: text/plain');

// Buffer-i təmizləyək ki, dərhal göndərə bilək
while (ob_get_level() > 0) {
    ob_end_flush();
}
ob_implicit_flush(true);

for ($i = 1; $i <= 5; $i++) {
    echo "Sətir $i\n";

    // Burada dərhal göndəririk
    ob_flush();
    flush();

    sleep(1);
}

// İndi hər 1 saniyədən bir sətir brauzerdə görsənəcək.
// Real vaxtda progress kimi işləyir.
