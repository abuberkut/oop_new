<?php


class CreateProduct
{
    /**
     * @var ProductCreator
     */
    private $productCreator;

    /**
     * CreateProduct constructor.
     * @param ProductCreator $productCreator
     */
    public function __construct(ProductCreator $productCreator)
    {
        $this->productCreator = $productCreator;
    }

    public function perform(EProduct $product)
    {
        $this->productCreator->create($product);
    }
}