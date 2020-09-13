<?php


class Currencies
{
    public const USD = "USD";
    public const EUR = "EUR";
    public const TJS = "TJS";
    public const RUB = "RUB";
    public const UZS = "UZS";

    public const CURRENCY_NUMBERS = [
        "USD" => "840",
        "RUB" => "810",
        "TJS" => "972",
        "EUR" => "978",
        "UZS" => "860"
    ];

    /**
     * @return string[]
     */
    public static function getCurrencyCodes(): array {
        return [
            self::TJS,
            self::USD,
            self::EUR,
            self::RUB,
            self::UZS,
        ];
    }
}