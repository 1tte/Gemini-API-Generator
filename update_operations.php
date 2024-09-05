<?php
function updatePostfields($apiKey) {
    sleep(5);
    // Define the path to the JSON file
    $postfieldsFile = 'postfields/postfields_operations.json';

    // Read the JSON file
    $postfieldsJson = file_get_contents($postfieldsFile);

    // Check if the file content was successfully read
    if ($postfieldsJson === false) {
        die('Failed to read postfields_operations.json file.');
    }

    // Decode the JSON content to an associative array
    $postfieldsArray = json_decode($postfieldsJson, true);

    // Check if the JSON decoding was successful
    if (is_null($postfieldsArray)) {
        die('Failed to decode JSON from postfields_operations.json file.');
    }

    // Update the "name" field in the variables section
    if (isset($postfieldsArray['variables']['name'])) {
        $postfieldsArray['variables']['name'] = $apiKey;
    } else {
        die('Variables section not found in JSON.');
    }

    // Change "backendOverrides" from an empty array to an empty object
    if (isset($postfieldsArray['requestContext']['backendOverrides']) && is_array($postfieldsArray['requestContext']['backendOverrides'])) {
        $postfieldsArray['requestContext']['backendOverrides'] = new stdClass();
    }

    // Encode the array back to JSON
    $updatedPostfieldsJson = json_encode($postfieldsArray, JSON_PRETTY_PRINT);

    // Check if JSON encoding was successful
    if ($updatedPostfieldsJson === false) {
        die('Failed to encode updated JSON.');
    }

    // Save the updated JSON content back to the file
    if (file_put_contents($postfieldsFile, $updatedPostfieldsJson) === false) {
        die('Failed to save updated JSON to postfields_operations.json file.');
    }

    // Return the updated JSON content
    return $updatedPostfieldsJson;
}
?>
