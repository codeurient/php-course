<?php

function bigItems(): Generator {
    for ($i = 1; $i <= 1_000_000; $i++) {
        yield ["id" => $i, "value" => "item-$i"];
    }
}

$fp = fopen('php://output', 'w');

fwrite($fp, '[');

$first = true;

foreach (bigItems() as $item) {

    if (!$first) {
        fwrite($fp, ',');
    }

    fwrite($fp, json_encode($item));
    $first = false;

}
fwrite($fp, ']');

fclose($fp);
