.PHONY: help console
bin_dir=vendor/bin

docker/docker-compose.env:
	cp docker/docker-compose.env.dist $@
	sed --in-place "s/{your_unix_local_username}/$(shell whoami)/" $@
	sed --in-place "s/{your_unix_local_uid}/$(shell id -u)/" $@

install: docker/docker-compose.env ## Install project

start: docker/docker-compose.env ## Launch containers
	docker-compose up -d

stop: ## Stop containers
	docker-compose stop

console: ## Connect to console container
	docker exec -it mmc-card_console /bin/login -p -f $(shell whoami)

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help
