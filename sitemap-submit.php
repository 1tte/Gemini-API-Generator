<?php
// Baca file urls.txt dan masukkan semua URL ke dalam array
$urls = file('urls.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Loop melalui setiap URL
foreach ($urls as $url) {
    $encodedUrl = urlencode($url);
    $sitemapUrl = "https://content.googleapis.com/webmasters/v3/sites/https%3A%2F%2F{$encodedUrl}%2F/sitemaps/https%3A%2F%2F{$encodedUrl}%2Fpost-sitemap.xml";
    
    $ch = curl_init();
    
    $headers = [
        'Host: content.googleapis.com',
        'Content-Length: 0',
        'Sec-Ch-Ua: "Chromium";v="127", "Not)A;Brand";v="99"',
        'Accept: */*',
        'Accept-Language: en-US',
        'Sec-Ch-Ua-Mobile: ?0',
        'Authorization: Bearer ya29.a0AcM612zKgSaeyVH9uBj2TZm22vhstmNmNhGLYENmM4-gG4KPhDjxCAkLq6Gwmh3x9ZPbhcOfpgLGMy2yjl7AOJ_uLuNaQl-1H5kDom7k7ioWDcby6mDwIzLHk6-5eQyGOj95ILE0Z9qG0bbjhgNLhZag8sn2fsFt3Q0aCgYKAQUSARMSFQHGX2MiTgmY4KD0lFEsFIcCaAwGeA0170',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.6533.100 Safari/537.36',
        'Sec-Ch-Ua-Platform: "Windows"',
        'Origin: https://eriarmedia.com',
        'X-Client-Data: CJmOywE=',
        'Sec-Fetch-Site: cross-site',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Dest: empty',
        'Referer: https://eriarmedia.com/',
        'Accept-Encoding: gzip, deflate, br',
        'Priority: u=1, i',
    ];
    
    curl_setopt_array($ch, [
        CURLOPT_URL => $sitemapUrl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
    ]);
    
    $response = curl_exec($ch);

    if ($response === false) {
        echo "Curl error for {$url}: " . curl_error($ch) . PHP_EOL;
    } else {
        echo "Success {$url}" . $response . PHP_EOL;
    }

    curl_close($ch);
}
