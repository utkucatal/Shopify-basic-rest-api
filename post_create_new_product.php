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
        "product": {
           "title":"test product",
           "body_html": "\u003cstrong\u003eGood product!\u003c\/strong\u003e",
            "vendor": "Utku",
            "product_type": "Shoes",
            "tags": ["Jack \u0026 Jones", "Nike", "Sports"]
        }
      }
    ';
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );

    $result = curl_exec($ch);
    curl_close($ch);

    var_dump($result);
    return $result;
}

PostMethod("https://utkuapitest.myshopify.com/admin/api/2022-04/products.json", "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");
