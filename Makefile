.PHONY: up bash
up:
	docker/docker-compose up

bash:
	cd docker && docker-compose exec php sh