<?php


class EProduct
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $currency_code;

    /**
     * @var string
     */
    private $status;

    /**
     * EProduct constructor.
     * @param string $name
     * @param float $price
     * @param string $currency_code
     * @param string $status
     */
    public function __construct(string $name, float $price, string $currency_code, string $status)
    {
        $this->id            = uniqid();
        $this->name          = $name;
        $this->price         = $price;
        $this->currency_code = $currency_code;
        $this->status        = $status;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currency_code;
    }

    /**
     * @param string $currency_code
     */
    public function setCurrencyCode(string $currency_code): void
    {
        $this->currency_code = $currency_code;
    }

}