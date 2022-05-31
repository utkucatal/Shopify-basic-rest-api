<?php
function PostMethod($url, $token)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $headers = [
        'X-Shopify-Access-Token: '.$token,
        'Content-Type:application/json'
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


    $payload ='{
        "image": {
            "src": "https://cdn.shopify.com/s/files/1/0107/9820/2938/products/CLOVECORE4954copy_4d257312-9baf-40f1-aad2-b10d8af11227.jpg",
            "position": 2,
            "product_id": 6990775222412
        }
    }';

    curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );



    $result = curl_exec($ch);
    curl_close($ch);

    $test = json_decode($result, true);
    //$f =$test['products'][0]['id'];

    $test2 = json_decode($result);
    //$s = $test2->products{1}->id;
    var_dump($result);
    return $result;
}

PostMethod("https://utkuapitest.myshopify.com/admin/api/2022-04/products/6990775222412/images.json", "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");
