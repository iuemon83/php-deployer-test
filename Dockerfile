FROM php:latest

COPY --from=composer /usr/bin/composer /usr/bin/composer