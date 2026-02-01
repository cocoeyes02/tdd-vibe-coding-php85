.PHONY: build up down shell

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
