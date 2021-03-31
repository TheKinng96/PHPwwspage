wp:
	@docker-compose up -d;
	@docker exec wordpress_wws php -i | grep upload

ssh:
	@docker exec -it wordpress_wws bash;

stop: 
	@docker-compose down;