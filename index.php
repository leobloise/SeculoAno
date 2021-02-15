<?php

function seculoAno(string $year) 
{
    $year_tamanho = strlen($year);

    if($year_tamanho  <= 2) {
        throw new Exception('O ano deve ser completo com o seguinte formato: YYYY ou YYYY');   
    }
    elseif($year_tamanho <= 3) {
        $year = "0".$year;
    } 

    $first_two_digits = $year[0].$year[1];
    
    $last_two_digits = $year[2].$year[3];

    if($last_two_digits == '00') {
        return $first_two_digits;
    }

    return $first_two_digits + 1;

}

$year = "2101";

$seculo = seculoAno($year);

echo "O ano {$year} é do século {$seculo}".PHP_EOL;


