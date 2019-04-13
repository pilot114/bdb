build:
	@docker-compose build
start:
	@docker-compose up -d
restart:
	@docker-compose restart
stop:
	@docker-compose stop
enter:
	@docker exec -it -u workspace bdb_workspace_1 zsh