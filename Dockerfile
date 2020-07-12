FROM wordpress

COPY bin/wp-setup /usr/local/bin/setup
COPY ./ /var/www/html/wp-content/plugins/scrutinize-wp/

RUN apt-get update \
  && apt-get install -y less \
  && curl https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    --output /usr/local/bin/wp \
  && chmod +x /usr/local/bin/wp
