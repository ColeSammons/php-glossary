<?php
// traditional array
$guitars1 = ['Vela', 'Explorer', 'Strat'];

echo $guitars1[0];
print_r($guitars1);

if (isset($guitars1[3])) {
    echo $guitars1[3];
} else {
    echo 'This guitar does not exist';
}

//associative array
$guitars2 = ['prs' => 'Vela', 'gibson' => 'Explorer', 'fender' => 'Strat'];
echo $guitars2['prs'];

?>