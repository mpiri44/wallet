
A package for managing wallets of users
# Installing
Begin by pulling in the package through Composer.

```
composer require payamava/wallet

```
Next, if using Laravel 5, include the service provider within your config/app.php file.
```
'providers' => [
    payamava\wallet\WalletServiceProvider::class,
];

php artisan vendor:publish

php artisan migrate
```

## Usage

get log wallet for special user

```
$user->wallet()
```

Increase or decrease the amount of wallet
```
$user->cash(1000) //increase
$user->cash(-1000) //decrease
```

Get total Cash
```
  $user->totalCash()
```


Getting the details of the first charge of the account
```
  $user->firstCash()
```

Getting the details of the last charge of the account
```
  $user->lastCash()
```
