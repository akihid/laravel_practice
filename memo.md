# Laravel導入まで

- https://getcomposer.org/download/ よりダウンロード
- 下記コマンド実行
```
sudo mv composer.phar /usr/local/bin/composer
chmod a+x /usr/local/bin/composer
composer -V
composer global require "Laravel/installer=~1.1"
composer create-project laravel/laravel laravelapp --prefer-dist
```
- コマンド内容
  - ファイル移動
  - 権限付与
  - バージョン確認
  - Laravelインストール
  ｖ- composer使用しプロジェクト作成

