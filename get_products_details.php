<?php

function GetMetodu($url, $token)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $headers = [
        $token
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;

}

echo GetMetodu("https://f615603d17d899102fd4ee05e7965294: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@utkuapitest.myshopify.com/admin/api/2022-04/products/6986157260940.json", "X-Shopify-Access-Token: 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");
