Ambrus Pálma Zita       Vizsgaremek Wblap      2021.09.01-2022.04.24

Amik a honlap klónozásához szükségesek:



    composer install

    cp .\.env.example .env

    php .\artisan key:generate

    php artisan migrate:refresh --seed

    php artisan serve




Mindig ha belenyúlunk a routes-ba ajánlatos ellenőrzés előtt ezeket a kódokat a terminálba írni:

    composer dump-autoload -o

    php artisan clear-compiled

    php artisan optimize





A frontend kezdetekor: 

Először a backend beizzítását kell megtenni (feltételezve hogy már van):

    composer install

    cp .\.env.example .env

    php .\artisan key:generate

    php artisan serve

----------------------------------------------------

Ami a frontendhez kellett plusznak:  

    --> új terminal <--

        composer require laravel/ui

        php artisan ui vue --auth 

        php artisan migrate:refresh --seed
