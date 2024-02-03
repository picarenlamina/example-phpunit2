# url: https://dockertips.com/apache_y_php
FROM php:7.0-apache
COPY web /var/www/html
EXPOSE 80
