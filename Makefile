.PHONY: up bash init stop down
up:
	cd docker && docker-compose up

bash:
	cd docker && docker-compose exec php sh

stop:
	cd docker && docker-compose stop

down:
	cd docker && docker-compose down

init:
	@docker network create app || true
	@docker network create message_queue || true
	@docker network create database || true
	$(MAKE) up
