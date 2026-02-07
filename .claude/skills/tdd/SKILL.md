---
name: tdd
description: テスト駆動開発（TDD）で機能を実装する。Red→Green→Refactorのサイクルを厳守し、各ステップでコミットする
allowed-tools: Read, Write, Edit, Bash, Grep, Glob
---

# テスト駆動開発（TDD）ワークフロー

TDD本（Kent Beck著）に忠実なテスト駆動開発を行う。

## TDDサイクル

### 1. Red - 失敗するテストを書く

- 実装したい機能を表現するテストを**先に**書く
- テストを実行し、**失敗することを確認**する
- この時点ではプロダクションコードは存在しないか、不完全

### 2. Green - テストを通す最小限のコードを書く

- テストを通すための**最小限**のコードを書く
- 「罪深い」実装（ハードコードなど）でもOK
- 目的は**とにかくテストを通すこと**
- テストを実行し、**成功することを確認**する

### 3. Refactor - 重複を除去し、設計を改善する

- テストが通った状態を維持しながらリファクタリング
- 重複の除去、命名の改善、構造の整理
- テストを実行し、**引き続き成功することを確認**する

## コミット粒度

TDD写経では以下の粒度でコミットする：

| フェーズ | コミットタイミング | prefixの例 |
|----------|-------------------|------------|
| Red | 失敗するテストを書いた時点 | `test:` |
| Green | テストが通った時点 | `test:` |
| Refactor | リファクタリング完了時点 | `refactor:` |
| その他 | TODO更新、クリーンアップなど | `chore:` |

### コミット例

```
# Red
test: times()が新しいDollarを返すテストを追加（Red）

# Green
test: times()が新しいDollarを返すように実装（Green）

# Refactor
refactor: Dollarクラスの重複を除去

# その他
chore: TODO.mdを更新
```

## 重要なルール

1. **テストを先に書く** - プロダクションコードより先にテストを書く
2. **小さなステップ** - 一度に大きな変更をしない
3. **常にテストが通る状態を維持** - リファクタリング中も頻繁にテスト実行
4. **TODOリストを活用** - 本に出てくるTODOリストをTODO.mdで管理

## PHPUnit + JUnit の対応

| JUnit (本) | PHPUnit |
|------------|---------|
| `assertEquals` | `assertSame`（厳密比較） |
| `assertTrue` | `assertTrue` |
| `assertFalse` | `assertFalse` |
| `assertNull` | `assertNull` |

## 実行コマンド

```bash
# app/money の場合
cd app/money && make test

# app/xunit の場合
cd app/xunit && make test
```
