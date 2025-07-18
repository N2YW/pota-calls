# Quoted Text Extractor
This is a simple PHP web application that extracts callsigns from a pota.app .json array.

## Features
- Accepts user input through a textarea form
- Extracts text between single (`'`) or double (`"`) quotes
- Displays extracted quoted text
- Ignores empty matches
- Escapes output to prevent XSS attacks
- Basic styling for result display

## Requirements
- PHP 5.3 or higher
- Web server (e.g., Apache, Nginx)
- Web browser

## Installation
1. Save the code in a file with a `.php` extension (e.g., `index.php`)
2. Place the file in your web server's root directory
3. Ensure the server has PHP enabled
4. Access the file through your web browser

## Usage
1. Open the page in a web browser
2. Enter text containing quoted content in the textarea
3. Click "Extract Quoted Text" to process
4. View extracted quoted text below the form

## Code Structure
- **HTML**: Basic form with textarea and submit button
- **CSS**: Minimal styling in `<style>` block for result display
- **PHP**: 
  - Handles POST requests
  - Uses `preg_match_all` with regex `/['"]{1}([^'"]*)['"]{1}/` to find quoted text
  - Outputs non-empty matches using `htmlspecialchars` for security

## Example
**Input:**