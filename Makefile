build:
	docker build -t njavilas/php .

run:
	php artisan serve

lint:
	php-cs-fixer fix .