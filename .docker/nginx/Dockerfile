FROM nginx:1.15.3-alpine

RUN addgroup -g 1000 www-data \
    && adduser -u 1000 -g 1000 -G www-data -D -H www-data

COPY ./.docker/nginx/sites /etc/nginx/conf.d
COPY ./.docker/nginx/nginx.conf /etc/nginx/

COPY ./ /var/www

ENTRYPOINT ["nginx"]

EXPOSE 80
