serve:
	php yii serve --docroot=@webroot --port=8899
run:
	make serve
fix-permissions:
	chmod -R 777 runtime/ web/assets/
db-update:
	php yii modules-migrate
db-migrate:
	make db-update
db-create:
	mysql -u root -p -e 'CREATE SCHEMA $(db-name) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;'
env:
	(cp .env.example .env) && (nano .env)
message:
	php yii message src/messages/config.php
vendors-update:
	composer update
vendors-install:
	composer install -o
composer-download:
	(curl -sS https://getcomposer.org/installer | php) && (mv composer.phar /usr/local/bin/composer) && (composer global require "fxp/composer-asset-plugin:^1.2.0")
test:
	php codecept.phar run
codecept-download:
	wget http://codeception.com/codecept.phar
codecept-bootstrap:
	php codecept.phar bootstrap && php codecept.phar build
deploy:
	echo "Not implemented"
