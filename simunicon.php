<?php

// http://www.unicode.org/Public/security/latest/confusables.txt
$data = file_get_contents('confusables.txt');

function convert($char, $option, $number) {
    global $data;

    if ($char == ' ') return ' ';

    $qchar = preg_quote($char);
    $qoption = preg_quote($option);
    preg_match_all("/\(\s(.*)\s→\s$qchar\s\)\s.*?$qoption.*?→/", $data, $matches);

    if (count($matches[1]) == 0) {
        $qchar = preg_quote(strtoupper($char));
        $qoption = preg_quote($option);
        preg_match_all("/\(\s(.*)\s→\s$qchar\s\)\s.*?$qoption.*?→/", $data, $matches);

        if (count($matches[1]) == 0) return $char;

        $hoge = $matches[1];
        if (preg_match("/rand/i", $number)) $number = rand(0, count($hoge)-1);
        return $hoge[($number <= count($hoge)-1) ? $number : count($hoge)-1];
    }

    $hoge = $matches[1];
    if (preg_match("/rand/i", $number)) $number = rand(0, count($hoge)-1);
    return $hoge[($number <= count($hoge)-1) ? $number : count($hoge)-1];
}

function simunicon($str, $option, $number) {
    $strlen = strlen($str);
    $result = '';
    for ($i = 0; $i <= $strlen; $i++) {
        $char = substr($str, $i, 1);
        $result .= convert($char, $option, $number);
    }
    return $result;
}
