# Claude Code ルール

このプロジェクトでClaude Codeが従うべきルールです。

## 開発フロー

### 機能実装の手順
1. **issueを作成する** - コードを書く前に必ずissueを作成する
2. **featureブランチを作成する** - issue番号を含めたブランチ名にする
3. **TDDで実装する** - `/tdd` スキルを使用し、Red → Green → Refactor のサイクルを回す
4. **PRを作成する** - issueと紐づけてレビューを依頼する

## Git操作

### ブランチ運用
- mainブランチへの直接pushは禁止
- 必ずfeatureブランチを作成してPRを経由する

### コミットメッセージ
- **日本語**で記述する
- **Conventional Commits**規約に準拠する
  - `feat:` 新機能
  - `fix:` バグ修正
  - `docs:` ドキュメント
  - `style:` フォーマット（コードの動作に影響しない変更）
  - `refactor:` リファクタリング
  - `perf:` パフォーマンス改善
  - `test:` テスト追加・修正
  - `ci:` CI設定
  - `chore:` その他（ビルド、依存関係など）
- 末尾に以下を追加する:
  - `See-also:` 関連リンク（issue、PR、ソースコード、WebのURLなど）
  - `Co-Authored-By: モデル名 <noreply@anthropic.com>`

#### コミットメッセージ例
```
feat: ユーザー認証機能を追加

ログイン・ログアウト機能を実装しました。

See-also: https://github.com/cocoeyes02/tdd-vibe-coding-php85/issues/XX
Co-Authored-By: Claude Opus 4.5 <noreply@anthropic.com>
```

## TDD写経用テンプレート

TDD本の写経では、以下の統一フォーマットを使用する。

### Issueタイトル

```
TDD本 Part 1: Money Example - 第N章 章タイトル
TDD本 Part 2: xUnit Example - 第N章 章タイトル
```

例:
- `TDD本 Part 1: Money Example - 第7章 りんごとみかん`
- `TDD本 Part 1: Money Example - 第10章 timesの一般化`
- `TDD本 Part 2: xUnit Example - 第18章 xUnitへの第一歩`

### Issue本文

```markdown
## 概要

この章で何をするかの1-2行説明。

## 現状

変更前のコードや状態（リファクタリング章など必要な場合のみ）。

## タスク

- [ ] 具体的なタスク1
- [ ] 具体的なタスク2
- [ ] TODO.mdを更新

## 参考

- TDD本 第N章「原題」

---

Co-Authored-By: Claude Opus 4.5 <noreply@anthropic.com>
```

### PRタイトル

```
feat(money): 第N章 章タイトル
feat(xunit): 第N章 章タイトル
```

例:
- `feat(money): 第10章 timesの一般化`
- `feat(xunit): 第18章 xUnitへの第一歩`

### PR本文

```markdown
## 概要

1-2行でこの章で何をしたか。

## 変更内容

- 変更点1
- 変更点2

## 関連Issue

- #XX

---

Co-Authored-By: Claude Opus 4.5 <noreply@anthropic.com>
```

### PR作成時の注意

- `mcp__github__create_pull_request` の `body` パラメータには `\n` エスケープシーケンスを使わず、実際の改行を含めること
- PR作成前に必ず `/php-review` を実行し、結果をPRにコメントすること

## テスト実行

- テストは `make test` で実行する
- `./vendor/bin/phpunit` を直接実行しない
- 各アプリケーションのディレクトリで実行する
  - `app/money/` - Money Example
  - `app/xunit/` - xUnit Example

## セッション記録

issueに都度セッション記録をまとめる。以下のフォーマットを使用する：

```markdown
## セッション記録

### 実施内容

1. 具体的な作業1
2. 具体的な作業2

### 学んだこと

- 学び1
- 学び2

### 成果物

- PR: #XX
- 完了したTODO: 「XXX」

---

Co-Authored-By: Claude Opus 4.5 <noreply@anthropic.com>
```
