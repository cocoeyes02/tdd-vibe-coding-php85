# Claude Code ルール

このプロジェクトでClaude Codeが従うべきルールです。

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

## issue、PR、コメント

- **日本語**で記述する
- 末尾に `Co-Authored-By: モデル名 <noreply@anthropic.com>` を追加する

### issueの例
```
タイトル: ユーザー認証機能を実装する

## 目的
ユーザーがログイン・ログアウトできるようにする。

## やること
- [ ] ログイン画面の作成
- [ ] 認証ロジックの実装
- [ ] ログアウト機能の実装

## 参考
- 関連ドキュメントや参考URLなど

---

Co-Authored-By: Claude Opus 4.5 <noreply@anthropic.com>
```

### PRの例
```
タイトル: feat: ユーザー認証機能を実装

## 概要
ログイン・ログアウト機能を実装しました。

## 変更内容
- ログイン画面を追加
- 認証ロジックを実装
- ログアウト機能を追加

## 関連Issue
- #XX

---

Co-Authored-By: Claude Opus 4.5 <noreply@anthropic.com>
```

## セッション記録

issueに都度セッション記録をまとめる。以下の内容を含める：
- 実施内容
- 学んだこと
- 成果物
