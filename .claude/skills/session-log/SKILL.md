---
name: session-log
description: PRマージ後にIssueへセッション記録を追加する
allowed-tools: mcp__github__add_issue_comment, mcp__github__update_issue
---

# セッション記録

PRマージ後に、対応するIssueへセッション記録を追加し、Issueをクローズする。

## 使用タイミング

ユーザーが「マージしたよ」と言った後に実行する。

## 出力フォーマット

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

## 記載ガイドライン

### 実施内容
- 番号付きリストで時系列順に記載
- 具体的なアクション（Issue作成、ブランチ作成、実装、PR作成など）

### 学んだこと
- TDDを通じて得た知見
- 本の内容と実装の関連
- PHPやPHPUnitの使い方

### 成果物
- マージされたPR番号
- 完了したTODO項目
- PHPレビュースコア（実施した場合）

## 手順

1. マージされたPRに対応するIssue番号を特定
2. 上記フォーマットでコメントを作成
3. `mcp__github__add_issue_comment` でIssueにコメントを追加
4. `mcp__github__update_issue` でIssueをクローズ
5. mainブランチに切り替えてpull
6. ローカルのfeatureブランチを削除
