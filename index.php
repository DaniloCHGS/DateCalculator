<?php

require __DIR__ . "/vendor/autoload.php";

use App\DateCalculator\DateCalculator;

//Retorna 30 dias da data atual
$newDay = DateCalculator::getIntervalDay(1, null);

//Retorna 1 mês da data atual
$nextMonth = DateCalculator::getIntervalMonth(1);

//Retorna 10 anos da data atual
$newYear = DateCalculator::getIntervalYear(10);

//Retorna 6 meses da data atual
$newDate = DateCalculator::getDateInterval(6, null, "M");

echo $newDay;