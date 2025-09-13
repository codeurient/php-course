<!-- 

1) composer yukleyirik və quraşdırırıq(1ci sekil)                    - https://getcomposer.org

2) index.php faylinin oldugu yerde composer.json faylini yaradiriq və içinə bu kodları qoyuruq: { "autoload":       { "psr-4":         { "App\\": "src/" }       }         }

3) Start menyusunda `environment variables` yazaraq şəkil 2-1 və 2-2 -də olduğu kimi php ilə composer yolunu əlavə edirik.

4) VScode terminalında php -v və composer -v yazaraq işləyib işləmədiyini yoxlayırıq paketlərin. 

5) Sonra sekil 3 de oldugu kimi bir struktur qururuq

6) Sonra `composer dump-autoload -o` əmrini yazırıq və şəkildə 4 -də olduğu kimi bir qovluq yaradılır.

7) Sonra `index.php` faylını yaradırıq və `require_once` php kodu ilə `vendor/autoload.php`     qovluğunu çaöırırıq. 


-->

<?php


use MyApp\Game\Player\Player;

require_once realpath('vendor/autoload.php');

$player = new Player();
$gameController = new \MyApp\Game\GameController();