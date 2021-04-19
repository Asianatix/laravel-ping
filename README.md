# Pantau Server

Pakej simple dimana ianya dapat memulangkan status kod HTTP berdasarkan IP yang diberi

## Pemasangaan

Pasang melalui Composer:
```bash
composer require MDCN/pantau-server
```
Sila daftar dalam ServiceProvider danFacade:
```php
// config/app.php

'providers' => [
    // ...
    Karlmonson\Ping\PingServiceProvider::class,
];

'aliases' => [
    // ...
    'Ping' => Karlmonson\Ping\Facades\Ping::class,
];
```

## Cara Guna

```php
<?php

namespace App\Http\Controllers;

use Pantau;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    /**
     * Show the current health of a given URL.
     *
     * @param  string  $url
     * @return string
     */
    public function healthCheck($url)
    {
        $health = Pantau::check($url);

        if($health == 200) {
            return 'Hidup!';
        } else {
            return 'Mati :(';
        }
    }
}
```
