# Web-ip CLI Tool

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

### 1. Clone the Repository
First, clone this repository to your local machine:

``bash
git clone https://github.com/codetesla51/web-ip.git
cd web-zip``
## Install Guzzle From Composer 
``bash
composer require guzzlehttp/guzzle ``
