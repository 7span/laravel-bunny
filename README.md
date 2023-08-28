# laravel-bunny

This package has been utilized to create the URL for the privately uploaded image on Bunnynet.

## Installation

You can install the package via composer:

```
composer require sevenspan/bunny
```

You can publish the config file with:

```
php artisan vendor:publish --tag=config
```
This is the contents of the published config file:

```

return [
    /*
    |--------------------------------------------------------------------------
    | 
    |--------------------------------------------------------------------------
    |
    | API KEY .
    |
    */

    'api_key' => env('BUNNY_API_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    |SIGNED URL
    |--------------------------------------------------------------------------
    |
    | SIGNED URL.
    |
    */

    'signed_url' => env('BUNNY_SIGNED_URL', ''),

    /*
    |--------------------------------------------------------------------------
    | EXPIRASTION TIME
    |--------------------------------------------------------------------------
    |
    | EXPIRATION TIME
    |
    */
    'expiration_time' => env('BUNNY_EXPIRATION_TIME', '360'),


];
```
## Usage
```
use Sevenspan\Bunny\Bunny;
```
make a private URL using Bunny Net.

You need to pass Below parameter is required.

- api_key
- signed_url
- expiration_time

Note : if you do not pass expiration time then automatically consider 5 minutes. 

after 5 minutes, the URL will be is expired.


- below function using you can make a private url.
  you need to pass media path.

## Example
```
   $path = "capital_test.PNG";
   $url = Bunny::generatePrivateImageUrl($path);
```   

