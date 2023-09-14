# laravel-bunny

This package has been employed to generate URLs for privately uploaded images on Bunnynet.

## Installation

You can install the package using Composer:

```php
composer require sevenspan/bunny
```

To publish the configuration file, run the following command:

```php
 php artisan vendor:publish --tag=config
```

Once published, the configuration file will have the following content:

```php
return [
    /*
    |--------------------------------------------------------------------------
    | 
    |--------------------------------------------------------------------------
    |
    | API KEY.
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
    | EXPIRATION TIME
    |--------------------------------------------------------------------------
    |
    | EXPIRATION TIME
    |
    */
    'expiration_time' => env('BUNNY_EXPIRATION_TIME', '360'),


];
```

Make sure to customize the configuration values according to your requirements.

## Usage

To create a private URL using Bunny Net, you'll need to utilize the Bunny class. First, make sure to include it in your code:

```php
use Sevenspan\Bunny\Bunny;
```

The following parameters are required to generate a private URL:

- api_key: Your Bunny Net API key.
- signed_url: Acquire the signed_url from your Bunnynet account under **CDN** > **General** > **HostNames** > **Linked Hostnames** section. Use the provided Hostname as your `signed_url`.
- expiration_time: The time until the generated URL remains valid.

> Note: The default expiration time for the generated URL is set to 5 minutes. After this period, the URL will expire automatically.

### Function

To generate a private URL, you can use the `getImageUrl` function provided by the Bunny class. Here's the method signature:

```php
getImageUrl($path)
```

## Example

Here's an example of how to use the `getImageUrl function:
`
```php
  $path = "capital_test.PNG";
  $url = Bunny::getImageUrl($path);
```   

In this example, the `$path` variable contains the path to the media file for which you want to create a private URL. The generated private URL is stored in the `$url` variable.

Remember to replace "capital_test.PNG" with the actual path of the media file you want to generate a private URL for.

