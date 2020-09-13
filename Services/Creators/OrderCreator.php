<?php


class OrderCreator
{
    private $orderRepository;

    public function __construct(IOrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function create(EOrder $order) {
        $this->orderRepository->create($order);
    }
}