<?php
function GetMethod($url, $token)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $headers = [
        'X-Shopify-Access-Token: '.$token
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close($ch);

    $test = json_decode($result, true);
    $f =$test['products'][0]['id'];

    $test2 = json_decode($result);
    $s = $test2->products{1}->id;

    return array($f, $s);
}

$turned_values = GetMethod("https://f615603d17d899102fd4ee05e7965294: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@utkuapitest.myshopify.com/admin/api/2022-04/products.json", "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");

var_dump($turned_values);

echo "First Product's id= ".$turned_values[0];
echo "<br>Second Product's id= ".$turned_values[0];