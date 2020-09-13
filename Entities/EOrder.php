<?php


class EOrder
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var EClient
     */
    private $client;

    /**
     * @var EProduct
     */
    private $product;

    public function __construct(EClient $client, EProduct $product)
    {
        $this->id = uniqid();
        $this->client = $client;
        $this->product = $product;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return EClient
     */
    public function getClient(): EClient
    {
        return $this->client;
    }

    /**
     * @param EClient $client
     */
    public function setClient(EClient $client): void
    {
        $this->client = $client;
    }

    /**
     * @return EProduct
     */
    public function getProduct(): EProduct
    {
        return $this->product;
    }

    /**
     * @param EProduct $product
     */
    public function setProduct(EProduct $product): void
    {
        $this->product = $product;
    }
}