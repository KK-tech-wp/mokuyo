# システム開発授業

## 起動
プロジェクトルートで、以下のコマンドで各コンテナが起動します
```
docker compose up
```

## table作成
プロジェクトルートで以下のコマンドでMYSQLクライアントに接続します
```
docker compose exec mysql mysql techc
```
以下のコマンドでテーブルを作成します　
```
CREATE TABLE テーブル名
```
以下のコマンドでテーブルまたはデータベースを確認できます
```
show tables;
show datebases;
```
以下のコマンドでデータベースの中身を確認できます
```
select*from データベース名
```

## ブラウザからアクセス
実行したいファイルを以下のコマンドで実行
```
http://サーバーのアドレス//~~~.php
```



*public
    *access.php
    接続できること確認
    *phptest.php
    現在の日時を表示する

