# PDE @ IDX

Yii 2 Basic based project.

## REQUIREMENTS

The minimum requirement by this project that your Web server supports PHP 5.6.0.

## Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```
**NOTES:**
- We won't create the database for you, this has to be done manually before you can access it.
