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
    echo json_encode($present);
endif;

?>