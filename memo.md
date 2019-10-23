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
  - composer使用しプロジェクト作成

- ローカルでのサーバー起動
```
php artisan serve
```


# ルート情報の基本
- getメソッドでアドレスと処理を割り当てる
- デフォルトは return view('welcome'); なのでwelcome.blade.phpというテンプレートファイルをレンダリングして表示する
```
Route::get( アドレス, 関数など);

関数の例
function(){
    return 値など;
}

値の例
view( テンプレート名 )
```
- こんなのもできる
```
function(){
    return ' HTMLのソースコード' l
}
```

- パラメータを設定することも可能
```
Route::get('/○○/{パラメータ}),function($引数){内容});
Route::get('test/{id}),function($id){内容});
```