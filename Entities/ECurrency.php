<?php

class ECurrency {
    /**
     * @var string
     */
    private $number;
    /**
     * @var string
     */
    private $code;

    /**
     * Currency constructor.
     * @param string $number
     * @param string|null $code
     */
    public function __construct(string $number, string $code = null) {
        $this->number = $number;
        $this->code = $code ?? $this->guessCodeByNumber($number);
    }

    /**
     * @return string
     */
    public function getNumber(): string {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getCode(): string {
        return $this->code;
    }

    /**
     * @param string $number
     * @return string
     */
    private function guessCodeByNumber(string $number) {
        switch ($number) {
            case "643":
            case "810":
                return "RUB";
            case "978":
                return "EUR";
            case "840":
                return "USD";
            case "972":
            default:
                return "TJS";
        }
    }

}
