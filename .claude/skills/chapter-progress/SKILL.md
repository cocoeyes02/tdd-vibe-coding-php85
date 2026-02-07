---
name: chapter-progress
description: TDD本の章ごとの進捗を表示する
allowed-tools: Read
---

# 章の進捗表示

TDD本 Part 1: Money Example の進捗を表示する。

## 使用タイミング

- 現在の進捗を確認したいとき
- 次に何をすべきか確認したいとき

## 出力フォーマット

```markdown
**進捗:**
| 章 | 内容 | スコア | 状態 |
|----|------|--------|------|
| 第1章 | Multi-Currency Money | XX/40 | 完了/進行中/未着手 |
| 第2章 | Degenerate Objects | XX/40 | 完了/進行中/未着手 |
| ... | ... | ... | ... |
| 第17章 | Money Retrospective | XX/40 | 完了/進行中/未着手 |
```

## Part 1 全章リスト

1. Multi-Currency Money - 多国通貨
2. Degenerate Objects - 退化オブジェクト
3. Equality for All - 等価性
4. Privacy - プライバシー
5. Franc-ly Speaking - フランに話させろ
6. Equality for All, Redux - 等価性の再検討
7. Apples and Oranges - りんごとみかん
8. Makin' Objects - オブジェクトを作る
9. Times We're Livin' In - 我らが生きる時代
10. Interesting Times - 興味深い時代
11. The Root of All Evil - すべての悪の根源
12. Addition, Finally - ついに加算
13. Make It - 作成
14. Change - 変更
15. Mixed Currencies - 異なる通貨の混合
16. Abstraction, Finally - ついに抽象化
17. Money Retrospective - 振り返り

## 手順

1. 完了した章のPRとIssueを確認
2. 各章のPHPレビュースコアを確認
3. 上記フォーマットで進捗を表示
