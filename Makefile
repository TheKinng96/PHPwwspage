wp:
	@docker-compose up -d;
	@docker exec wordpress_wws php -i | grep upload

ssh:
	@docker exec -it wordpress_wws bash;

serve:
	@npm run watch

stop: 
	@docker-compose down;