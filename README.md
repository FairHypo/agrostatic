composer require fairhypo/agrostatic
================

Library for Agro24 project to get some methods with static files.




## Installation

Pull this package in through Composer.

```js

    {
        "require": {
            "fairhypo/agrostatic": "^1.0"
        }
    }

```


### Laravel 5.* Integration

Add the service provider to your `config/app.php` file:

```php

    'providers'     => array(

        //...
        Fairhypo\Agrostatic\AgrostaticServiceProvider::class,

    ),

```


## Usage

### Using Agrostatic methods



| Method                |         Input         | Description                                                       |
|-----------------------|-----------------------|-------------------------------------------------------------------|
| getStaticPath()       |  $identifier, $width  | Get path of photo by id or by related model                       |



## License

This template is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)




## Contact

Yuriy Maslov (developer)

- Email: yuriy.maslof@gmail.com