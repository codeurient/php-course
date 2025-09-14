<?php

header('Content-Type: text/plain');

// Əgər buffer aktivdirsə, boşaldırıq
if (ob_get_level() > 0) {
    ob_flush();
}

flush();

for ($i = 1; $i <= 5; $i++) {
    echo "Sətir $i\n";

    if (ob_get_level() > 0) {
        ob_flush();
    }
    flush();

    sleep(1);
}
