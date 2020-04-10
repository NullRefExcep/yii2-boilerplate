include ../.env
export
install:
	make install-common-soft
	make install-docker
	make install-docker-compose
install-common-soft:
	apt-get update && apt-get install -y apt-transport-https ca-certificates curl gnupg2 software-properties-common
install-docker:
	curl -fsSL https://download.docker.com/linux/debian/gpg | apt-key add && \
	apt-key fingerprint 0EBFCD88 && \
	add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/debian stretch stable" && \
	apt-get update && \
	apt-get install -y docker-ce
install-docker-compose:
	curl -L \
	https://github.com/docker/compose/releases/download/1.25.4/docker-compose-`uname -s`-`uname -m` \
	> /usr/local/bin/docker-compose && \
	chmod +x /usr/local/bin/docker-compose && \
	docker-compose --version
rebuild:
	docker-compose build --force-rm
up:
	docker-compose up --remove-orphan
rebuild-and-up:
	docker-compose up -d --build --force-recreate
start:
	docker-compose up -d
start-mysql:
	docker-compose start mysql
rm:
	docker-compose rm
stop:
	docker-compose stop
down:
	docker-compose down --remove-orphan
restart:
	docker-compose restart
restart-ngnix:
	docker-compose restart ngnix
restart-php:
	docker-compose restart php
restart-mysql:
	docker-compose restart mysql
rebuild-up:
	make rebuild && make up
kill:
	docker-compose kill

logs:
	docker-compose logs -f
logs-php-queue:
	docker-compose logs -f php-queue

# Bash
bash-nginx:
	docker-compose exec nginx bash
bash-php:
	docker-compose exec php bash
bash-php-web:
	docker-compose exec php-web bash
bash-php-queue:
	docker-compose exec php-queue bash
bash-mysql:
	docker-compose exec mysql bash
