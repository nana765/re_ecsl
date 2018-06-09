# ecsl
## Larabelのプログラムをクローンする場合
### 1. githubからクローンする
```
 git clone https://github.com/imaharu/re_ecsl.git
```
### 2. クローン後、`.env`ファイルと`vender`がない状態の時
  1. venderを作る
```
　　composer install
```
  2. .envを作る

  デフォルトで入っている`.env.examle`を`.env`に変える。
```
　cp .env.example .env
```

### 3. .envファイルのAPP_KEYにアプリケーションキーを指定する。
```
　php artisan key:generate
```

### 4. larabelが立ち上がるか確認
```
php artisan serve
```
ctr+Cで終了。


## DB設定
### 1. mysqlでuserを新規作成＋権限を付与
```
GRANT ＜操作名＞ ON ＜データベース名＞.＜テーブル名＞TO ＜ユーザ名＞@＜ホスト名＞ IDENTIFIED BY '＜パスワード＞';
```
今回は以下のように記述
```
grant all on ecsl.* to ecsl@localhost identified by 'pass'; ユーザーを作成
FLUSH PRIVILEGES;//権限の反映
```
→ユーザーecslでアクセス可能になった。

→ecsl（DB）が利用可能
### 2. .envファイルの変更
```
DB_HOST=localhost
DB_DATABASE=データベース名
DB_USERNAME=ユーザー名
DB_PASSWORD=ユーザー名のパスワード
```

## テーブル作成
### 1. テーブル作成用のマイグレーションファイルを作成　(database/migrationsの中に作られる)
```
php artisan make:migration {テーブル名}_table
```
### 2. マイグレーションファイルにDBスキーマ構成を記載　
### 3. マイグレーション実行してテーブルを作成
```
php artisan migrate
```
##### 以下のエラーが出た場合は
```
SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table `users` add unique `users_email_unique`(`email`))
```

app\Providers\AppServiceProvider.phpに以下のプログラムを記述
```
use Illuminate\Support\Facades\Schema;

public function boot()
{
    Schema::defaultStringLength(191);
}
```

```
vendor/laravel/framework/src/Illuminate/Foundation/Auth/AuthenticatesAndRegistersUsers.php
public function username()
    {
        return 'email';
    }
を変更
```
