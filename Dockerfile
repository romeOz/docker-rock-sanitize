FROM romeoz/docker-nginx-php
MAINTAINER romeOz <serggalka@gmail.com>

RUN rm -rf /etc/nginx/sites-enabled/*

ADD ./sites-enabled/ /etc/nginx/sites-enabled/
ADD ./public/ /var/www/rock-sanitize/public/
ADD ./composer.json /var/www/rock-sanitize/

WORKDIR /var/www/rock-sanitize/

RUN composer install --prefer-dist --no-dev

EXPOSE 80 433

CMD ["/usr/bin/supervisord"]