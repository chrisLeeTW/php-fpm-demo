FROM composer AS build-stage

COPY ./src /code
RUN cd /code && \
    composer install \
    --no-interaction \
    --no-dev \
    --no-progress \
    --no-suggest \
    --no-ansi \
    --prefer-dist \
    --no-scripts \
    --optimize-autoloader \
    --ignore-platform-reqs

#### final stages ####

FROM php:7.0-fpm-jessie

COPY --from=build-stage /code/ /code

WORKDIR /code

RUN ln -s /proc/self/fd/1 /code/storage/logs/laravel.log && \
    chown -R www-data.www-data /code

