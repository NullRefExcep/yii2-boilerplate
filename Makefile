serve:
	yii serve --docroot=@webroot
run:
	make serve
db-update:
	php yii modules-migrate
db-migrate:
	make db-update
message:
	php yii message src/messages/config.php
vendors-update:
	composer update
vendors-install:
	composer install
test:
	php codecept.phar run
codecept-download:
	wget http://codeception.com/codecept.phar
codecept-bootstrap:
	php codecept.phar bootstra && php codecept.phar build
deploy:
	echo "Not implemented"
