run this after cloning
#before anything check env first
composer i
npm i
php artisan generate:key
php artisan migrate --seed

always run scripts below before developing, there should be atleast 3 terminal running for each script below 
php artisan serve
npm run dev
npm run watch:tailwind