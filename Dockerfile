FROM php:7.4-fpm
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN sed -i 's/SECLEVEL=2/SECLEVEL=1/g' /etc/ssl/openssl.cnf

