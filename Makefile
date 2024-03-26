.PHONY: up bash
up:
	docker-compose up

bash:
	docker-compose exec php bash