<?php

function dayWeek($date) {
    $day = [
        'Domingo',
        'Segunda-Feira',
        'Terça-Feira',
        'Quarta-Feira',
        'Quinta-Feira',
        'Sexta-Feira',
        'Sábado',
    ];
    return date('d/m/Y', strtotime($date)).' - '.$day[date('w', strtotime($date))];
}
echo dayWeek('2021-11-08');