<?php

function formatDate($text)
{
    $pattern = '/(\d{2})\.(\d{2})\.(\d{4})/';

    return preg_replace_callback($pattern, function ($matches) {
        $day = $matches[1];
        $month = $matches[2];
        $year = $matches[3];

        if ($month < 1 || $month > 12) {
            return "Помилка! \"$month\" такого місяця не існує";
        }

        switch ($month) {
            case '01':$monthName = 'січня';break;
            case '02':$monthName = 'лютого';break;
            case '03':$monthName = 'березня';break;
            case '04':$monthName = 'квітня';break;
            case '05':$monthName = 'травня';break;
            case '06':$monthName = 'червня';break;
            case '07':$monthName = 'липня';break;
            case '08':$monthName = 'серпень';break;
            case '09':$monthName = 'вересня';break;
            case '10':$monthName = 'жовтня';break;
            case '11':$monthName = 'листопада';break;
            case '12':$monthName = 'грудня';break;
            default:$monthName = 'Проверка';
        }

        return "$day $monthName $year";
    }, $text);
}

$inputText = "31.12.2020";
echo formatDate($inputText);
