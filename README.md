## About
This package is a laravel wrapper for [despark/image-purify](https://github.com/despark/image-purify)

## Installation
Get it from composer
```bash
composer require despark/laravel-image-purify
```

With Laravel 5.5 or newer, the package will be discovered automatically.
If you're using an older version of Laravel, add the following to your
`config/app.php` file:

```php
$providers = [
    ...
    Despark\Laravel\ImagePurify\ImagePurifyServiceProvider::class,
]
```
If you want an instance of the purifier you can dependency inject `Despark\ImagePurify\Interfaces\ImagePurifierInterface`

If instead you want to register a facade add this to you `config/app.php`

```php
$aliases = [
    ...
    'ImagePurify' => \Despark\Laravel\ImagePurify\Facades\ImagePurify::class
]
```

If you need custom options you can publish the config via
```bash
php artisan vendor:publish --provider "Despark\Laravel\ImagePurify\ImagePurifyServiceProvider" --tag config
```

## Example Usage
```php

use Despark\ImagePurify\Interfaces\ImagePurifierInterface;

class HomeController extends Controller{
    
    public function optimize(ImagePurifierInterface $purifier){
        $purifier->purify('path/to/file');
    }
}

```

*For additional options and usage see  [despark/image-purify](https://github.com/despark/image-purify) documentation.*