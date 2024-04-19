run: up env composer key migrations

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
