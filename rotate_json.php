<?php

// Paths to files
$jsonFile1 = 'postfields/postfields_projects.json'; // First JSON file
$jsonFile2 = 'postfields/postfields_enable.json';   // Second JSON file
$jsonFile3 = 'postfields/postfields_api.json';      // Third JSON file
$jsonFile4 = 'postfields/postfields_metadata.json'; // Fourth JSON file
$jsonFile5 = 'postfields/postfields_keystring.json'; // Fifth JSON file
$jsonFile6 = 'postfields/postfields_operations.json'; // Sixth JSON file
$jsonFile7 = 'postfields/postfields_profile.json'; // Seventh JSON file

// Function to read JSON file
function readJsonFile($filePath) {
    $jsonContent = file_get_contents($filePath);
    if ($jsonContent === false) {
        die('Error reading JSON file: ' . $filePath);
    }
    return json_decode($jsonContent, true);
}

// Function to write JSON file
function writeJsonFile($filePath, $data) {
    $jsonContent = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    if ($jsonContent === false) {
        die('Error encoding JSON for file: ' . $filePath);
    }
    $result = file_put_contents($filePath, $jsonContent);
    if ($result === false) {
        die('Error writing JSON file: ' . $filePath);
    }
}

// Function to find and replace project ID
function replaceProjectId(&$array, $oldId, $newId) {
    foreach ($array as &$value) {
        if (is_array($value)) {
            replaceProjectId($value, $oldId, $newId);
        } elseif (is_string($value)) {
            $value = str_replace($oldId, $newId, $value);
        }
    }
}

// Function to update backendOverrides from array to object
function updateBackendOverrides(&$array) {
    foreach ($array as &$value) {
        if (is_array($value)) {
            updateBackendOverrides($value);
        }
    }

    // Convert empty arrays to empty objects
    if (isset($array['backendOverrides']) && is_array($array['backendOverrides']) && empty($array['backendOverrides'])) {
        $array['backendOverrides'] = (object)[];
    }
}

// Read and decode JSON files
$data1 = readJsonFile($jsonFile1);
$data2 = readJsonFile($jsonFile2);
$data3 = readJsonFile($jsonFile3);
$data4 = readJsonFile($jsonFile4);
$data5 = readJsonFile($jsonFile5);
$data6 = readJsonFile($jsonFile6);
$data7 = readJsonFile($jsonFile7); // Read the new JSON file

// Function to find the existing project ID
function findProjectId($array) {
    $projectId = '';
    foreach ($array as $value) {
        if (is_array($value)) {
            $projectId = findProjectId($value);
            if ($projectId) break;
        } elseif (is_string($value) && preg_match('/project-kaiju-no-\d{6}/', $value, $matches)) {
            $projectId = $matches[0];
            break;
        }
    }
    return $projectId;
}

// Find the existing project ID
$oldProjectId = findProjectId($data1);
if (!$oldProjectId) {
    $oldProjectId = findProjectId($data2);
}
if (!$oldProjectId) {
    $oldProjectId = findProjectId($data3);
}
if (!$oldProjectId) {
    $oldProjectId = findProjectId($data4);
}
if (!$oldProjectId) {
    $oldProjectId = findProjectId($data5);
}
if (!$oldProjectId) {
    $oldProjectId = findProjectId($data6);
}
if (!$oldProjectId) {
    $oldProjectId = findProjectId($data7);
}
if (!$oldProjectId) {
    die('No project ID found in JSON files');
}

// Generate a new unique project ID
$randomNumber = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT); // Ensure a 4-digit number
$randomNumber2 = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT); // Ensure a 4-digit number
$newProjectId = 'project-kaiju-no-' . $randomNumber2 . $randomNumber;

// Replace old project ID with new project ID in all JSON data
replaceProjectId($data1, $oldProjectId, $newProjectId);
replaceProjectId($data2, $oldProjectId, $newProjectId);
replaceProjectId($data3, $oldProjectId, $newProjectId);
replaceProjectId($data4, $oldProjectId, $newProjectId);
replaceProjectId($data5, $oldProjectId, $newProjectId);
replaceProjectId($data6, $oldProjectId, $newProjectId);
replaceProjectId($data7, $oldProjectId, $newProjectId); // Replace in new JSON file

// Update backendOverrides from array to object in all data
updateBackendOverrides($data1);
updateBackendOverrides($data2);
updateBackendOverrides($data3);
updateBackendOverrides($data4);
updateBackendOverrides($data6);
updateBackendOverrides($data7); // Update new JSON file

// Write updated JSON back to files
writeJsonFile($jsonFile1, $data1);
writeJsonFile($jsonFile2, $data2);
writeJsonFile($jsonFile3, $data3);
writeJsonFile($jsonFile4, $data4);
writeJsonFile($jsonFile5, $data5);
writeJsonFile($jsonFile6, $data6);
writeJsonFile($jsonFile7, $data7); // Write new JSON file

// echo 'All JSON files updated successfully with projectId: ' . $newProjectId;
