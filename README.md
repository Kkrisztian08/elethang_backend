Ambrus Pálma Zita       Vizsgaremek Honlap      2021.09.01-2022.04.15





Először a backend beizzítását kell megtenni (feltételezve hogy már van):



    composer install

    cp .\.env.example .env

    php .\artisan key:generate

    php artisan serve




----------------------------------------------------

Ami a frontendhez kell plusznak:  

    --> új terminal <--

        composer require laravel/ui

        php artisan ui vue --auth (login stb)

        php artisan migrate:refresh --seed

       

----------------------------------------------------




Ami a honlap klónozásához szükségesek:



    composer install

    cp .\.env.example .env

    php .\artisan key:generate

    php artisan migrate:refresh --seed

    php artisan serve








Mindig ha belenyúlunk a routes-ba:

    composer dump-autoload -o

    php artisan clear-compiled

    php artisan optimize

