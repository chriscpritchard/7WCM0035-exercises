#6WCM0035 Exercises
##Unit 1
###Calculator
A simple calculator, able to take 2 numbers and add, subtract, multiply and divide them
###currency
A currency conversion tool, the PHP version uses data from 1Forge (https://github.com/1Forge/php-forex-quotes)

To use this, you need to get an API key from https://1forge.com/ (free), and create a file called apikey.php in the currency-server directory. 

This needs to contain:
~~~~
<?php
$apikey = "YOUR_API_KEY";
~~~~
###VAT
A tool to add or remove VAT from the cost of an item