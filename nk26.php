<?php
// bismillah mulai nk26

function nk26_encode($data) {
    $a    = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',  'j',  'k',  'l',  'm',  'n',  'o',  'p',   'q',   'r',   's',   't',   'u',   'v',   'w',   'x',   'y',    'z', ' ');
            //                                       \                                              \                                      \
    $b    = array('2', '3', '4', '5', '6', '7', '8', '9', '12', '13', '14', '15', '16', '17', '18', '19', '112', '113', '114', '115', '116', '117', '118', '119', '111', '11111', '0');         
    return str_replace($a, $b, $data);
}

function nk26_encode_safe($data) {
    $data = strtolower($data);
    $a    = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',  'j',  'k',  'l',  'm',  'n',  'o',  'p',   'q',   'r',   's',   't',   'u',   'v',   'w',   'x',   'y',    'z', ' ');
            //                                       \                                              \                                      \
    $b    = array('2', '3', '4', '5', '6', '7', '8', '9', '12', '13', '14', '15', '16', '17', '18', '19', '112', '113', '114', '115', '116', '117', '118', '119', '111', '11111', '0');         
    return str_replace($a, $b, $data);
}

function nk26_decode($data) {
    $a    = array('z',     ' ');
    $b    = array('11111', '0');         
    $data = str_replace($b, $a, $data);

    $a    = array('y');
    $b    = array('111');         
    $data = str_replace($b, $a, $data);

    $a    = array('q',   'r',   's',   't',   'u',   'v',   'w',   'x');
    $b    = array('112', '113', '114', '115', '116', '117', '118', '119');         
    $data = str_replace($b, $a, $data); 

    $a    = array('i',  'j',  'k',  'l',  'm',  'n',  'o',  'p');
    $b    = array('12', '13', '14', '15', '16', '17', '18', '19');         
    $data = str_replace($b, $a, $data); 

    $a    = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');
    $b    = array('2', '3', '4', '5', '6', '7', '8', '9');         
    return str_replace($b, $a, $data); 
}
