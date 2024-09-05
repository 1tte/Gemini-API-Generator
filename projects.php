<?php
error_reporting(0);
// Include necessary files
include 'headers.php';
include 'important.php'; 
include 'update_operations.php';
define('COLOR_DEFAULT', "\033[0m");   // Default color
define('COLOR_SUCCESS', "\033[32m");  // Green
define('COLOR_FAILURE', "\033[31m");  // Red

class CurlRequest {
    private $url;
    private $headers;
    private $postfields;
    private $cookies;

    public function __construct($url, $headers, $postfields, $cookies) {
        $this->url = $url;
        $this->headers = $headers;
        $this->postfields = $postfields;
        $this->cookies = $cookies;
    }

    public function makeRequest() {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_COOKIE, $this->cookies);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->postfields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        sleep(5);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;

    }
}

// CREATE PROJECTS
$request1 = new CurlRequest($urls[0], $headersConsole, $pf1, $cookiez);
$request1->makeRequest();

// ENABLE GENLANG
$request2 = new CurlRequest($urls[1], $headersConsole, $pf2, $cookiez);
$request2->makeRequest();

// CREATE API
$request3 = new CurlRequest($urls[2], $headersConsole, $pf3, $cookiez);
$response3 = $request3->makeRequest();

// Decode the JSON response to get the API key
$responseData3 = json_decode($response3, true);

// Ensure the response is as expected and extract the API key
$apiKey = "";
if (isset($responseData3[0]['results'][0]['data']['createApiKey']['name'])) {
    $apiKey = $responseData3[0]['results'][0]['data']['createApiKey']['name'];
} else {
    die('Failed to retrieve API key from response.');
}

// Update the postfields_operations.json file with the new API key
$pf4 = updatePostfields($apiKey);

// SHOW METADATA
$request4 = new CurlRequest($urls[9], $headersConsole, $pf4, $cookiez);
$response4 = $request4->makeRequest();

// Decode the JSON response
$responseData4 = json_decode($response4, true);

// Ensure the response is as expected and extract the required fields
$keyData = $responseData4[0]['results'][0]['data']['getOperation'] ?? null;

if ($keyData) {
    $projectId = $keyData['metadata']['project']['projectId'];
    $name = $keyData['response']['name'];
    $displayName = $keyData['response']['displayName'];
    $keyString = $keyData['response']['keyString'];
    $createTime = $keyData['response']['createTime'];

    // Extract the key ID from the name
    $keyId = substr($name, strrpos($name, '/') + 1);

    function enableGen($projectId, $keyId, $keyString, $headersApi, $cookies){
        $url = 'https://apikeys.clients6.google.com/v1/projects/' . $projectId . '/apiKeys/' . $keyId . '?updateMask=displayName,apiTargetKeyDetails&key=AIzaSyCI-zsRP85UVOi0DjtiCwWBwQ1djDy741g';
        $postfields = '{"displayName":"API Key","keyId":"' . $keyId . '","currentKey":"' . $keyString .'","createTime":"2024-08-08T13:27:59.976454Z","apiTargetKeyDetails":{"apiTargets":{"generativelanguage.googleapis.com":{}}}}';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headersApi);
        curl_setopt($ch, CURLOPT_COOKIE, $cookies);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        $response = curl_exec($ch);
        
        curl_close($ch);

        echo $response;

    }
    
    enableGen($projectId, $keyId, $keyString, $headersApi, $cookiez);

    include 'count.php';
} else {
    die('Failed to retrieve key data from response.');
}




// SHOW METADATA
$request5 = new CurlRequest($urls[7], $headersConsole, $crutz, $cookiez);
$response5 = $request5->makeRequest();

// Decode the JSON data
$dataEmail = json_decode($response5, true);

// Extract the email address
$email = $dataEmail[0]['results'][0]['data']['metaApiService']['iamPolicies'][0]['bindings'][0]['members'][0];

// Remove the "user:" prefix
$email = str_replace('user:', '', $email);

// Output the email address
echo $email;

// Example query: Insert data
$apiKey = $keyString;
$value = $keyId;


// Prepare the data to be written
$data = $apiKey . "\n";

// Specify the file path
$file = 'result/apikey-' . $email . '.txt';

// Open the file in append mode
$fileHandle = fopen($file, 'a');

// Check if the file opened successfully
if ($fileHandle) {
    // Write the data to the file
    fwrite($fileHandle, $data);
    
    // Close the file
    fclose($fileHandle);

    echo ' | ' . COLOR_SUCCESS . $apiKey . COLOR_DEFAULT . ' | ' . $createTime . ' | ✔' . PHP_EOL;
} else {
    echo "Unable to open the file.";
}