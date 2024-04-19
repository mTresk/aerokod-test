run: env up composer key migrations swagger

up:
	docker-compose up -d --build

down:
	docker-compose down

composer:
	docker-compose run --rm app composer install

env:
	cp .env.example .env

key:
	docker-compose run --rm app php artisan key:generate

migrations:
	docker-compose run --rm app php artisan migrate:fresh --seed

swagger:
	docker-compose run --rm app php artisan l5-swagger:generate
