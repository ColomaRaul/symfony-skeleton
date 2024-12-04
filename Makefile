.PHONY: up bash init
up:
	cd docker && docker-compose up

bash:
	cd docker && docker-compose exec php sh

init:
	@docker network create app || true
	@docker network create message_queue || true
	@docker network create database || true
	$(MAKE) up
