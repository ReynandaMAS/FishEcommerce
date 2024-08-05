# composer update
# composer install
# npm install

🔰
# composer require azishapidin/indoregion
# php artisan indoregion:publish
# composer dump-autoload

    php artisan migrate
# Import semua data dari Provinsi sampai Kelurahan sekaligus
    php artisan db:seed --class=IndoRegionSeeder      # Import data Provinsi, Kota/Kabupaten, Kecamatan/Distrik dan Desa/Kelurahan
# Anda juga bisa melakukan Import data satu per satu, mulai dari Provinsi sampai Kelurahan
    php artisan db:seed --class=IndoRegionProvinceSeeder      # Import data provinsi
    php artisan db:seed --class=IndoRegionRegencySeeder       # Import data kota/kabupaten
    php artisan db:seed --class=IndoRegionDistrictSeeder      # Import data kecamatan/distrik
    php artisan db:seed --class=IndoRegionVillageSeeder       # Import data desa/kelurahan

