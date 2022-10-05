<?php

namespace App\DateCalculator;

use DateInterval;
use DateTime;
use DateTimeZone;

/**
 * Calculador de datas
 */
class DateCalculator
{
    /**
     * Time Zone
     */
    public static $time_zone = 'America/Sao_Paulo';
    /**
     * Ajusta Time Zone
     * @param string $time_zone Time Zone definida || America/Sao_Paulo
     * @return void
     */
    public static function setTimeZone($time_zone = null)
    {
        self::$time_zone = $time_zone ?? self::$time_zone;
    }
    /**
     * Retorna uma data entre um intervalo de dias
     * @param integer $interval Intervalo a partir da data escolhida
     * @param string $date Data base para calcular o dia. || Data atual
     * @return string Intervalo de datas já calculado
     */
    public static function getIntervalDay($interval = 1, $date = null)
    {
        return self::getDateInterval($interval, $date, "D");
    }
    /**
     * Retorna uma data entre um intervalo de mêses
     * @param integer $interval Intervalo a partir da data escolhida
     * @param string $date Data base para calcular o mês. || Data atual
     * @return string Intervalo de datas já calculado
     */
    public static function getIntervalMonth($interval = 1, $date = null)
    {
        return self::getDateInterval($interval, $date, "M");
    }
    /**
     * Retorna uma data entre um intervalo de anos
     * @param integer $interval Intervalo a partir da data escolhida
     * @param string $date Data base para calcular o ano. || Data atual
     * @return string Intervalo de datas já calculado
     */
    public static function getIntervalYear($interval = 1, $date = null)
    {
        return self::getDateInterval($interval, $date, "Y");
    }
    /**
     * Retorna uma data entre um intervalo
     * @param integer $interval Intervalo a partir da data escolhida
     * @param string $date Data base para calcular o intervalo || Data atual
     * @param string $type Tipo de data escolhida. D = dia, M = mês, Y = ano. Vazio para dia
     * @return string Intervalo de datas já calculado
     */
    public static function getDateInterval($interval = 1, $date = null, $type = "D")
    {
        //Ajusta do Time zone de onde buscar a data
        date_default_timezone_set(self::$time_zone);

        //Recebe o valor passado ou a data atual
        $initial = $date ?? date('Y-m-d');

        //Instancia a classe DateTime com a Time Zone definida com a data inicial
        $dateTime = new DateTime($initial, new DateTimeZone(self::$time_zone));

        //Recebe a data
        $newDate = $dateTime->add(new DateInterval("P" . floor($interval) . self::setType($type)));

        return $newDate->format('Y-m-d');
    }
    /**
     * Trativa do tipo de data selecionada
     * @param string $type
     * @return string
     */
    private static function setType($type)
    {
        $selected = strtoupper($type);

        switch ($selected) {
            case "D":
                return $selected;
                break;
            case "M":
                return $selected;
                break;
            case "Y":
                return $selected;
                break;
            default:
                return "D";
                break;
        }
    }
}
