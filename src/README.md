## About
This package is a laravel wrapper for [despark/image-purify](https://github.com/despark/image-purify)

## Installation
Get it from composer
```bash
composer require despark/laravel-image-purify
```

Add our service provider to `config/app.php`
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