<?php


class ProductCreator
{
    /**
     * @var IProductRepository
     */
    private $productRepository;

    /**
     * ProductCreator constructor.
     * @param IProductRepository $productRepository
     */
    public function __construct(IProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function create(EProduct $product)
    {
        $this->productRepository->create($product);
    }
}