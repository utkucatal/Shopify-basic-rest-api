<?php
function DeleteMethod($url, $token)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $headers = [
        'X-Shopify-Access-Token: '.$token
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $result;
}

$turned_values = DeleteMethod("https://f615603d17d899102fd4ee05e7965294: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@utkuapitest.myshopify.com/admin/api/2022-04/products/6986157260940/images/30197751578764.json", "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");
//products/{{product_id}}/images.json

var_dump($turned_values);