.PHONY: build up down shell test composer-install composer-update setup

# 初回セットアップ
setup: build up composer-install
	@echo "セットアップ完了！'make test' でテストを実行できます"

# Dockerイメージをビルド
build:
	docker compose build

# コンテナを起動
up:
	docker compose up -d

# コンテナを停止
down:
	docker compose down

# コンテナにシェルで入る
shell:
	docker compose run --rm php bash

# テストを実行
test:
	docker compose run --rm php vendor/bin/phpunit

# Composerの依存関係をインストール
composer-install:
	docker compose run --rm php composer install

# Composerの依存関係を更新
composer-update:
	docker compose run --rm php composer update
