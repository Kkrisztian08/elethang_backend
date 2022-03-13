Ambrus Pálma Zita       Vizsgaremek Honlap      2021.09.01-2022.04.15



Először a backend beizzítását kell megtenni (feltételezve hogy már van):

    composer install

    cp .\.env.example .env

    php .\artisan key:generate

    php artisan migrate

    php artisan db:seed



----------------------------------------------------
Ami a frontendhez kell plusznak:   


    --------  composer create-project laravel/laravel Elethang_Honlap_Frontend (csak ha előlről kezded)

    (ellenőrizni van e node: node -v)

    composer global require laravel/installer

    php artisan serve 

--> új terminal <--

    composer require laravel/ui
    php artisan ui vue --auth (login stb)

    npm install

    npm run dev (kétszer, ha nem jó -> 
    npm update vue-loader és utána újra)

    php artisan migrate (megkérdeznii kell e)

----------------------------------------------------
Ami a honlap klónozásához szükségesek:



   ----------- composer global require laravel/installer   /     composer install ---------megkérdezni kell e mindkettő

    cp .\.env.example .env

    php .\artisan key:generate

    php artisan migrate

    php artisan db:seed


    php artisan serve 

--> új terminal <--

    composer require laravel/ui
   ---------------- php artisan ui vue --auth (login stb)

    npm install

    npm run dev (kétszer, ha nem jó -> 
    npm update vue-loader és utána újra kétszer az npm run dev)

    php artisan migrate (megkérdezni kell e)
