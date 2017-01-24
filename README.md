# agrostatic
Library for Agro24 project to get some methods with static files.

Docs in process...

To install use:
"$ composer require fairhypo/agrostatic"

In config/app.php add:
"Fairhypo\Agrostatic\AgrostaticServiceProvider::class,"

Use method getStaticPath() with inputs:

getStaticPath(123); - just integer id = 123

$user = User::find(123);
getStaticPath($user, 600); - model object and optional width = 600