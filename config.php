<?php 
//  tk_7f25740c-92ed-11ea-aac7-f23c9170642f
define('MERCHANT_KEY','tk_7f25740c-92ed-11ea-aac7-f23c9170642f'); //your ipay merchant key

define('SERVER_NAME', 'localhost');
define('DB_NAME' ,'');
define('DB_USERNAME' ,'');
define('DB_PASSWORD', '');

//function to generate unique invoice
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}


?>