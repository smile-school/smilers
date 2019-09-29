<?php

$present = [];

$names = [
    'first-name', 'last-name', 'birth-date', 'city', 'sex', 'Skills',
];
foreach ($names as $i => $nm):
    if (isset($_POST[$nm])):
        $present[$nm] = $_POST[$nm];
    endif;
endforeach;

if (count($present) > 0):
    header("Content-Type: text/plain");
    foreach ($present as $field_name => $field_value):
        echo "$field_name => $field_value\n";
    endforeach;
endif;

?>