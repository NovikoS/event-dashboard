FROM ghcr.io/napopravku/php:8.0-fpm-alpine

USER root

RUN apk add --no-cache \
    freetype \
    freetype-dev \
    libjpeg-turbo-dev \
    libxslt-dev \
    zip

RUN docker-php-ext-configure zip --with-zip \
    && docker-php-ext-install gd \
    && docker-php-ext-configure gd \
        --with-freetype=/usr/include/ \
        --with-jpeg=/usr/include/

COPY ./.docker/php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

COPY ./ ${WORKDIR}
RUN chown -R www-data ./

USER www-data

ARG DEV_MODE=false
RUN if [ ${DEV_MODE} = false ]; then \
  cp .env.k8s .env \
  && mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views \
  && composer install --no-interaction --no-scripts && composer dump-autoload --no-interaction --no-scripts \
;fi

ARG LIBRARY_PATH
ENV LIBS=${LIBRARY_PATH}

ENTRYPOINT ["php-fpm"]

EXPOSE 9000
