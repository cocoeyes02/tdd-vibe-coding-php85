---
name: session-log
description: PRマージ後にIssueへセッション記録を追加する
allowed-tools: mcp__github__add_issue_comment
---

# セッション記録

PRマージ後に、対応するIssueへセッション記録を追加する。

## 使用タイミング

ユーザーが「マージしたよ」と言った後に実行する。

## 出力フォーマット

```markdown
## セッション記録

### 実施内容

- 箇条書きで実施内容を記載

### 学んだこと

- 箇条書きで学んだことを記載

### 成果物

- PR #XX (マージ済み)
- PHPレビュースコア: XX/40

---

Co-Authored-By: Claude Opus 4.5 <noreply@anthropic.com>
```

## 手順

1. マージされたPRに対応するIssue番号を特定
2. 上記フォーマットでコメントを作成
3. `mcp__github__add_issue_comment` でIssueにコメントを追加
4. mainブランチに切り替えてpull
