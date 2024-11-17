# practice_confirm_test_20241110

## 環境構築
**Dockerビルド**
1. `git clone git@github.com :`
2. DockerDesktopアプリを立ち上げる
3. `docker-compose up -d --build`

> *Mac の M1・M2 チップの PC の場合、「マニフェスト リスト エントリに linux/arm64/v8 に一致するマニフェストがありません」のメッセージが表示されビルドができないことがあります。エラーが発生する場合は、docker- compose.yml ファイルの「mysql」内に「platform」の項目を追加で記載してください*
```bash
mysql:
platform: linux/x86_64(この文追加)
image: mysql:8.0.26
環境:
```

## 使用技術(実行環境)
- 例) Laravel 8.x(言語やフレームワーク、バージョンなどが記載されていると良い)

## ER図
< - - - 作成したER図の画像 - - - >

## URL
- 例) 開発環境：http://localhost/