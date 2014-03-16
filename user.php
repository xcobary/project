<?php
$user = file_get_contents('C:/wamp/www/git/private/user.txt');

for($i = 0; $i < count($user); $i++){
    //separate each element and store in a temporary array
    $tmp = explode(', ', $user[$i]);

    // assign each element of the temporary array to a named array key
    $user[$i] = array('name' => $tmp[0], 'password' => $tmp[1]);
}

echo '<pre>';
print_r($user);
echo '</pre>';

mysql_select_db()