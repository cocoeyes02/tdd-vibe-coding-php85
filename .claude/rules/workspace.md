# 作業ディレクトリ ルール

## 基本方針

作業ディレクトリを変更せず、絶対パスを使用する。

## ルール

### 1. cdを使わない

```bash
# 悪い例
cd app/money && make test

# 良い例
cd /Users/kazukiotsu/src/github.com/cocoeyes02/tdd-vibe-coding-php85/app/money && make test
```

### 2. gitコマンドは絶対パスで

```bash
# 悪い例
git add src/Money.php

# 良い例
cd /Users/kazukiotsu/src/github.com/cocoeyes02/tdd-vibe-coding-php85 && git add app/money/src/Money.php
```

### 3. make testは対象ディレクトリで

各アプリケーションのMakefileがあるディレクトリで実行する：

- `app/money/` - Money Example
- `app/xunit/` - xUnit Example

## 理由

- カレントディレクトリの状態に依存しないコマンド実行
- 再現性の確保
- エラーの防止
