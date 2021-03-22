wp:
	@docker-compose up -d;

ssh:
	@docker exec -it wordpress_wws bash;

stop: 
	@docker-compose down;