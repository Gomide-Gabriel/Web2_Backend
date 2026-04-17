FROM php:8.2-cli

WORKDIR /app

COPY . /app

EXPOSE 10000

CMD ["sh". "-c", "php -s 0.0.0.0:${PORT:-10000} -t /app"]