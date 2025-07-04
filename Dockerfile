FROM php:8.2-cli

COPY . /app
WORKDIR /app

EXPOSE 10000

CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
