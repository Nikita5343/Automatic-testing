install:
	composer install
dump:
	composer dump-autoload
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src tests
testing:
	php ./tests/Test2.php
