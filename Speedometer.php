<?php


class Speedometer
{
    public const MILES = 0.621371;
    public const KM = 1.60934;

    public static function convertkmtomiles(int $distance): ?float
    {
        return $distance * self::MILES;
    }

    public static function convertmilestokm(int $miles): ?float
    {
        return $miles * self::KM;
    }

}