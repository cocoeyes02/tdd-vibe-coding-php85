.PHONY: test composer-install composer-update

# テストを実行
test:
	docker compose -f ../../docker-compose.yml run --rm -w /app/app/money php vendor/bin/phpunit

# Composerの依存関係をインストール
composer-install:
	docker compose -f ../../docker-compose.yml run --rm -w /app/app/money php composer install

# Composerの依存関係を更新
composer-update:
	docker compose -f ../../docker-compose.yml run --rm -w /app/app/money php composer update
