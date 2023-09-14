<?php

namespace Sevenspan\Bunny;

use Sevenspan\Bunny\Exception\CustomException;

class Bunny
{

    public static function generateToken($mediaPath, $expireTime)
    {
        $apikey = config('bunny.api_key');
        $hashableBase = $apikey . '/' . $mediaPath . $expireTime;
        $token = hash('sha256', $hashableBase, true);
        $token = base64_encode($token);
        $token = strtr($token, '+/', '-_');
        $token = str_replace('=', '', $token);
        return $token;
    }


    public static function getImageUrl($mediaPath, $expires = null)
    {

        $apikey = config('bunny.api_key');
        $signedURL = config('bunny.signed_url');

        if (empty($apikey)) {
            throw new CustomException("API key is Required", 400);
        }

        if (empty($signedURL)) {
            throw new CustomException("Signed URL is Required", 400);
        }

        if (empty($expires)) {
            $expires = time() + config('bunny.expiration_time');
        } else {
            $expires = time() + $expires;
        }


        if (empty($mediaPath)) {
            throw new CustomException("media path is required.", 400);
        }

        $token = self::generateToken($mediaPath, $expires);

        if (empty($token)) {
            throw new CustomException("token is required.", 400);
        }

        $url = "$signedURL/{$mediaPath}?token={$token}&expires={$expires}";


        return $url;
    }
}
