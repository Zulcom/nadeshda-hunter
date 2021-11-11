# Nadeshda Hunter

Инициализация и запуск
````
git clone https://github.com/Zulcom/nadeshda-hunter // клоним проект
docker-compose run --rm php composer update --prefer-dist // устанавливаем зависимости
docker-compose run --rm php composer install    // устанавливаем зависимости
docker-compose up -d // запускаем на https://localhost:8000
docker compose exec mysql bash // подключаемся к консоли mysql
mysql -p sait
Cоздаём таблицы

CREATE TABLE `portfolio` (
`id` INT NOT NULL AUTO_INCREMENT,
`user_id` INT,
`title` VARCHAR(255),
`cost` INT,
`description` VARCHAR(255)
);

CREATE TABLE `users` (
`id` INT NOT NULL AUTO_INCREMENT,
`username` VARCHAR(255),
`password` VARCHAR(255),
`auth_key` VARCHAR(255),
PRIMARY KEY (ID)
);

Добавляем польователя

INSERT INTO users (username,password,auth_key) VALUES ('admin','admin','admin');
