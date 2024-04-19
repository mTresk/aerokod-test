run: up env composer migrations

up:
	docker-compose up -d --build

down:
	docker-compose down

composer:
	docker-compose run --rm app composer install

env:
	cp .env.example .env

migrations:
	docker-compose run --rm app php artisan migrate:fresh --seed
