<?php
require "vendor/autoload.php";
use GuzzleHttp\Client;
system(PHP_OS_FAMILY == "Windows" ? "cls" : "clear");
system('toilet -f standard -F metal "web-ip"');
if (php_sapi_name() !== "cli") {
  die("This script must be run from the command line.\n");
}
echo "\033[33mEnter website's URL: \033[0m";
$url = trim(fgets(STDIN));
if (!filter_var($url, FILTER_VALIDATE_URL)) {
  die("\033[31mInvalid URL\n\033[0m");
}
$host_name = parse_url($url, PHP_URL_HOST);
if ($host_name === false) {
  die("\033[31mInvalid host name\n\033[0m");
}
$ip_address = gethostbyname($host_name);
if ($ip_address === $host_name) {
  die("\033[31mUnable to resolve IP address\n\033[0m");
}
echo "\033[32mIP Address: \033[0m" . $ip_address . "\n";
$client = new Client();
$apiUrl = "http://ip-api.com/json/{$ip_address}";
try {
  $response = $client->request("GET", $apiUrl);
  $locationData = json_decode($response->getBody(), true);
  if ($locationData["status"] === "fail") {
    die("\033[31mFailed to retrieve location data\n\033[0m");
  }
  echo "\033[32mLocation: \033[0m" .
    $locationData["city"] .
    ", " .
    $locationData["regionName"] .
    ", " .
    $locationData["country"] .
    "\n";
  echo "\033[32mLatitude: \033[0m" . $locationData["lat"] . "\n";
  echo "\033[32mLongitude: \033[0m" . $locationData["lon"] . "\n";
  $data =
    "URL: $url\nIP Address: $ip_address\nLocation: " .
    $locationData["city"] .
    ", " .
    $locationData["regionName"] .
    ", " .
    $locationData["country"] .
    "\n" .
    "Latitude: " .
    $locationData["lat"] .
    "\n" .
    "Longitude: " .
    $locationData["lon"] .
    "\n" .
    "-------------------------------------\n";
  $filename = "web-info.txt";
  if (!file_exists($filename)) {
    touch($filename); // Create the file if it doesn't exist
  }
  if (file_put_contents($filename, $data, FILE_APPEND )) {
    echo "\033[32mInformation saved to $filename\n\033[0m";
  } else {
    echo "\033[31mFailed to save information\n\033[0m";
  }
} catch (Exception $e) {
  die("\033[31mError: " . $e->getMessage() . "\n\033[0m");
}
