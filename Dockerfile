from php:7.4-apache

run docker-php-ext-install mysqli

expose 80

run chown -R www-data:www-data /var/www/html
run chmod -R o-x /var/www/html
run chmod -R o-w /var/www/html

copy db.php /var/www/html
