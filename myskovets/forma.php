<?php

$present = [];

$multiple_match_names = [
    'Skills'
];

$one_match_names = [
    'first-name', 'last-name', 'birth-date', 'city', 'street', 'sex', 'email', 'phone', 'password', 'vidguk',
];
foreach ($one_match_names as $i => $nm):
    if (isset($_POST[$nm])):
        $present[$nm] = $_POST[$nm];
    endif;
endforeach;

foreach ($multiple_match_names as $i => $nm):
    $post_keys = array_keys($_POST);
    $matches = [];
    foreach ($post_keys as $j => $key):
        if (substr($key, 0, strlen($nm)) === $nm):
            $matches[] = $_POST[$key];
        endif;
    endforeach;

    if (count($matches) > 0):
        $present[$nm] = $matches;
    endif;
endforeach;

if (count($present) > 0):
    header("Content-Type: text/plain");
    foreach ($present as $field_name => $field_value):
        if (!is_array($field_value)):
            echo "$field_name => $field_value\n";
        else:
            $json = json_encode($field_value);
            echo "$field_name => $json";
        endif;
    endforeach;
endif;

?>