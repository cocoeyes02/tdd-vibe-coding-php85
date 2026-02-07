# PHP コーディング規約

## 必須ルール

### 1. strict_types

全PHPファイルの先頭に `declare(strict_types=1)` を記述する。

```php
<?php

declare(strict_types=1);
```

### 2. 型宣言

- プロパティには型宣言を付ける
- メソッドの引数には型宣言を付ける
- メソッドの戻り値には型宣言を付ける
- 不要なnull許容は避ける

### 3. テスト実行

- テストは `make test` で実行する
- `./vendor/bin/phpunit` を直接実行しない

### 4. PHPUnit

- 厳密比較には `assertSame` を使用（`assertEquals` ではなく）
- テストメソッド名は意図を表す（`testMultiplication`, `testEquality` など）

## 推奨ルール

### PHP 8.x 機能

以下の機能は本の写経では使用しないが、通常のプロジェクトでは推奨：

- Constructor Property Promotion
- readonly プロパティ
- Named Arguments
- Match式
