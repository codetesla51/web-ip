# Web-IP CLI Tool

`web-ip` is a simple PHP-based command-line tool that retrieves the IP address and geolocation of a website based on its URL. The tool also saves this information to a text file (`web-info.txt`), creating the file if it doesn't already exist.

## Features

- **IP Address Resolution**: Resolves the IP address of a given website URL.
- **Geolocation**: Retrieves the geolocation data (city, region, country, latitude, longitude) of the resolved IP address using the IP-API service.
- **File Logging**: Saves the IP address and geolocation data to a file (`web-info.txt`).

## Prerequisites

Before running the tool, make sure you have the following installed:

- **PHP**: Ensure PHP is installed and accessible from the command line. PHP version 7.4 or higher is recommended.
- **Composer**: PHP dependency manager is required to install the GuzzleHTTP library.
- **Toilet**: Used for displaying ASCII art in the terminal.
- **Figlet**: A program that generates text banners in various typefaces composed of letters made up of conglomerations of smaller ASCII characters.

## Installation

### 1. Install Composer

Composer is a dependency manager for PHP. Follow the instructions below to install Composer.

#### On Linux and macOS:
``bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer``
#### On Windows Visit:
``bash
composer --version
``

 ### 2. Clone Repository 

 ``bash
 git clone https://github.com/codetesla51/web-ip.git
cd web-ip``

### 3. Install Dependencies 

``bash
composer require guzzlehttp/guzzle
``
### 4.Install Figlet And Toilet 

``bash
sudo apt-get update
sudo apt-get install toilet figlet``

### Run Script 

``bash
php web-ip.php``

## Usage
 ## 1. The script will prompt you to enter a website URL.
## 2. After entering the URL, it will resolve the IP address and fetch the geolocation data.
## 3. The IP address and geolocation information will be displayed in the terminal and saved to web-info.txt in the current directory.
