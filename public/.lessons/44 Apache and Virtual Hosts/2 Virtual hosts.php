<!-- 


Apache serveri gələn HTTP sorğularını domain name (məsələn, www.example.com) və ya IP address əsasında müəyyən edir. Virtual Hostlar bu sorğuları 
fərqli veb saytlarla əlaqələndirərək onları xidmət göstərir.


Apache-də iki növ Virtual Host mövcuddur:

1. Name-based Virtual Hosts (Ad əsaslı):
    Bir server və IP ünvanı üzərindən bir neçə domen işlətməyə imkan verir.
    Apache, HTTP sorğusunda gələn Host başlığını (Header) yoxlayaraq düzgün Virtual Host-u seçir.

Məsələn:
    www.example.com serverdə birinci veb sayt.
    www.anothersite.com serverdə ikinci veb sayt.

IP-based Virtual Hosts (IP əsaslı):
    Fərqli IP ünvanları ilə hər veb sayt üçün ayrıca Virtual Host təyin edilir.
    Daha çox resurs tələb edir, çünki hər sayt üçün ayrıca IP ünvan olmalıdır.



Name-based Virtual Host Nümunəsi:
1. Apache Konfiqurasiyası: Fərqli domenlər üçün Virtual Host yaratmaq: 
    a) Fayl: /etc/apache2/sites-available/example.com.conf
        <VirtualHost *:80>
            ServerName example.com
            ServerAlias www.example.com
            DocumentRoot /var/www/example.com
            ErrorLog ${APACHE_LOG_DIR}/example.com_error.log
            CustomLog ${APACHE_LOG_DIR}/example.com_access.log combined
        </VirtualHost>


    b) Fayl: /etc/apache2/sites-available/another.com.conf
        <VirtualHost *:80>
            ServerName another.com
            ServerAlias www.another.com
            DocumentRoot /var/www/another.com
            ErrorLog ${APACHE_LOG_DIR}/another.com_error.log
            CustomLog ${APACHE_LOG_DIR}/another.com_access.log combined
        </VirtualHost>

2. Konfiqurasiyanı Aktiv Etmək:
    sudo a2ensite example.com.conf
    sudo a2ensite another.com.conf
    sudo systemctl restart apache2


3. Fayl Strukturunun Hazırlanması: Hər saytın öz məzmununu saxlamaq üçün müvafiq qovluqları yaradın:
    sudo mkdir -p /var/www/example.com
    sudo mkdir -p /var/www/another.com



IP-based Virtual Host Nümunəsi: Bunu yazmadım.... LAzım gəldikdə internetdən araşdırıb yazmaq olar. Çünki mühidlər hərdəfə yenilərin və 
fərqli formada quraşdırma tələb edilə bilir. Digəri yəni yuxarıdakınada aiddir bu.....

-->


<?php


