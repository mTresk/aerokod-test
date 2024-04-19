<h1>Тестовое задание для Aerokod</h1>

***
<h3>Технические требования:</h3>
Docker, Docker Compose

***
<h3>Запуск приложения</h3>

В корне проекта выполнить:

```php
make run
```

Остановка контейнера:

```php
make down
```

Запуск контейнера:

```php
make up
```

***
<h3>Маршруты</h3>

Эндпоиты доступны по адресу: http://localhost:8000/

```
GET|HEAD api/comments

POST api/comments

GET|HEAD api/comments/{comment}

PUT|PATCH api/comments/{comment}

DELETE api/comments/{comment}

GET|HEAD api/posts

POST api/posts

GET|HEAD api/posts/{post}

PUT|PATCH api/posts/{post}

DELETE api/posts/{post}

GET|HEAD api/users

POST api/users

GET|HEAD api/users/{user}

PUT|PATCH api/users/{user}

DELETE api/users/{user}
```

***
<h3>Email</h3>

Почтовый клиент доступен по адресу http://localhost:8025

<em>Образ Mailhog в докере для arm64 (Mac OS), возможно нужно заменить на других ОС</em>

