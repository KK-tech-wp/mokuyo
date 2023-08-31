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


##　掲示板作成

投稿を保存するためのテーブルを作成
 ```
CREATE TABLE `bbs_entries` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `body` TEXT NOT NULL,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
);
 ```
画像アップロード機能を追加します。
PHPの実行ユーザーに権限のあるディレクトリの作成をDocokerfileに追記。
```
RUN install -o www-data -g www-data -d /var/www/upload/image/
```


データベースの掲示板用テーブルに画像を保存するパスを入れておくカラムを追加
```
ALTER TABLE `bbs_entries` ADD COLUMN image_filename TEXT DEFAULT NULL;
```
ページ作成
https://github.com/KK-tech-wp/mokuyo/blob/main/public/zenki.php

